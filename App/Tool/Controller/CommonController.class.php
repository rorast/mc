<?php
/**
 *
 * User:伽偌
 * QQ：2227232928
 * Date: 16/5/18
 * Time: 上午4:56
 */

namespace Tool\Controller;
use Think\Controller;
class CommonController extends Controller {


    public function _initialize(){
        header("Content type:text/html;charset=utf-8");
        //加载配置
        $config = M('system_config')->where(array('id'=>1))->find();
        $this->assign('config',$config);

        if(!check_admin_login() && ACTION_NAME != "jihuo"){// 还没登录 跳转到登录页面
            $this->redirect('/Relay/login');
        }

    }

}