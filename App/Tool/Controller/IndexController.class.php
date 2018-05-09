<?php
namespace Tool\Controller;
use Think\Controller;
use Think\Page;

class IndexController extends CommonController {
    public function index(){

        $this->display();
    }



    //欢迎页
    public function welcome(){
        // 所有会员奖励钱包剩余总金额
        $reward_wallet = M('member_cash')->where()->sum('reward_wallet');
        //会员总数
        $member_quanbu= M('member')->where()->count();
        //今日注册会员
        $new= M('member')->where()->select();
        //$oldday = date('Y-m-d',strtotime($new['reg_time']));
        $newday = date('Y-m-d',time());
      //dump($new[542]['reg_time']);
       //$oldday = date('Y-m-d',$new[542]['reg_time']);
      // dump($oldday);
        $member_newuser =0;

        for($i=0;$i <= $member_quanbu; $i++){
             $oldday = date('Y-m-d',$new[$i]['reg_time']);

            if($oldday == $newday){
                $member_newuser +=1;
                 //echo "今日注册会员$member_newuser"."<br>";
            }

        }
       // echo $member_newuser;

        //有效会员
        $map['level'] = array('neq',0);
        $member_count= M('member')->where($map)->count();
        //会员购买总金额
//        $member_money =M('gold_list')->where(array('status'=>1))->sum('money');
        //明日需分红金额
//        $queue = M('queue')->where()->sum('bonusmoney');
        //平台已分红总金额
//        $queue_log = M('queue_log')->where()->sum('bonusmoney');
        //平台提现中的金额
        /*$map1['status'] = 0;
        $tixian_one = M('baoli_list')->where($map1)->sum('money');
        $jiangjin0['status'] = 0;
        $jiangjin0['type'] = 'jiangli';
        $tixian_jiangjin0 = M('baoli_list')->where($jiangjin0)->sum('money');
        $licai0['status'] = 0;
        $licai0['type'] = 'licai';
        $tixian_licai0 = M('baoli_list')->where($licai0)->sum('money');
        //平台已经处理提现成功的金额
        $map1['status'] = 1;
        $tixian_count = M('baoli_list')->where($map1)->sum('money');

        $jiangjin1['status'] = 1;
        $jiangjin1['type'] = 'jiangli';
        $tixian_jiangjin1 = M('baoli_list')->where($jiangjin1)->sum('money');
        $licai1['status'] = 1;
        $licai1['type'] = 'licai';
        $tixian_licai1 = M('baoli_list')->where($licai1)->sum('money');*/

        $this->assign('member_quanbu',$member_quanbu);
        $this->assign('member_count',$member_count);
        $this->assign('member_newuser',$member_newuser);
        $this->assign('member_money',$member_money);
        $this->assign('reward_wallet',$reward_wallet);
        $this->assign('tixian_jiangjin0',$tixian_jiangjin0);
        $this->assign('tixian_jiangjin1',$tixian_jiangjin1);
        $this->assign('tixian_licai0',$tixian_licai0);
        $this->assign('tixian_licai1',$tixian_licai1);
        $this->assign('queue',$queue);
        $this->assign('queue_log',$queue_log);
        $this->assign('tixian_one',$tixian_one);
        $this->assign('tixian_count',$tixian_count);
        $this->assign('list',$member_list);
        $this->assign('page',$show);
        $this->display();
    }



    //会员管理
    public function member(){

        $member_count= M('member')->where()->count();
        $page = new Page($member_count,1000);
        $show = $page->show();
        $member_list = M('member')->where()->limit($page->listRows.','.$page->firstRow)->select();
		
        $this->assign('member_count',$member_count);
        $this->assign('list',$member_list);
        $this->assign('page',$show);
        $this->display();
    }
  // 有效会员统计
 public function member1(){

        $map['level'] = array('neq',0);
        $member_count= M('member')->where($map)->count();
        $member_money =M('gold_list')->where(array('status'=>1))->sum('money');
        $queue = M('queue')->where()->sum('bonusmoney');
        $queue_log = M('queue_log')->where()->sum('bonusmoney');
        $page = new Page($member_count,1000);
        $show = $page->show();
        $member_list = M('member')->where($map)->limit($page->listRows.','.$page->firstRow)->select();

        $this->assign('member_count',$member_count);
        $this->assign('member_money',$member_money);
        $this->assign('queue',$queue);
        $this->assign('queue_log',$queue_log);
        $this->assign('list',$member_list);
        $this->assign('page',$show);
        $this->display();
    }

