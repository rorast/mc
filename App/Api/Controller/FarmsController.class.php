<?php
/**
 * Created by PhpStorm.
 * User: jiaruo
 * Date: 17/2/16
 * Time: 上午10:56
 */

namespace Api\Controller;


class FarmsController extends CommonController
{
    protected $userId = null;
    protected $animalPrice = null; //富贵鸡价格
    protected $feedProce = null;//私聊价格
    protected $actricePrice = null;//激活码价格
    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $this->animalPrice = C('animalPrice');
        $this->feedProce = C('feedProce');
        $this->actricePrice = C('actricePrice');

        if(IS_POST){
            $this->checkGet(array('token'));
            $this->userId = $this->tokenToUserId(I('post.token'));
        }
    }

    /**
     * 获得商品
     */
    public function getProducts()
    {
        $products = array(
            'animalPrice' => $this->animalPrice,
            'feedProce' => $this->feedProce,
            'actricePrice' => $this->actricePrice,
        );
        $this->echoJson($products);
    }

    /**
     * 购买牲畜
     */
    public function buyAnimal()
    {
        if(IS_POST){
            $time = strtotime(date('Y-m-d',time()).' 00:00:00');

            $buyNumber = M('user_animal')->where(array('userid'=>$this->userId,'create_time'=>$time))->count();

            if($buyNumber >= C('buyCycleMostNumber')){//判断今天是否购买
                $this->echoJson(-12);
            }

            $user = $this->getUser($this->userId);
            if($user['currency'] < $this->animalPrice){//货币是否足够
                $this->echoJson(-11);
            }
			
			$buyNumber = M('user_animal')->where(array('userid'=>$this->userId))->count();

			
            $resutl = M('member')->where(array('id'=>$this->userId))->setDec('currency',$this->animalPrice);
            if($this->isFalse($resutl)){
                $this->echoJson(-1);
            }
            $animalNo = $user['account'].$buyNumber + 1;
            $lifeCycle = C('lifeCycle');//生命周期
            $expiredTime = time() + $lifeCycle * 86400;
            $animalResult = M('user_animal')->add(array(
                'userid'    => $this->userId,
                'animal_on' => $animalNo,
                'create_time'   => $time,
                'expired_time'  => $expiredTime
            ));
            if($animalResult){
                addLog($this->userId,'购买富贵鸡',1,$this->animalPrice);
                $this->echoJson(10000);
            }
        }
        $this->echoJson(-1);
    }

    /**
     * 购买饲料
     */
    public function buyFeed()
    {
        if(IS_POST){
            $user = $this->getUser($this->userId);
            if($user['currency'] < $this->feedProce){//货币是否足够
                $this->echoJson(-11);
            }
            $resutl = M('member')->where(array('id'=>$this->userId))->setDec('currency',$this->feedProce);
            if($this->isFalse($resutl)){
                $this->echoJson(-1);
            }
            $feedResult = M('member')->where(array('id'=>$this->userId))->setInc('feed',1);
            if($feedResult){
                addLog($this->userId,"购买饲料",2,$this->feedProce);
                $this->echoJson(10000);
            }
        }
        $this->echoJson(-1);
    }
    /**
     * 购买激活码
     */
    public function buyActrice()
    {
        if(IS_POST){
            $user = $this->getUser($this->userId);
            if($user['currency'] < $this->actricePrice){//货币是否足够
                $this->echoJson(-11);
            }
            $resutl = M('member')->where(array('id'=>$this->userId))->setDec('currency',$this->actricePrice);
            if($this->isFalse($resutl)){
                $this->echoJson(-1);
            }
            $feedResult = M('member')->where(array('id'=>$this->userId))->setInc('action_code',1);
            if($feedResult){
                addLog($this->userId,"购买激活码",3,$this->actricePrice);
                $this->echoJson(10000);
            }
        }
        $this->echoJson(-1);
    }
	public function buyDan(){
		if(IS_POST){
			$num = I('post.num');
            $user = $this->getUser($this->userId);
            $market_price = M('market_price')->where(array('start'=>array('elt',date('Y-m-d'))))->order('start desc')->find();
			
			$price = $num * $market_price['price'];
			if($user['money'] < $price){
				$this->echoJson(-22);
			}
			if(M('member')->where(array('id'=>$this->userId))->setDec('money',$price)){
				M('member')->where(array('id'=>$this->userId))->setInc('currency',$num);
			}
			$this->echoJson(10000);
			
		}
		$this->echoJson(-1);
	}
	public function getPrice(){
		$market_price = M('market_price')->where(array('start'=>array('elt',date('Y-m-d'))))->order('start desc')->find();
		$this->echoJson($market_price);
		
	}

}