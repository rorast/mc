<?php
/**
 * Created by PhpStorm.
 * User: jiaruo
 * Date: 17/2/15
 * Time: 下午3:48
 */

namespace Api\Controller;


class ToolController extends CommonController
{
    public function sendCode(){
        if(IS_POST){
            $this->checkGet(array('mobile'));

            $data = I('post.');
            $result = $this->getCode($data['mobile']);

            if(!$this->isFalse($result)){
                $this->echoJson(10000);
            }
            $this->echoJson(-8);
        }
    }
    public function getPrice(){
        $list = M('market_price')->where(array('start'=>array('elt',date('Y-m-d'))))->order('start desc')->limit(7)->select();
        foreach ($list as $k => $v){
            $date[] = date('m-d',strtotime($v['start']));
            $price[] = $v['price'];
        }
        $date = array_reverse($date);
        $price = array_reverse($price);
        $this->ajaxReturn(array('errcode'=>10000,'date'=>$date,'price'=>$price));
    }

}