    //增加会员
    public function add_member(){


        $info = I('post.');

        $info['password'] = md5($info['password']);


        $m = M('member');

        $references = $m->where(array('account'=>$info['references']))->find();

        if($info['references'] != ''){

            if(!$references){
                die("<script>alert('推荐人不存在');history.go(-1);</script>");
            }
        }

        $phone = $m->where(array('phone'=>$info['phone']))->find();

        if($phone){

            die("<script>alert('该手机已经被注册');history.go(-1);</script>");
        }

        $info['reg_time'] = NOW_TIME;
        $info['reg_id'] = get_client_ip();

        if($m->create($info)){

            $mid = $m->add();
            init_cash($mid);
            //init_team($mid);
            $this->success('成功');

        }
        else{

            $this->success('错误');
        }

    }

    //禁用会员
    public function stop_member(){

        if(IS_POST){

            $id = I('post.id');
            $member =   M('member')->where(array('id'=>$id))->find();

            if($member['status'] == 0){

                M('member')->where(array('id'=>$id))->setField('status',1);
                $this->success('修改成功');
            }
            if($member['status'] == 1){

                M('member')->where(array('id'=>$id))->setField('status',0);
                $this->success('修改成功');
            }
        }
    }


    /**
     * 系统设置
     */

    public function system_set(){

        if(IS_POST){

            $data = I('post.');

            if(isset($data['limit_get_money'])){
                $data['limit_get_money'] = trim(implode('|',$data['limit_get_money']));
            }

            if(isset($data['limit_to_money'])){
                $data['limit_to_money'] = trim(implode('|',$data['limit_to_money']));
            }

            if(isset($data['limit_help_get'])){
                $data['limit_help_get'] = trim(implode('|',$data['limit_help_get']));
            }
            if(isset($data['limit_help_to'])){
                $data['limit_help_to'] = trim(implode('|',$data['limit_help_to']));
            }

            if(isset($data['rank_name'])){
                $data['max_rank'] = count(array_filter(explode('|',$data['rank_name'])));
            }

            if(isset($data['ticket_use'])){
                $data['ticket_use'] = trim(implode('|',$data['ticket_use']));
            }
            if( M('system_config')->where(array('id'=>1))->save($data))
            {

                S('system_config',$data,0);
                die("<script>alert('设定成功！');history.back(-1);</script>");
            }
            else{

                die("<script>alert('设定失败！');history.back(-1);</script>");
            }

        }
        //加载动态配置
        $c = M('system_config')->find();
        $c['limit_help_get'] =  array_filter(explode('|',$c['limit_help_get']));
        $c['limit_help_to'] =  array_filter(explode('|',$c['limit_help_to']));
        $c['limit_to_money'] =  array_filter(explode('|',$c['limit_to_money']));
        $c['limit_get_money'] =  array_filter(explode('|',$c['limit_get_money']));
        $c['ticket_use'] =  array_filter(explode('|',$c['ticket_use']));
        $this->assign('c',$c);
        $this->display();

    }
    /**
     * 分红设置
     */
    public function fenhong_set(){
        if($_POST){
            $path = 'App/Common/Conf/system.php';
            $file = include $path;
            $config = I('post.');
            $res = array_merge($file, $config);
            $str = '<?php return array(';
            foreach ($res as $key => $value){
                // '\'' 单引号转义
                $str .= '\''.$key.'\''.'=>'.'\''.$value.'\''.',';
            };
            $str .= '); ?>';
            //写入文件中,更新配置文件
            if(file_put_contents($path, $str)){
                die("<script>alert('设定成功！');history.back(-1);</script>");
            }else {
                die("<script>alert('设置失败！');history.back(-1);</script>");
            }

        }else{

            $this->display();
        }
    }

    /**
     * 激活码管理
     */

