<?php
/**
 * Created by PhpStorm.
 * User: jiaruo
 * Date: 17/2/16
 * Time: 上午10:14
 */

namespace Api\Controller;

class UserController extends CommonController
{
    protected $userId = null;
    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        if(IS_POST){
            $this->checkGet(array('token'));
            $this->userId = $this->tokenToUserId(I('post.token'));
        }
    }

    /**
     * 修改密码
     */
    public function changePwd(){
        if(IS_POST){
            $this->checkGet(array('oldPwd','newPwd','code'));
            $data = I('post.');
            $user = $this->getUser($this->userId);

            if(md5($data['oldPwd']) != $user['password']){
                $this->echoJson(-10);
            }
            $resutl = M('member')->where(array('id'=>$this->userId))->setField('password',md5($data['newPwd']));
            if($resutl){
                $this->echoJson(10000);
            }
        }
        $this->echoJson(-1);
    }
	/**
     * 
     */
    public function getUser(){
        if(IS_POST){
            $data = I('post.');
            $user = M('member')->field('id,account,password,status,token,realname as nickname,phone,level,money,currency,action_code')->where(array('id'=>$this->userId))->find();
            unset($user['password']);
			$this->echoJson($user);
        }
        $this->echoJson(-1);
    }
	
	public function getUsers(){
        if(IS_POST){
            $data = I('post.');
            $user = M('member')->field('id,account,password,references,status,token,realname as nickname,phone,level,money,currency,action_code')->where(array('id'=>$this->userId))->find();
            unset($user['password']);
			return $user;
        }
        $this->echoJson(-1);
    }
	public function getBank(){
        if(IS_POST){
            $data = I('post.');
            $user = M('member')->field('id,account,bank_code,bank_name,bank_account')->where(array('id'=>$this->userId))->find();
			$user['bankData'] = $user['bank_name'].' (尾号'.substr($user['bank_code'],-4).')';
			$this->echoJson($user);
        }
        $this->echoJson(-1);
    }
    /**
     * 激活下级
     * @param toUserId 下级用户ID
     */
    public function activeSubordinate(){
        if(IS_POST){
            $this->checkGet(array('toUserId'));
            $toUserId = I('post.toUserId');
            $toUser = M('member')->where(array('id'=>$toUserId,'active'=>0))->find();
            if($this->isFalse($toUser)){
                $this->echoJson(-13);
            }
            $code = M('member')->where(array('action_code'=>array('egt',1),'id'=>$this->userId))->find();
            if($this->isFalse($code)){
                $this->echoJson(-14);
            }
            $result = M('member')->where(array('id'=>$this->userId))->setDec('action_code',1);
            if($this->isFalse($result)){
                $this->echoJson(-1);
            }
            M('member')->where(array('id'=>$toUserId))->setField('active',1);
			
			$animalNo = $toUser['account'].'1';
            $lifeCycle = C('lifeCycle');//生命周期
            $expiredTime = time() + $lifeCycle * 86400;
            $animalResult = M('user_animal')->add(array(
                'userid'    => $toUserId,
                'animal_on' => $animalNo,
                'create_time'   => strtotime(date('Y-m-d',time()).' 00:00:00'),
                'expired_time'  => $expiredTime
            ));
			
            //动态奖金---第一部分---对直推者的奖励
            $user = $this->getUsers($this->userId);
            $effectiveUserCount = M('member')->where(array('active'=>1,'references'=>$user['account']))->count();//我的有效会员个数
			
            if(($effectiveUserCount % C('subordinateNumber')) == 0 && $effectiveUserCount != 0){ //达到条件 奖励富贵蛋
                if(M('member')->where(array('id'=>$this->userId))->setInc('currency',C('rewardNumber'))){
                    addBonusLog($this->userId,$toUserId,C('rewardNumber'),'直推'.$effectiveUserCount.'人,奖励'.C('rewardNumber').'个富贵蛋');
                }


            }
            //------------结束


            //动态奖金---第二部分---三级奖励
            //直属上级
			$one = M('member')->where(array('id'=>$this->userId))->setInc('currency',(C('oneLevelBonus')/100) * C('animalPrice'));
            if($one){
				//echo M('member')->_sql();
                addBonusLog($this->userId,$toUserId,(C('oneLevelBonus')/100) * C('animalPrice'),'一代奖励'.(C('oneLevelBonus')/100) * C('animalPrice').'个富贵蛋');
            }else{
				//echo 123;exit();
			}

            //第二级
            if(!$this->isFalse($user['references'])){
				//echo 123;exit();
                $UserReference = M('member')->where(array('account'=>$user['references']))->find();
                if(M('member')->where(array('account'=>$user['references']))->setInc('currency',(C('twoLevelsBonus')/100) * C('animalPrice'))){
                    addBonusLog($UserReference['id'],$toUserId,(C('twoLevelsBonus')/100) * C('animalPrice'),'二代奖励'.(C('twoLevelsBonus')/100) * C('animalPrice').'个富贵蛋');
                    //第三级
                    $twoUserReference = M('member')->where(array('account'=>$UserReference['references']))->find();
                    if($twoUserReference){
                        if(M('member')->where(array('account'=>$twoUserReference['account']))->setInc('currency',(C('threeLevelsBonus')/100) * C('animalPrice'))){
                            addBonusLog($twoUserReference['id'],$toUserId,(C('threeLevelsBonus')/100) * C('animalPrice'),'三代奖励'.(C('threeLevelsBonus')/100) * C('animalPrice').'个富贵蛋');
                        }
                    }
                }
            }
            //------------结束
            addResourceLog($this->userId,1,$toUserId);
            $this->echoJson(10000);
        }
        $this->echoJson(-1);
    }
    /**
     * 喂饲料
     * @param animalOn 鸡的编号
     */
    public function feed()
    {

        if(IS_POST){
            $this->checkGet(array('animalOn'));
            $animalOn = I('post.animalOn');
            $animal = M('user_animal')->where(array('userid'=>$this->userId,'animal_on'=>$animalOn,'expired_time'=>array('gt',time())))->find();
            if($this->isFalse($animal)){//鸡是否存在
                $this->echoJson(-1);
            }
            $outputIng = M('beltline')->where(array('userid'=>$this->userId,'animal_on'=>$animalOn,'status'=>array('in','1,2')))->find(); //获取生产中的小鸡
            if(!$this->isFalse($outputIng)){
                $this->echoJson(-16);
            }
            $feedCount = M('member')->where(array('feed'=>array('egt',1),'id'=>$this->userId))->find();
            if($this->isFalse($feedCount)){
                $this->echoJson(-15);
            }
            $result = M('member')->where(array('id'=>$this->userId))->setDec('feed',1);
            if($this->isFalse($result)){
                $this->echoJson(-1);
            }
            addResourceLog($this->userId,2,$this->userId);
            //计算生产个数
            $day = pastDay(time(),$animal['create_time']);//距离现在过了多少天
            $amount = outputAmount($day);

            $id = M('beltline')->add(array(
                'userid'    =>  $this->userId,
                'animal_on' =>  $animalOn,
                'status'    =>  1,
                'amount'    =>  $amount,
                'create_time'   =>  time(),
                'expired_time'  =>  time() + 3600 * C('broodCycle')
            ));
            if($id){
                $this->echoJson(10000);
            }
        }
        $this->echoJson(-1);
    }

    /**
     * 转账交易
     */
    public function currencyTransaction()
    {
        if(IS_POST){
            $this->checkGet(array('mobile','number'));
            $mobile = I('post.mobile');
            $number = I('post.number');
            $toUser = M('member')->where(array('account'=>$mobile))->find();
            if($this->isFalse($toUser)){
                $this->echoJson(-17);
            }
            $user = $this->getUser($this->userId);
            if($user['currency'] < $number){
                $this->echoJson(-11);
            }
            $result_ = M('member')->where(array('id'=>$this->userId))->setDec('currency',$number);
            $result__= M('member')->where(array('account'=>$mobile))->setInc('currency',$number);
            if($result_ && $result__){
                M('currency_transaction_log')->add(array(
                    'userid'    =>  $this->userId,
                    'touserid'  =>  $toUser['id'],
                    'number'    =>  $number,
                    'create_time'   =>  time()
                ));
                $this->echoJson(10000);
            }
        }
        $this->echoJson(-1);
    }
    /**
     * 拾取鸡蛋
     */
    public function pickupEgg(){
        if(IS_POST){
            $this->checkGet('animalOn');
            $animalOn = I('post.animalOn');
            $beltline = M('beltline')->where(array('userid'=>$this->userId,'animal_on'=>$animalOn,'status'=>2,'expired_time'=>array('elt',time())))->find();
            if($this->isFalse($beltline)){
                $this->echoJson('-18');
            }
            $res = M('beltline')->where(array('userid'=>$this->userId,'animal_on'=>$animalOn,'status'=>2,'expired_time'=>array('elt',time())))->setField('status',3);
            if($this->isFalse($res)){
                $this->echoJson(-1);
            }
            $animal = M('user_animal')->where(array('animal_on'=>$animalOn))->find();
            M('user_animal')->where(array('animal_on'=>$animalOn))->setInc('hatchery',$beltline['amount']);
            $brooding = array(
                'userid'    =>  $this->userId,
                'animal_on' =>  $animalOn,
                'number'    =>  $beltline['amount'],
                'day'       =>  pastDay(time(),$animal['create_time']),
                'create_time'   =>  time()
            );
            M('brooding_log')->add($brooding);
            if(M('member')->where(array('id'=>$this->userId))->setInc('currency',$beltline['amount'])){
                $this->echoJson(array('number'=>$beltline['amount']));
            }
        }
        $this->echoJson(-1);
    }
    /**
     * 获取我的鸡
     */
    public function getUserAnimal(){
        if(IS_POST){
			M('beltline')->where(array('userid'=>$this->userId,'status'=>1,'expired_time'=>array('elt',time())))->setField('status',2);
            $data = M('user_animal')->field('animal_on as name')->where(array('userid'=>$this->userId,'expired_time'=>array('gt',time())))->select();
            if(!$data){
                $this->echoJson(10000);
            }
            foreach ($data as $k => $v){
				$status = M('beltline')->where(array('animal_on'=>$v['name']))->order('id desc')->getField('status');
                $data[$k]['name'] = $v['name'];
                //$data[$k]['delay'] = mt_rand(3,30);
				$data[$k]['delay'] = 0;
                //$data[$k]['top'] = mt_rand(0,12);
                $data[$k]['top'] = "1.3";
				$data[$k]['left'] = 9;
                $data[$k]['status'] = $status ? $status : 3;
            }
            $this->echoJson($data);
        }
        $this->echoJson(-1);
    }

    /**
     * 获得我的资源
     */
    public function getResources(){
        if(IS_POST){
            $user = M('member')->field('id,account,password,status,token,realname as nickname,feed,phone,level,money,currency,action_code')->where(array('token'=>I('token')))->find();
//            echo M('member')->_sql();
            if($this->isFalse($user)){
                $this->echoJson(-2);
            }
            $user['animal_count'] = M('user_animal')->where(array('userid'=>$user['id'],'expired_time'=>array('gt',time())))->count();
            $this->echoJson($user);
        }
    }
    /**
     * 获得我的下级
     */
    public function getPartner()
    {
        if(IS_POST){

            $data = I();
            $user = M('member')->where(array('token'=>$data['token']))->find();
            if($this->isFalse($user)){
                $this->echoJson(-17);
            }
            $partner = M('member')->field('id,account,active,reg_time')->where(array('references'=>$user['account']))->select();
            $count = M('member')->field('id,account,active,reg_time')->where(array('references'=>$user['account']))->count();
           // echo M('member')->_sql();
            $data = array();
            $data['count'] = $count;
            $data['partner'] = $partner;
            $this->echoJson($data);
        }
    }
    /**
     * 修改个人资料
     */
    public function editUser(){
        if(IS_POST){
            $token = I('token');
            $data = I();
            unset($data['token']);
            $user = M('member')->where(array('token'=>$token))->save($data);
            if($user !== false){
                $this->echoJson(10000);
            }
        }
        $this->echoJson(-1);
    }

    /**
     * 购买记录
     */
    public function getUserFinance(){
        if(IS_POST){
            $data = I();
            $log = M('user_finance')
                ->where(array('userid'=>$this->userId))
                ->order('id desc')
                ->limit(20)
                ->select();
            foreach ($log as $k => $v){
                    if($v['create_time']){
                        $log[$k]['create_time'] = date('m-d',$v['create_time']);
                    }
            }
            $this->echoJson($log);
        }
    }

    /**
     * 获得使用资源记录
     */
    public function getUseLog(){
        if(IS_POST){
            $data = I();
            $log = M('resource_log')
                ->where(array('userid'=>$this->userId))
                ->order('id desc')
                ->limit(20)
                ->select();
            foreach ($log as $k => $v){
                if($v['create_time']){
                    $log[$k]['create_time'] = date('m-d',$v['create_time']);
                }
                if($v['type'] == 1){
                    $log[$k]['type'] = "激活码";
                }elseif($v['type'] == 2){
                    $log[$k]['type'] = "喂养饲料";
                }
            }
            $this->echoJson($log);
        }
    }
    /**
     * 获得产蛋记录
     */
    public function getBroodingLog(){
        if(IS_POST){
            $data = I();
            $log = M('brooding_log')
                ->where(array('userid'=>$this->userId))
                ->order('id desc')
                ->limit(20)
                ->select();
            foreach ($log as $k => $v){
                if($v['create_time']){
                    $log[$k]['create_time'] = date('m-d',$v['create_time']);
                }
            }
            $this->echoJson($log);
        }
    }

    /**
     * 获得奖励记录
     */
    public function getRewardLog(){
        if(IS_POST){
            $data = I();
            $log = M('bonus_log')
                ->where(array('userid'=>$this->userId))
                ->order('id desc')
                ->limit(20)
                ->select();
            foreach ($log as $k => $v){
                if($v['create_time']){
                    $log[$k]['create_time'] = date('m-d',$v['create_time']);
                }
            }
            $this->echoJson($log);
        }
    }
    /**
     * 出售鸡蛋
     */
    public function saleEgg(){
		$feed = 0.95;
        if(IS_POST){
            $data = I();
            $user = M('member')->where(array('id'=>$this->userId))->find();
            if($user['currency'] < $data['eggNum']){
                $this->echoJson('-19');
            }
            if($data['purchaserType'] == 1){ //出售给市场
                if(M('member')->where(array('id'=>$this->userId))->setDec('currency',$data['eggNum'])){
                    $id = M('market')->add(array(
                        'userid'    =>  $this->userId,
                        'number'    =>  $data['eggNum'],
                        'status'    =>  1,
                        'type'      =>  1
                    ));
                }
            }else{//出售给平台9折
                $market = M('market_price')->where(array('start'=>array('elt',date('Y-m-d',time()))))->order('start desc')->find();

                $price = $market['price'] * $data['eggNum'] * $feed;

                if(M('member')->where(array('id'=>$this->userId))->setDec('currency',$data['eggNum'])){
                    $res = M('market')->add(array(
                        'userid'    =>  $this->userId,
                        'number'    =>  $data['eggNum'],
                        'price'     =>  $price,
                        'status'    =>  3,
                        'create_time'   =>  time(),
                        'type'      =>  2
                    ));
                    $id = M('member')->where(array('id'=>$this->userId))->setInc('money',$price);
                }
            }
            if($id){
                $this->echoJson(10000);
            }
        }
        $this->echoJson(-1);
    }

    /**
     * 市场列表
     */
    public function marketList(){
        if(IS_POST){
            $log = M('market as m')
                ->field('m.id,m.userid,m.number,member.account')
                ->join('gs_member as member on member.id = m.userid')
                ->where(array('m.status'=>1))->select();
            $this->echoJson($log);
        }
        $this->echoJson(-1);

    }
    /**
     * 下单
     */
    public function buyEgg(){
        if(IS_POST){
            $data = I();
            $res = M('market')->where(array('id'=>$data['id'],'status'=>1))->find();
            if(!$res){
                $this->echoJson(-20);
            }
			if($this->userId < 0){
                $this->echoJson(-1);
            }
            $id = M('market')->where(array('id'=>$data['id'],'status'=>1))->save(array('status'=>2,'touserid'=>$this->userId));
            if($id !== false){
                $this->echoJson(10000);
            }
        }
        $this->echoJson(-20);
    }
    /**
     * 我挂卖的单
     */
    public function getHangSale(){
        if(IS_POST){
            $data = I();
            $log = M('market mar')
                ->field('mar.*,m.account')
                ->join('inner join gs_member as m on m.id = mar.touserid')
                ->where(array('userid'=>$this->userId))
                ->select();
            if($log){
                foreach ($log as $k => $v){
                    if($v['status'] == 1){
                        $log[$k]['status'] = "挂卖中";
                        $log[$k]['caozuo'] = "<a id='del'>退单</a>";
                    }elseif($v['status'] == 2){
                        $log[$k]['status'] = "已锁定";
                        $log[$k]['caozuo'] = "<a id='quxiao' id-data='".$v['id']."'>取消</a>|<a id='queren' id-data='".$v['id']."'>确认收款</a>";
                    }elseif($v['status'] == 3){
                        $log[$k]['status'] = "交易完成";
						$log[$k]['caozuo'] = "结束";
                    
                    }
                }
            }
			$log2 = M('market')
                ->where(array('userid'=>$this->userId,'type'=>2))
                ->select();
			foreach($log2 as $k => $v){
				$log2[$k]['status'] = "交易完成";
				$log2[$k]['account'] = "出售平台";
				$log2[$k]['caozuo'] = " ";
			}
			$log = array_merge($log,$log2);
            $this->echoJson($log);
        }
    }
	
   /**
     * 确认收款
     */
    public function confirm(){
        if(IS_POST){
            $data = I();
            $res = M('market')->where(array('id'=>$data['id']))->find();
            if(!$res){
                $this->echoJson(-1);
            }
            $id = M('market')->where(array('id'=>$data['id']))->setField('status',3);
            M('user_finance')->add(array(
                'userid'    =>$res['touserid'],
                'desc'      =>  '市场购买鸡蛋',
                'create_time'   =>  time(),
                'type'          =>4,
				'number'		=>	'线下',
                'counts'        =>  $res['number'],
            ));
			M('member')->where(array('id'=>$res['touserid']))->setInc('currency',$res['number']);
            if($id){
                $this->echoJson(10000);
            }
        }
        $this->echoJson(-1);
    }
    /**
     * 取消锁定
     */
    public function cancelLock(){
        if(IS_POST){
            $data = I();
            $res = M('market')->where(array('id'=>$data['id']))->find();
            if(!$res){
                $this->echoJson(-1);
            }
            $id = M('market')->where(array('id'=>$data['id']))->setField('status',1);
            M('market')->where(array('id'=>$data['id']))->setField('touserid',0);
            if($id){
                $this->echoJson(10000);
            }
        }
        $this->echoJson(-1);
    }
	/** 提现
     * @return array|false|string
     */
    public function Withdrawals(){
        if(IS_POST){
            $money = I('post.money') ? I('post.money') : 0;
            $user = M('member')->where(array('id'=>$this->userId))->find();
            if($user['money'] < $money){
                $this->echoJson(-22);
            }
			if(!$user['realname'] || !$user['bank_code']){
				$this->echoJson(-23);
			}
			if($money < C('withdrawLeast') || $money % 10 != 0){
				$this->echoJson(-26);
			}
            $id = M('member')->where(array('id'=>$this->userId))->setDec('money',$money);
			$money = $money - C('fee');
            $res= M('member_cash_log')->add(array(
                'prize' =>$money,
                'date'  =>  time(),
                'touch_member'=>$user['account'],
                'status'    =>  1,
                'content'   =>  '用户提现',
                'wallet'    =>  1,
                'zhuangtai' => 3,
				'drawing_name'=>$user['realname'],
				'drawing_code'	=>	$user['bank_code']
            ));
			if($res){
				$this->echoJson(10000);
			}
			
        }
		$this->echoJson(-1);
    }

    /**
     * 退单
     */
    public function back(){
        if(IS_POST){
            $data = I();
            $res = M('market')->where(array('id'=>$data['id']))->find();
            if(!$res){
                $this->echoJson(-1);
            }
            $id = M('market')->where(array('id'=>$data['id']))->delete();
            M('market')->where(array('id'=>$data['id']))->setField('touserid',0);
            $re = M('member')->where(array('id'=>$this->userId))->setInc('currency',$res['number']*0.95);
            if($id && $re){
                $this->echoJson(10000);
            }
        }
        $this->echoJson(-1);
    }
	//退出登录 
	public function outLogin(){
        $_SESSION['token'] = null;
        $this->echoJson(10000);
    }
	//获得我购买的单 子
	public function getMyDeal(){
        if(IS_POST){
            $data = M('market as market')->field('market.*,user.account')->join('inner join gs_member as user on user.id = market.userid')->where(array('market.touserid'=>$this->userId,'market.status'=>2))->select();
            $this->echoJson($data);
        }
        $this->echoJson(-1);
    }
	//钱包
	public function getWallet(){
		if(IS_POST){
			$user = M('member')->where(array('id'=>$this->userId))->find();
			$cash_log_a = M('member_cash_log')->where(array('touch_member'=>$user['account'],'status'=>0,'zhuangtai'=>1,'wallet'=>1))->order('id desc')->limit(10)->select();
			foreach($cash_log_a as $k => $v){
				$cash_log_a[$k]['date'] = date('m-d',$v['date']);
			}
			$cash_log_b = M('member_cash_log')->where(array('touch_member'=>$user['account'],'status'=>1,'wallet'=>1))->order('id desc')->limit(10)->select();
			foreach($cash_log_b as $k => $v){
				$cash_log_b[$k]['date'] = date('m-d',$v['date']);
			}
			$data['money'] = $user['money'];
			$data['recharge'] = $cash_log_a;
			$data['drawing'] = $cash_log_b;
			$this->echoJson($data);
		}
	}
	
	
	//获得公告
	public function getNotice(){
		$res = M('notice')->order('id desc')->find();
		$res['date'] = date('m-d',$res['date']);
		$this->echoJson($res);
	}
	 public function getIP(){
        $ip     =   getenv( 'REMOTE_ADDR ');
        $ip_    = getenv( 'HTTP_X_FORWARDED_FOR ');
        if(($ip_ != " ") && ($ip_ != "unknown ")){
            $ip=$ip_;
        }
        return   $ip;
    }
    public function aliPay(){
		if(IS_POST){
			if(I('post.money') % 50 != 0 || I('post.money') < 1 ){
				$this->echoJson(-25);
			}
			
			$money = I('post.money') * 100;
			//$money = 1;
			$orderId = mt_rand(1111,9999).time().mt_rand(1111,9999);
			$totalAmount = $money;
			$productName = "UserRecharge";
		
			$requestData = array();
			$requestData["callBack"]    = "http://baidu.com/index.php/Return/getReturnAliPay";
			$requestData["charset"]     = "02";
			$requestData["merchantId"]  = "***";
			$requestData["msgType"]     = "01";
			$requestData["orderId"]     = $orderId;
			$requestData["orderTime"]   = date('Ymdhis',time());
			$requestData["payWay"]      = "ZFBZF";
			$requestData["productDesc"] = "UserRecharge";
			$requestData["productName"] = $productName;
			$requestData["signType"]    = "RSA";
			$requestData["terminalIp"]  = $this->getIP() ? $this->getIP() :"139.122.22.103";
			$requestData["totalAmount"] = $totalAmount;
			$requestData["version"]     = "1.0.0";
			$signData = "";
			foreach($requestData as $key => $value)  {
				if( $value != ''){
					$signData = $signData.$key.'='.$value.'&';
				}
			}
			//echo $orderId."\n";
			//echo $signData;
			$merchantSign = "";
			$merchantCert ="";
			//RSA加密
			$certPath    = "./cert/";
			$certPass    = 749135;
			$signData= substr($signData,0,strlen($signData)-1);
			
			$certPaths = $certPath."***.p12";
			
			$rsaSignData =$this->rsaSign($certPaths,$certPass,$signData);
			$merchantCert = $rsaSignData['merchantCert'];
			$merchantSign = $rsaSignData['merchantSign'] ;

			//echo $url;die;
			reset($requestData);
			$requestData["merchantCert"]      = $merchantCert;
			$requestData["merchantSign"]      = $merchantSign;
				  
			$sTotalString = POSTDATA("https://oic.mfe88.net/mrpos/balipay1/ALI4080010.do",$requestData);
			
			$recv = $sTotalString["MSG"];
			$responseData = json_decode(iconv('GBK','UTF-8',$recv),true);
			$status = $responseData["respType"];
			//echo '状态'.$status;
			$code_img_url="";
			if($status != "R"){
				echo "交易失败";
			}else{
				$user = M('member')->where(array('id'=>$this->userId))->find();
				//村数据库
				M('member_cash_log')->add(array(
					'prize'	=>	I('post.money'),
					'touch_member'	=> $user['account'],
					'status'		=>	0,
					'content'		=>	"用户充值",
					'wallet'		=>	1,
					'zhuangtai'		=>	2,
					'orderid'		=>	$orderId,
					'date'			=>	time()
				));
				
				
				
				
				$qrCode = $responseData["qrCode"];
				$qrFileName = './Uploads/qrCodePath/'.$orderId.'.png';
				$errorCorrectionLevel = 'L';//容错级别
				$matrixPointSize = 10;//生成图片大小
				//生成二维码图片
				
				//vendor("phpqrcode.phpqrcode");
				$this->echoJson(array('url'=>$qrCode,'res'=>base64_encode(base64_encode(base64_encode($orderId)))));
			}
		}
        

    }
    public function rsaSign($certPaths,$certPass,$signData)
    {
        $rtValue = array();
        $pkcs12 = file_get_contents($certPaths);
		
        openssl_pkcs12_read($pkcs12,$certs,$certPass);
		
        $privateKey = $certs['pkey'];
        $publicKey = $certs['cert'];
        $merchantCert = strtoupper(bin2hex(base64_decode($publicKey)));
        $merchantCert = substr($merchantCert,24,strlen($merchantCert));
        $merchantCert = substr($merchantCert,0,strlen($merchantCert)-20);
		
        openssl_sign($signData,$binarySignature,$privateKey,OPENSSL_ALGO_SHA1);
		//echo 123;die;
        $merchantSign = strtoupper(bin2hex($binarySignature));
        $rtValue['merchantCert']=$merchantCert;
        $rtValue['merchantSign']=$merchantSign;
		
        return $rtValue;
    }
	public function scanpay_result(){
		$this->display();
	}
	
	
	
	public function wechatPay(){
		if(IS_POST){
			if(I('post.money') % 50 != 0 || I('post.money') < 1 ){
				$this->echoJson(-25);
			}
			$money = I('post.money');
			$service       = "pay.weixin.native";
			$version       = "1.0";
			$charset       = "UTF-8";
			$total_fee     = $money*100;
			$out_trade_no  = mt_rand(1111,9999).time().mt_rand(1111,9999);
			$body          = "user";
			$attach        = "user";
			$mch_create_ip = "139.16.223.12";
			$pay_type      = "pc";

			$sign_type     = "RSA";
			$mch_id       = "***";
			$signKey      = 123456;

			$notify_url   = "http://baidu.com/index.php/Return/getReturnWechat";
			$nonce_str    = strtotime("now");

			$reqUrl       =  'http://oic.mfe88.net/mrpos/bmcgwxpy/4420537.do';




			$requestData = array();
			$requestData["attach"]    = urlencode(iconv('GB2312','UTF-8',$attach));
			$requestData["body"] = urlencode(iconv('GB2312','UTF-8',$body));
			$requestData["charset"]    = $charset;
			$requestData["mch_create_ip"]     = $mch_create_ip;
			$requestData["mch_id"]   = $mch_id;
			$requestData["nonce_str"] = $nonce_str;
			$requestData["notify_url"]    = $notify_url;
			$requestData["out_trade_no"]      = $out_trade_no;
			$requestData["pay_type"]      = $pay_type;
			$requestData["service"]         = $service;
			$requestData["sign_type"]     = $sign_type;
			$requestData["total_fee"]       = $total_fee;
			$requestData["version"]      = $version;
			$signData = "";
			foreach($requestData as $key => $value)  {
				if( $value != ''){
					$signData = $signData.$key.'='.$value.'&';
				}

			}
			$sign = "";
			//MD5方式签名
			if($sign_type == "MD5"){
				$signData=$signData.'key='.$signKey;
				$sign = strtoupper(md5(iconv('GB2312','UTF-8',$signData)));
				$requestData["sign"] = $sign;
			}else{
				//RSA
				$certPath    = "./cert/";
				$certPass    = 749135;
				$signData= substr($signData,0,strlen($signData)-1);
				$certPaths = $certPath.$mch_id.".p12";
				$rsaSignData =rsaSign($certPaths,$certPass,iconv('GB2312','UTF-8',$signData));
				$merchantCert = $rsaSignData['merchantCert'];
				$merchantSign = $rsaSignData['merchantSign'] ;
				$requestData["cert"] = $merchantCert;
				$requestData["sign"] = $merchantSign;
			}
			$signData = str_replace('&not',htmlspecialchars('&not'),$signData);
			//echo $signData;
			$xmlData = arrayToXml($requestData);
			RecordLog("YGM",$xmlData);
			$sTotalString = POSTDATA1($reqUrl,$xmlData);
			$recv = $sTotalString["MSG"];
			$responseData = xmlToArray($recv);
			$status = $responseData["status"];
			$code_img_url="";
			if($status != "0"){
				echo "交易失败";
			}else{
				if($pay_type == "pc"){
					
					$user = M('member')->where(array('id'=>$this->userId))->find();
					//村数据库
					M('member_cash_log')->add(array(
						'prize'	=>	$money,
						'touch_member'	=> $user['account'],
						'status'		=>	0,
						'content'		=>	"用户充值",
						'wallet'		=>	1,
						'zhuangtai'		=>	2,
						'orderid'		=>	$out_trade_no,
						'date'			=>	time()
					));
					
					
					$code_img_url = $responseData["code_img_url"];
					$params = "code_img_url=".$code_img_url."&out_trade_no=".$out_trade_no."&total_fee=".$total_fee."&body=".$body;
					//header("Location: scanpay_result.php?".$params);
					$this->echoJson(array('url'=>$code_img_url));
				}else{
					echo "<br/>";
					echo "app下单结果";
					echo "<br/>";
					echo "支持的支付类型:".$responseData["services"];
					echo "<br/>";
					echo "授权码:".$responseData["token_id"];
					echo "<br/>";
				}
			}
		}
	}
	
}