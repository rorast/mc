<?php
/**
 * Created by PhpStorm.
 * User: jiaruo
 * Date: 17/2/15
 * Time: 下午2:06
 */

namespace Api\Controller;

class LoginController extends CommonController
{
    public function index(){
        if(IS_POST){
//            print_r($_POST);EXIT();
            $this->checkGet(array('mobile','pwd'));
            $data = I('post.');
            $user = M('member')->field('id,account,password,status,token,nickname,active,phone,level,money,feed,currency,action_code')->where(array('account'=>$data['mobile']))->find();
            
			if($this->isFalse($user)){
                $this->echoJson(-2);
            }
            if($user['status'] == 1){
				$this->echoJson(-24);
			}
			if($user['password'] != md5($data['pwd'])){
                $this->echoJson(-2);
            };
			if($user['active'] == 0){
                $this->echoJson(-3);
            }
            $newData['token']       = md5(time().mt_rand(1111,9999));
            $newData['last_time']   = time();
            $result = M('member')->where(array('id'=>$user['id']))->save($newData);
            if($this->isFalse($result)){
                $this->echoJson(-1);
            }
            $user = M('member')->field('id,account,password,status,token,realname as nickname,phone,level,money,currency,action_code')->where(array('account'=>$data['mobile']))->find();
            unset($user['password']);
            $user['animal_count'] = M('user_animal')->where(array('userid'=>$user['id'],'expired_time'=>array('gt',time())))->count();
            $_SESSION['token'] = $user['token']; 
            $this->echoJson($user);
        }else{
            $this->echoJson(-1);
        }
    }
	
    public function reg(){
        if(IS_POST){
            $this->checkGet(array('leadMobile','mobile','pwd','payPwd','realname','code'));

            $data = I('post.');
            $this->verfiyCode($data['mobile'],$data['code']);
            $result = M('member')->where(array('account'=>$data['leadMobile']))->find();
            if($this->isFalse($result)){ //如果推荐人不存在
                $this->echoJson(-5);
            }
			
			$second_generation = $result['references'] ? $result['references'] : '';//2dai
			$three_generations = $result['second_generation'] ? $result['second_generation'] : '';//3dai
            $result = M('member')->where(array('account'=>$data['mobile']))->getField('id');
            if(!$this->isFalse($result)){ //如果账户存在
                $this->echoJson(-4);
            }
            $userId = M('member')->add(array(

                'account'   =>  $data['mobile'],
                'token'     =>  md5(mt_rand(111,999).time().mt_rand(111,999)),
                'password'  =>  md5($data['pwd']),
                'references'=>  $data['leadMobile'],
                'highpass'  =>  md5($data['payPwd']),
                'realname'  =>  $data['realname'],
                'phone'     =>  $data['mobile'],
                'reg_time'  =>  time(),
				'nickname'	=>	$datap['realname'],
				'second_generation' => $second_generation,
				'three_generations'	=>	$three_generations
            ));
            if($this->isFalse($userId)){
                $this->echoJson(-1);
            }
            $this->echoJson(10000);


        }else{
            $this->echoJson(-1);
        }

    }

    /**
     * 忘记密码
     */
    public function forgetPwd()
    {
        if(IS_AJAX){
            $this->checkGet(array('mobile','pwd','code'));

            $data = I('post.');

            $this->verfiyCode($data['mobile'],$data['code']);

            $user = M('member')->where(array('account'=>$data['mobile']))->find();
            if($this->isFalse($user)){
                $this->echoJson(-17);
            }

            $result = M('member')->where(array('id'=>$user['id']))->save(array('password'=>md5($data['pwd'])));
            if($result !== false){
                $this->echoJson(10000);
            }
            $this->echoJson(-7);
        }
        $this->echoJson(-7);
    }
}