    public function pin(){

        if(IS_POST){

            $data = I('post.');
            make_pin(member_id($data['account']),$data['count']);
        }

        $pin_list = M('member_pin')->select();
        $this->assign('list',$pin_list);
        $this->display();
    }

    /**
     * 用户钱包管理
     */

    public function wallet(){

        if(IS_POST){
            $data = I('post.');



            $mid = M('member')->where(array('account'=>$data['account']))->field('id')->find();
            if(!$mid){
                die("<script>alert('用户不存在！');history.go(-1);</script>");
            }
			

            $mid = $mid['id'];


            if($data['wallet'] == ''){

                die("<script>alert('请选择一个钱包！');history.go(-1);</script>");
            }

            $wallet = member_cash($mid);//用户的钱包信息
            M('member')->where(array('id'=>$mid))->setInc($data['wallet'],$data['count']); //增加奖励

            if($data['wallet'] == 'money'){
                $wallet_type = 1;
            }

            if($data['wallet'] == 'currency'){

                $wallet_type = 2;
            }
            $after_wallet = member_cash($mid);  //奖励之后的信息

            $to['before_prize'] = $wallet[$data['wallet']];
            $to['prize'] = $data['count'];
            $to['after_prize'] = $after_wallet[$data['wallet']];
            $to['date'] = NOW_TIME;
            $to['touch_member'] = $data['account'];
            $to['recep_member'] = '系统';
            $to['content'] = '系统赠送';
            $to['wallet'] = $wallet_type;

            $ret = M('member_cash_log')->add($to);

            if($ret){

                $this->success('赠送奖励成功');
            }else{

                $this->error('赠送奖励失败');
            }
        }

        $wallet_list = M('member_cash_log')->where(array('status'=>0))->select();
        $this->assign('list',$wallet_list);
        $this->display();

    }


    //清除数据
    public function clear(){


        M('help_to')->where('1')->delete();
        M('help_get')->where('1')->delete();
        M('help_mate')->where('1')->delete();
        M('help_log')->where('1')->delete();
        M('member_cash_log')->where('1')->delete();

        die("<script>alert('清除成功！');history.go(-1);</script>");

    }

    //跳到前台
    public function home(){

        session('member',null);

        $get = I('get.');

        $member =  M('member')->where(array('account'=>$get['account']))->find();

        $auth = array(
            'id'=>$member['id'],
            'account'=>$member['account'],
            'nickname'=>$member['nickname'],
            'realname'=>$member['realname'],
            'references'=>$member['references'],
            'last_ip' => $member['last_ip'],
            'last_time' => $member['last_time'],
            'level' => $member['level'],
            'password' => $member['password'],
        );
        session('member', $auth);

        $this->redirect('../index.php/Index/index');
    }



    public function admin(){


        $list=  M('tool_admin')->select();
        $this->assign('list',$list);
        $this->display();
    }

    public function admin_add(){

        if(IS_POST){

            $post = I('post.');
            $post['password']  = md5($post['password']);
            $ret =   M('tool_admin')->create($post);
            if($ret){
                M('tool_admin')->add();
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        $this->display();
    }

    public function admin_del(){

        if(IS_POST){

            $r = M('tool_admin')->where(array('id'=>I('post.id')))->delete();

            if($r){

                $this->success('删除成功');
            }else{

                $this->error('删除失败');
            }
        }
    }


    //修改用户资料
    public function info(){



        if(IS_POST){


            $post = I('post.');

            $member =  M('member')->where(array('id'=>$post['id']))->find();

            if(!$member){

                die("<script>alert('用户不存在');history.go(-1);</script>");
            }

            if($post['password'] == ''){

                unset($post['password']);
            }

            if($post['password'] != ''){

                $post['password'] = md5($post['password']);
            }
            $ret =  M('member')->where(array('id'=>$post['id']))->save($post);

            if($ret){

                die("<script>alert('修改成功');history.go(-1);</script>");
            }else{

                die("<script>alert('修改失败');history.go(-1);</script>");
            }

        }


        $id = I('get.id');
        $m = M('member')->where(array('id'=>$id))->find();
        if(!$m){

            die("<script>alert('用户不存在');history.go(-1);</script>");
        }

        $this->assign('member',$m);
        $this->display();
    }



    function log(){

        $list =M('tool_admin_log')->where()->select();
        $this->assign('list',$list);
        $this->display();
    }
    function market(){
        $list = M('market_price')->order('id desc')->limit(10)->select();
        $this->assign('list',$list);
        $this->display();
    }
    function calendar(){
        if(IS_POST){
            $data = I('post.');
            if(M('market_price')->where(array('start'=>$data['date']))->find()){
                $id = M('market_price')->where(array('start'=>$data['date']))->save(array('price'=>$data['price']));
            }else{
                $id = M('market_price')->add(array(
                    'title' =>  "当日价格:".$data['price'],
                    'start' =>  $data['date'],
                    'price' =>  $data['price']
                ));
            }
            if($id !== false){
                echo "<script>alert('添加成功');</script>";
                die;
            }
            echo "<script>alert('添加失败');</script>";
            die;
        }else{
            $this->display();
        }
    }
    function getCalendarJson(){
        $data = M('market_price')->select();
        foreach ($data as $k => $v){
            $data[$k]['end'] = $v['start'];
            $data[$k]['allDay'] = true;
            $data[$k]['color'] = '#c7c7c7';
        }
        $this->ajaxReturn($data);
    }
	function drawing(){
		$drawing = M('member_cash_log')->where(array('status'=>1))->order('id desc')->select();
        $this->assign('list',$drawing);
        $this->display();
	}
	//打款
	function confirmDrawing(){
		if(IS_AJAX){
			$id = I('id');
			$log = M('member_cash_log')->where(array('id'=>$id,'zhuangtai'=>3))->find();
			if(!$log){
				echo json_encode(array('msg'=>"提款信息不存在",'errcode'=>-1));die;
			}
			$Deal = A('Deal');
			$res = $Deal->baoli_pass($log['id']);
			if($res === true){
				echo json_encode(array('msg'=>"成功提交银行处理",'errcode'=>1));die;
			}else{
				echo json_encode(array('msg'=>$res,'errcode'=>-1));die;
			}
			
		}
		echo json_encode(array('msg'=>"提款信息不存在",'errcode'=>-1));die;
	}
	function delLog(){
		if(IS_AJAX){
			$id = I('id');
			$log = M('member_cash_log')->where(array('id'=>$id))->find();
			if(!$log){
				echo json_encode(array('msg'=>"提款信息不存在",'errcode'=>-1));die;
			}
			if(M('member_cash_log')->where(array('id'=>$id))->delete()){
				
				echo json_encode(array('errcode'=>10000));die;
			}
		}
		echo json_encode(array('msg'=>"提款信息不存在",'errcode'=>-1));die;
	}
	//拒绝打款 
	function refuse(){
		if(IS_AJAX){
			$id = I('id');
			$log = M('member_cash_log')->where(array('id'=>$id,'zhuangtai'=>3))->find();
			if(!$log){
				echo json_encode(array('msg'=>"提款信息不存在",'errcode'=>-1));die;
			}
			if(M('member_cash_log')->where(array('id'=>$id))->save(array('zhuangtai'=>2))!== false){
				M('member')->where(array('account'=>$log['touch_member']))->setInc('money',$log['prize']);
				echo json_encode(array('errcode'=>10000));die;
			}
		}
		echo json_encode(array('msg'=>"提款信息不存在",'errcode'=>-1));die;
	}
    //
    //删除提款 充值日志
    function log_del(){
        if(IS_AJAX){
            $id = I('id');
            $log = M('member_cash_log')->where(array('id'=>$id))->find();
            if(!$log){
                echo json_encode(array('msg'=>"信息不存在",'errcode'=>-1));die;
            }
            if(M('member_cash_log')->delete($id)){
                echo json_encode(array('errcode'=>10000));die;
            }
        }
        echo json_encode(array('msg'=>"提款信息不存在",'errcode'=>-1));die;
    }
    //删除会员
    function member_del(){
        if(IS_AJAX){
            $id = I('id');
            $log = M('member')->delete($id);
            if($log){
                $this->success('删除成功');
            }
            $this->error('删除失败');
        }
    }

}
