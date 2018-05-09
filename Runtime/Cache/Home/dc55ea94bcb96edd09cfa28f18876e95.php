<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>富贵鸡</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,minimal-ui">
    <!-- viewport 后面加上 minimal-ui 在safri 体现效果 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- iphone safri 全屏 -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- iphone safri 状态栏的背景颜色 -->
    <meta name="apple-mobile-web-app-title" content="一文鸡">
    <!-- iphone safri 添加到主屏界面的显示标题 -->
    <meta name="format-detection" content="telphone=no, email=no">
    <!-- 禁止数字识自动别为电话号码 -->
    <meta name="renderer" content="webkit">
    <!-- 启用360浏览器的极速模式(webkit) -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">
    <!-- 是针对一些老的不识别viewport的浏览器，列如黑莓 -->
    <meta name="MobileOptimized" content="320">
    <!-- 微软的老式浏览器 -->
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <!-- 禁止百度转码 -->
    <meta name="screen-orientation" content="portrait">
    <!-- uc强制竖屏 -->
    <meta name="browsermode" content="application">
    <!-- UC应用模式 -->
    <meta name="full-screen" content="yes">
    <!-- UC强制全屏 -->
    <meta name="x5-orientation" content="portrait">
    <!-- QQ强制竖屏 -->
    <meta name="x5-fullscreen" content="true">
    <!-- QQ强制全屏 -->
    <meta name="x5-page-mode" content="app">
    <!-- QQ应用模式 -->
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="msapplication-TileColor" content="#000">
    <!-- Windows 8 磁贴颜色 -->
    <meta name="msapplication-TileImage" content="icon.png">
    <!-- Windows 8 磁贴图标 -->
    <link rel="Shortcut Icon" href="/MC/Public/fuguiji/favicon.ico">
    <!-- 浏览器tab图标 -->
    <link rel="apple-touch-icon" href="/MC/Public/fuguiji/images/icon.jpg">
    <!-- iPhone 和 iTouch，默认 57x57 像素，必须有 -->
    <link rel="apple-touch-icon" sizes="72x72" href="/MC/Public/fuguiji/images/icon.jpg">
    <!-- iPad，72x72 像素  -->
    <link rel="apple-touch-icon" sizes="114x114" href="/MC/Public/fuguiji/images/icon.jpg">
    <!-- Retina iPhone 和 Retina iTouch，114x114 像素 -->
    <link rel="stylesheet" href="/MC/Public/fuguiji/css/reset.css">
    <link rel="stylesheet" href="/MC/Public/fuguiji/css/style.css">
    <link type="text/css" rel="stylesheet" href="/MC/Public/fuguiji/css/loign/login.css">
    <link type="text/css" rel="stylesheet" href="/MC/Public/fuguiji/css/home/popup.css">
    <link type="text/css" rel="stylesheet" href="/MC/Public/fuguiji/css/home/home.css">
    <link type="text/css" rel="stylesheet" href="/MC/Public/fuguiji/css/shop/shop.css">
    <style>
        nav {
            position: absolute;
            top: 3rem;
            width: 100%;
        }
    </style>
</head>
<body>
<div id="page" class="page">
    <style>

        .Bubble.notEgg > i {
            opacity: 1;
            -webkit-transform: scale(1, 1);
            -moz-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            -o-transform: scale(1, 1);
            transform: scale(1, 1);
            pointer-events: initial;
            background-image: url('/MC/Public/fuguiji/images/farm/yida.png');
        }

    </style>
    <div class="chicken-page">
        <!--滚动公告
        <div class="notice" id="show-notice"><em>(点我查看完整公告)</em>
            <p><span>规则更新通知：</span></p>
        </div>-->
        <div class="userBox"><img class="bg" src="/MC/Public/fuguiji/images/farm/userBox.png" alt="">
            <section style="line-height: 59px;">
                <div class="headImg"
                     style="background-image: url(&quot;/MC/Public/fuguiji/images/home/portrait/portrait-chick.png&quot;);"></div>
                <!--todo: 两个button不要换行-->
                <!--todo: 按钮带提示标志 添加.tips-->
                <!--<button class="market library1"></button>-->
                <button class="friend market library2"></button>
                <button class="library"></button>
                <div class="item clearfix">
                    <div class="item-content">
                        <p class="name">姓名</p>
                        <!--todo:超出位数限制时 添加.round-->
                        <!--鸡蛋-->
                        <p class="clm clm-l round">0.3</p>
                        <!--鸡-->
                        <p class="clm clm-r round">315.0</p>
                    </div>
                </div>
            </section>
            <img src="/MC/Public/fuguiji/images/farm/l-vine.png" alt="" class="l-vine vine"> <img src="/MC/Public/fuguiji/images/farm/r-vine.png" alt=""
                                                                               class="r-vine vine"> <em
                    class="btn back"></em> <em class="btn refresh"></em></div>
        <div class="fieldBox">
            <div class="middleware">
                <ul class="field clearfix">
                    <img class="floor-bg" src="/MC/Public/fuguiji/images/farm/floor.png" alt="">
                    <!--todo 等级：lv1，lv2，lv3，lvMax-->
                    <li class="green g1" style="height: 90.5739px;">
                        <section class="Bubble"><i></i></section>
                    </li>
                    <li class="green g2" style="height: 90.5739px;">
                        <section class="Bubble"><i></i></section>
                    </li>
                    <li class="green g3" style="height: 90.5739px;">
                        <section class="Bubble"><i></i></section>
                    </li>
                    <li class="green g4" style="height: 90.5739px;">
                        <section class="Bubble"><i></i></section>
                    </li>
                    <li class="green g5" style="height: 90.5739px;">
                        <section class="Bubble"><i></i></section>
                    </li>
                    <li class="green g6" style="height: 90.5739px;">
                        <section class="Bubble"><i></i></section>
                    </li>
                    <li class="green g7" style="height: 90.5739px;">
                        <section class="Bubble"><i></i></section>
                    </li>
                    <li class="green g8" style="height: 90.5739px;">
                        <section class="Bubble"><i></i></section>
                    </li>
                    <li class="green g9" style="height: 90.5739px;">
                        <section class="Bubble"><i></i></section>
                    </li>
                    <li class="green g10" style="height: 90.5739px;">
                        <section class="Bubble"><i></i></section>
                    </li>
                    <li class="green g11" style="height: 90.5739px;">
                        <section class="Bubble"><i></i></section>
                    </li>
                    <li class="green g12" style="height: 90.5739px;">
                        <section class="Bubble"><i></i></section>
                    </li>
					 
                    <li class="farm-bar">
                        <img src="/MC/Public/fuguiji/images/farm/weiyang.png" alt="" class="bar-icon wy-icon" id="feed">
                        <img src="/MC/Public/fuguiji/images/farm/shidan.png" alt="" class="bar-icon sd-icon" id="harvest">
                        <div class="num"><img src="/MC/Public/fuguiji/images/farm/shiliao.png" alt=""><span id="num-in"></span></div>
                    </li>
                </ul>
            </div>
        </div>
		<!-- 
		<div class="home-menus clearfix" style="width:100%;"> 
          <img src="/MC/Public/fuguiji/images/farm/desktop.png" alt="">
          <button class="PY"></button>
          <button class="shop"></button>
            <button class="shop1" id="home"></button>
          <button class="log"></button>
          <button class="rule"></button>
        </div> -->
        <div class="home-menus clearfix" style="width:100%;">
                <button class="rule"></button>
            	<button class="shop"></button>
            	<button class="home home-menu"></button>
            	<button class="log"></button>
            	<button class="PY"></button>
            </div> 
        <div class="dog" style="top: 390px; display: none;">
            <div>
                <!--todo 小狗等级对应src数字-->
                <img src="/MC/Public/fuguiji/images/farm/dog/03.gif" alt=""></div>
        </div>
    </div>

    <section class="shade" style="display: none;">
        <!--todo：没有地块购买小狗-->
        <div class="content min confirm show_buyDog_prompt" style="display: none">
            <div class="flex-box">
                <div class="f-l"></div>
                <div class="flex"></div>
                <div class="f-r"></div>
            </div>
            <p><em class="chicken-num"></em>您还没有开地<br>
                确认是否购买哈士奇
                <!--<span>成功几率为<em class="odds">　</em>。</span>-->
            </p>
            <button class="buffBtn"><span>取消</span></button>
            <button class="yellowBtn"><span>确认</span></button>
            <i class="bottom"></i></div>
        <!--todo: .confirm 为带确定取消的输入框
                  .min 为小弹窗
                  .content 为子窗口
        -->
        <!--todo：增养-->
        <div class="content min confirm Up" style="display: none">
            <div class="flex-box">
                <div class="f-l"></div>
                <div class="flex"></div>
                <div class="f-r"></div>
            </div>
            <p>输入增养数量</p>
            <label for="">
                <input type="number" value="0">
            </label>
            <br>
            <button class="buffBtn"><span>取消</span></button>
            <button class="yellowBtn"><span>确认</span></button>
            <i class="bottom"></i></div>
        <!--todo：孵化-->
        <div class="content min confirm hatch" style="display: none">
            <div class="flex-box">
                <div class="f-l"></div>
                <div class="flex"></div>
                <div class="f-r"></div>
            </div>
            <p>输入孵化数量</p>
            <label for="">
                <input type="number" value="0">
            </label>
            <br>
            <button class="buffBtn"><span>取消</span></button>
            <button class="yellowBtn"><span>确认</span></button>
            <i class="bottom"></i></div>
        <!--todo: 收获提示确认-->
        <div class="content min reap" style="display: none">
            <div class="flex-box">
                <div class="f-l"></div>
                <div class="flex"></div>
                <div class="f-r"></div>
            </div>
            <p>恭喜收获 <em></em> 只小鸡</p>
            <br>
            <button class="yellowBtn"><span>确认</span></button>
            <i class="bottom"></i></div>
        <!--todo: 仓库小鸡数量不够-->
        <div class="content min NoChick" style="display: none">
            <div class="flex-box">
                <div class="f-l"></div>
                <div class="flex"></div>
                <div class="f-r"></div>
            </div>
            <p>仓库小鸡数量不够</p>
            <br>
            <button class="yellowBtn"><span>确认</span></button>
            <i class="bottom"></i></div>
        <!--todo: 还没有超级孵化机-->
        <div class="content no-mchine mchine" style="display: none;">
            <div class="title"><img src="/MC/Public/fuguiji/images/window/title-bg.png" class="title-c" alt=""> <img
                    src="/MC/Public/fuguiji/images/window/left_y.png" class="title-l" alt=""> <img src="/MC/Public/fuguiji/images/window/right_y.png"
                                                                                class="title-r" alt=""> <em>超级孵化机</em>
            </div>
            <i class="close"></i><i class="bottom"></i>
            <div class="show"><img src="/MC/Public/fuguiji/images/window/mchine/no-mchine.png" alt="">
                <div>
                    <p>你还没有超级孵化机呢</p>
                    <p>把鸡蛋放进超级孵化机能获得<br>
                        更高的收益哦~</p>
                </div>
            </div>
            <button class="yellowBtn"><span>推荐<em>50</em>位好友即可获取</span></button>
            <button class="yellowBtn" id="chickBuyMchine"><span>消耗<em>1000</em>小鸡马上获取</span></button>
        </div>
        <!--todo: 有超级孵化机-->
        <div class="content has-mchine mchine" style="display: none">
            <div class="title"><img src="/MC/Public/fuguiji/images/window/title-bg.png" class="title-c" alt=""> <img
                    src="/MC/Public/fuguiji/images/window/left_y.png" class="title-l" alt=""> <img src="/MC/Public/fuguiji/images/window/right_y.png"
                                                                                class="title-r" alt=""> <em>超级孵化机</em>
            </div>
            <i class="close"></i><i class="bottom"></i>
            <div class="show"><img src="/MC/Public/fuguiji/images/window/mchine/has-mchine.png" alt="">
                <div>
                    <p><em>0</em> 只鸡蛋正在孵化...</p>
                    <p>把鸡蛋放进超级孵化机能获得<br>
                        更高的收益哦~</p>
                </div>
            </div>
            <button class="yellowBtn push" style="width: 30%"><span>放入鸡蛋</span></button>
            <button class="yellowBtn pull" style="width: 30%;left: 96%;bottom: 5.144rem"><span>取出鸡蛋</span></button>
            <!--todo:有小鸡按钮带提示标志 添加i.tips-->
            <button class="yellowBtn getChick"><i class="tips"></i><span>收获小鸡</span></button>
            <!--<button class="yellowBtn pull"><span>取出鸡蛋</span></button>-->
            <!--todo:没有小鸡-->
            <button class="grayBtn" style="display:none"><span>还没有可以收获的小鸡</span></button>
        </div>
        <!--todo：放入鸡蛋-->
        <div class="content min confirm push-egg" style="display: none">
            <div class="flex-box">
                <div class="f-l"></div>
                <div class="flex"></div>
                <div class="f-r"></div>
            </div>
            <p>输入鸡蛋数量</p>
            <label for="">
                <input type="number" value="0">
            </label>
            <br>
            <button class="buffBtn"><span>取消</span></button>
            <button class="yellowBtn"><span>确认</span></button>
            <i class="bottom"></i></div>
        <!--todo：取出鸡蛋-->
        <div class="content min confirm pull-egg" style="display: none">
            <div class="flex-box">
                <div class="f-l"></div>
                <div class="flex"></div>
                <div class="f-r"></div>
            </div>
            <p>取出鸡蛋数量</p>
            <label for="">
                <input type="number" value="0">
            </label>
            <br>
            <button class="buffBtn"><span>取消</span></button>
            <button class="yellowBtn"><span>确认</span></button>
            <i class="bottom"></i></div>
        <!--todo：消耗鸡获取孵化机-->
        <div class="content min confirm buySuper" style="display: none">
            <div class="flex-box">
                <div class="f-l"></div>
                <div class="flex"></div>
                <div class="f-r"></div>
            </div>
            <p>将消耗1000只<i class="icon-check"></i>获取超级孵化机</p>
            <button class="buffBtn"><span>取消</span></button>
            <button class="yellowBtn"><span>确认</span></button>
            <i class="bottom"></i></div>
        <!--todo：消耗鸡升级狗-->
        <div class="content min confirm UpDog" style="display: none">
            <div class="flex-box">
                <div class="f-l"></div>
                <div class="flex"></div>
                <div class="f-r"></div>
            </div>
            <p> 将消耗<em class="chicken-num">100</em>只<i class="icon-check"></i><br>
                <span>成功率<em class="odds">　</em>。</span>继续吗？<br>
                <span class="text_opstion"></span></p>
            <button class="buffBtn"><span>取消</span></button>
            <button class="yellowBtn"><span>确认</span></button>
            <i class="bottom"></i></div>
        <!--todo：消耗鸡获取30天一键打扫-->
        <div class="content min confirm buyKeyCleanDay" style="display: none">
            <div class="flex-box">
                <div class="f-l"></div>
                <div class="flex"></div>
                <div class="f-r"></div>
            </div>
            <p> 将消耗<em class="chicken-num">100</em>只<i class="icon-check"></i><br>
                <span>购买一键打扫。</span>继续吗？ </p>
            <button class="buffBtn"><span>取消</span></button>
            <button class="yellowBtn"><span>确认</span></button>
            <i class="bottom"></i></div>
        <!--todo:好友列表-->
        <div class="content friend-list" style="display: none">
            <div class="title"><img src="/MC/Public/fuguiji/images/window/title-bg.png" class="title-c" alt=""> <img
                    src="/MC/Public/fuguiji/images/window/left_y.png" class="title-l" alt=""> <img src="/MC/Public/fuguiji/images/window/right_y.png"
                                                                                class="title-r" alt=""> <em>好友列表</em>
            </div>
            <i class="close"></i><i class="bottom"></i>
            <ul class="show">

            </ul>
            <!--<button class="yellowBtn" id="quickClean"><span>一键打扫</span></button>-->
            <button class="emw-code emw-open" id="invitation_friend"><span>我的二维码</span></button>
            <button class="yellowBtn" id="count"><span>直推人数</span></button>
        </div>
        <!--todo: 公告弹窗-->
        <div id="notice" class="content notice" style="display: none">
            <div class="title"><img src="/MC/Public/fuguiji/images/window/title-bg.png" class="title-c" alt=""> <img
                    src="/MC/Public/fuguiji/images/window/left_y.png" class="title-l" alt=""> <img src="/MC/Public/fuguiji/images/window/right_y.png"
                                                                                class="title-r" alt=""> <em>公告</em>
            </div>
            <i class="close"></i><i class="bottom"></i>
            <ul class="show">

            </ul>
        </div>


        <!--todo:我的仓库-->
        <div class="content storage" id="storage-a" style="display: none">
            <div class="title"><img src="/MC/Public/fuguiji/images/window/title-bg.png" class="title-c" alt=""> <img
                    src="/MC/Public/fuguiji/images/window/left_y.png" class="title-l" alt=""> <img src="/MC/Public/fuguiji/images/window/right_y.png"
                                                                                class="title-r" alt=""> <em>我的仓库</em>
            </div>
            <i class="close"></i><i class="bottom"></i>
            <ul class="show">
                <!--todo：列表项固定-->
                <li class="text"><i class="ico chick"></i>
                    <div class="content">
                        <p class="name">富贵鸡</p>
                        <em  class="info" id="fuguiji">24552只</em>
                    </div>
                    <!--<button class="redListBtn" id="gotoUp"><span>去增养</span></button>-->
                </li>
                <li class="text"><i class="ico egg"></i>
                    <div class="content">
                        <p class="name">鸡蛋</p>
                        <!--<em>25只</em>-->
                        <em class=" info" id="jidan">123</em>
                    </div>
                    <!--<button class="redListBtn" id="hatch"><span>去孵化</span></button>-->
                </li>
                <li class="text"><i class="ico fence"></i>
                    <div class="content">
                        <!--<p class="name">木栅栏</p>-->
                        <p class="name fenceLevel">帮好友买鸡</p>
                        <p class="info" ><em id="jihuoma">升级</em></p>
                    </div>
                    <!--<button class="redListBtn fenceLevel"><span>升级</span></button>-->
                </li>
				
                <!--<li class="text library-dog"><i class="ico haDog"></i>-->
                    <!--<div class="content">-->
                        <!--&lt;!&ndash;<p class="name">哈士奇<em class="grade">Lv.1</em></p>&ndash;&gt;-->
                        <!--<p class="name">哈士奇<em class="grade dogLevel"></em></p>-->
                        <!--<p class="info">等级越高，小鸡的产量越高哦</p>-->
                    <!--</div>-->
                    <!--<button class="redListBtn"><span>购买</span></button>-->
                <!--</li>-->
                <!--<li class="text haveSuperIncubator"><i class="ico machine"></i>-->
                    <!--<div class="content">-->
                        <!--<p class="name">孵化机</p>-->
                        <!--<p class="info">孵化机孵化鸡蛋，产量更高哦</p>-->
                    <!--</div>-->
                    <!--<button class="redListBtn"><span>获得</span></button>-->
                <!--</li>-->
                <!--<li class="text"><i class="ico clean"></i>-->
                    <!--<div class="content">-->
                        <!--<p class="name">一键打扫</p>-->
                        <!--<p class="info">打扫所有好友农场，期限30日</p>-->
                    <!--</div>-->
                    <!--<button class="grayListBtn keyCleanDay"><span>剩余0日</span></button>-->
                <!--</li>-->
            </ul>
        </div>

        <!--todo:我的仓库-->
        <!--<div class="content storage" id="storage-a" style="display: none">-->
            <!--<div class="title"><img src="/MC/Public/fuguiji/images/window/title-bg.png" class="title-c" alt=""> <img-->
                    <!--src="/MC/Public/fuguiji/images/window/left_y.png" class="title-l" alt=""> <img src="/MC/Public/fuguiji/images/window/right_y.png"-->
                                                                                                   <!--class="title-r" alt=""> <em>我的仓库</em>-->
            <!--</div>-->
            <!--<i class="close"></i><i class="bottom"></i>-->
            <!--<ul class="show">-->
                <!--&lt;!&ndash;todo：列表项固定&ndash;&gt;-->
                <!--<li class="number"><i class="ico chick"></i>-->
                    <!--<div class="content">-->
                        <!--<p class="name">富贵鸡</p>-->
                        <!--<em id="fuguiji">24552只</em>-->
                    <!--</div>-->
                    <!--&lt;!&ndash;<button class="redListBtn" id="gotoUp"><span>去增养</span></button>&ndash;&gt;-->
                <!--</li>-->
                <!--<li class="number"><i class="ico egg"></i>-->
                    <!--<div class="content">-->
                        <!--<p class="name">鸡蛋</p>-->
                        <!--&lt;!&ndash;<em>25只</em>&ndash;&gt;-->
                        <!--<em class="eggsNum" id="jidan">123</em>-->
                    <!--</div>-->
                    <!--&lt;!&ndash;<button class="redListBtn" id="hatch"><span>去孵化</span></button>&ndash;&gt;-->
                <!--</li>-->
               
                    <!--&lt;!&ndash;<button class="redListBtn fenceLevel"><span>升级</span></button>&ndash;&gt;-->
                <!--</li>-->
                <!--&lt;!&ndash;<li class="text library-dog"><i class="ico haDog"></i>&ndash;&gt;-->
                <!--&lt;!&ndash;<div class="content">&ndash;&gt;-->
                <!--&lt;!&ndash;&lt;!&ndash;<p class="name">哈士奇<em class="grade">Lv.1</em></p>&ndash;&gt;&ndash;&gt;-->
                <!--&lt;!&ndash;<p class="name">哈士奇<em class="grade dogLevel"></em></p>&ndash;&gt;-->
                <!--&lt;!&ndash;<p class="info">等级越高，小鸡的产量越高哦</p>&ndash;&gt;-->
                <!--&lt;!&ndash;</div>&ndash;&gt;-->
                <!--&lt;!&ndash;<button class="redListBtn"><span>购买</span></button>&ndash;&gt;-->
                <!--&lt;!&ndash;</li>&ndash;&gt;-->
                <!--&lt;!&ndash;<li class="text haveSuperIncubator"><i class="ico machine"></i>&ndash;&gt;-->
                <!--&lt;!&ndash;<div class="content">&ndash;&gt;-->
                <!--&lt;!&ndash;<p class="name">孵化机</p>&ndash;&gt;-->
                <!--&lt;!&ndash;<p class="info">孵化机孵化鸡蛋，产量更高哦</p>&ndash;&gt;-->
                <!--&lt;!&ndash;</div>&ndash;&gt;-->
                <!--&lt;!&ndash;<button class="redListBtn"><span>获得</span></button>&ndash;&gt;-->
                <!--&lt;!&ndash;</li>&ndash;&gt;-->
                <!--&lt;!&ndash;<li class="text"><i class="ico clean"></i>&ndash;&gt;-->
                <!--&lt;!&ndash;<div class="content">&ndash;&gt;-->
                <!--&lt;!&ndash;<p class="name">一键打扫</p>&ndash;&gt;-->
                <!--&lt;!&ndash;<p class="info">打扫所有好友农场，期限30日</p>&ndash;&gt;-->
                <!--&lt;!&ndash;</div>&ndash;&gt;-->
                <!--&lt;!&ndash;<button class="grayListBtn keyCleanDay"><span>剩余0日</span></button>&ndash;&gt;-->
                <!--&lt;!&ndash;</li>&ndash;&gt;-->
            <!--</ul>-->
        <!--</div>-->
        <!--todo:市场-->
        <div class="content storage" id="market-a" style="display: none">
            <div class="title"><img src="/MC/Public/fuguiji/images/window/title-bg.png" class="title-c" alt=""> <img
                    src="/MC/Public/fuguiji/images/window/left_y.png" class="title-l" alt=""> <img src="/MC/Public/fuguiji/images/window/right_y.png"
                                                                                                   class="title-r" alt=""> <em>交易市场</em>
            </div>
            <i class="close"></i><i class="bottom"></i>
            <nav>
                <div class="box box-cd">
                    <div class="dan keep" data-tab="1">交易市场</div>
                    <div class="dan" data-tab="2">购买记录</div>
                </div>
            </nav>
            <div class="cd-show">
            <ul class="show" style="top: 6rem;">
                <!--todo：列表项固定-->


            </ul>
            <ul class="show" style="top: 6rem;">
                <!--todo：列表项固定-->
                自己填充数据

            </ul>
            </div>

        </div>

        <!--todo:我的商城-->
        <div class="content storage shops" style="display: none">
            <div class="title"><img src="/MC/Public/fuguiji/images/window/title-bg.png" class="title-c" alt=""> <img
                    src="/MC/Public/fuguiji/images/window/left_y.png" class="title-l" alt=""> <img src="/MC/Public/fuguiji/images/window/right_y.png"
                                                                                                   class="title-r" alt=""> <em>商城</em>
            </div>
            <i class="close"></i><i class="bottom"></i>
            <ul class="show">
                <!--todo：列表项固定-->
                <li class="number"><i class="ico chick"></i>
                    <div class="content">
                        <p class="name">富贵鸡</p>
                        <em id="animalPrice">100/只</em>
                        <em class="chicksNum"></em></div>
                    <button class="redListBtn" id="buyAnimal"><span>购买一只</span></button>
                </li>
                <li class="number"><i class="ico egg"></i>
                    <div class="content">
                        <p class="name">饲料</p>
                        <em id="feedProce">10/袋</em>
                        <em class="eggsNum"></em></div>
                    <button class="redListBtn" id="buyFeed"><span>购买一袋</span></button>
                </li>
                <!--<li class="text"><i class="ico fence"></i>-->
                    <!--<div class="content">-->
                        <!--&lt;!&ndash;<p class="name">木栅栏</p>&ndash;&gt;-->
                        <!--<p class="name fenceLevel">激活码</p>-->
                        <!--<em id="feedProce">25袋</em>-->
                        <!--<p class="info" ><em id="actricePrice">10</em></p>-->
                    <!--</div>-->
                    <!--<button class="redListBtn fenceLevel"><span>购买</span></button>-->
                <!--</li>-->
                <li class="number"><i class="ico machine"></i>
                    <div class="content">
                        <p class="name">帮好友买鸡</p>
                        <em id="actricePrice">100/个</em>
                        <em class="eggsNum"></em></div>
                    <button class="redListBtn" id="buyPrice"><span>购买一个</span></button>
                </li>
				<li class="number"><i class="ico machine"></i>
                    <div class="content">
                        <p class="name">购买鸡蛋</p>
                        <em id="actricePrice">市场价/个</em>
                        <em class="eggsNum"></em></div>
                    <button class="redListBtn" id="goumaijidan"><span>去购买</span></button>
                </li>
                <!--<li class="text library-dog"><i class="ico haDog"></i>-->
                    <!--<div class="content">-->
                        <!--&lt;!&ndash;<p class="name">哈士奇<em class="grade">Lv.1</em></p>&ndash;&gt;-->
                        <!--<p class="name">哈士奇<em class="grade dogLevel"></em></p>-->
                        <!--<p class="info">等级越高，小鸡的产量越高哦</p>-->
                    <!--</div>-->
                    <!--<button class="redListBtn"><span>购买</span></button>-->
                <!--</li>-->
                <!--<li class="text haveSuperIncubator"><i class="ico machine"></i>-->
                    <!--<div class="content">-->
                        <!--<p class="name">孵化机</p>-->
                        <!--<p class="info">孵化机孵化鸡蛋，产量更高哦</p>-->
                    <!--</div>-->
                    <!--<button class="redListBtn"><span>获得</span></button>-->
                <!--</li>-->
                <!--<li class="text"><i class="ico clean"></i>-->
                    <!--<div class="content">-->
                        <!--<p class="name">一键打扫</p>-->
                        <!--<p class="info">打扫所有好友农场，期限30日</p>-->
                    <!--</div>-->
                    <!--<button class="grayListBtn keyCleanDay"><span>剩余0日</span></button>-->
                <!--</li>-->
            </ul>
        </div>

        <!--todo:注冊-->
        <div class="register" style="display: none;height: 100%"><img src="/MC/Public/fuguiji/images/window/register.png" alt=""></div>
        <!--todo：邀請-->
        <div class="invite" style="display: none;height: 100%"><img src="/MC/Public/fuguiji/images/window/invite.png" alt=""></div>
    </section>

    <!--仓库弹层-->
<div class="login-alert login-alert-msg" id="alert-div" style="display:none;">
        <div class="login-alert-board msg-board">
            <div class="context">
                <div class="text">这里是你自定义的内容</div>
            </div>
            <div class="btn">
                <button class="yellowBtn fl" id="only-confirm">确认</button>
                <button class="yellowBtn fr" id="only-concell">取消</button>
            </div>
        </div>
</div>
<!--通用弹层-->
<div class="login-alert login-alert-msg" id="xxx" style="display:none;">
    <div class="login-alert-board msg-board">
        <div class="context">
            <div class="text">这里是你自定义的内容</div>
        </div>
        <a class="only-confirm"></a>
    </div>
</div>
<!--游戏规则弹层-->
    <div class="popup" id="gameRule" style="display:none;">
        <div class="popfloor">
            <div class="list-form">
                <div class="border-form">
                    <ul>
                        <li>
                            <div class="rule">
                                <div>
                                    <div class="mun">1</div>
                                    <div class="kd1 type"></div>
                                </div>
                                <div>会员激活后会送一只富贵鸡，点击购买饲料(10个富贵蛋)，然后喂食富贵鸡，富贵鸡喂食24小时后产蛋</div>
                            </div>
                        </li>
                        <li>
                            <div class="rule">
                                <div>
                                    <div class="mun">2</div>
                                    <div class="zy2 type"></div>
                                </div>
                                <div>24小时后需要您手动去拾取富贵蛋哦，拾取完记得在次喂养呀，这样才是合理的安排</div>
                            </div>
                        </li>
                        <li>
                            <div class="rule">
                                <div>
                                    <div class="mun">3</div>
                                    <div class="fh1 type"></div>
                                </div>
                                <div>激活会员需要的激活币，喂养富贵鸡需要的饲料，甚至是富贵鸡，都可以去商城购买哦</div>
                            </div>
                        </li>
                        <li>
                            <div class="rule">
                                <div>
                                    <div class="mun">4</div>
                                    <div class="sh1 type"></div>
                                </div>
                                <div>一个账号只能购买10只富贵鸡哦</div>
                            </div>
                        </li>
                        <li>
                            <div class="rule">
                                <div>
                                    <div class="mun">5</div>
                                    <div class="fhj1 type"></div>
                                </div>
                                <div>您的激活币，饲料等都可以在钱包里看到哦</div>
                            </div>
                        </li>
                        <!--
                        <li>
                          <div class="rule">
                            <div>
                              <div class="mun">6</div>
                              <div class="ds type"></div>
                            </div>
                            <div>进入好友农场，选择打扫工具，在游戏屏幕中点击后，会有扫把扫地的动画，如果好友今日收获鸡蛋，为好友打扫可以获得相应的鸡蛋回到仓库。</div>
                          </div>
                        </li>
                        <li>
                          <div class="rule">
                            <div>
                              <div class="mun">7</div>
                              <div class="wl type"></div>
                            </div>
                            <div>围栏可以抵挡野兽攻击，总共四级，每一级围栏可以抵挡0.1%的攻击损失。</div>
                          </div>
                        </li>
                        <li>
                          <div class="rule">
                            <div>
                              <div class="mun">8</div>
                              <div class="xg type"></div>
                            </div>
                            <div>小狗设置9个等级，通过升级小狗等级可以提升每日鸡生蛋的数量。</div>
                          </div>
                        </li>
                        <li>
                          <div class="rule">
                            <div>
                              <div class="mun">9</div>
                              <div class="egg type"></div>
                            </div>
                            <div>系统每次拆分完后，会根椐方格里所养的小鸡数量产生相应数量的鸡蛋，当鸡蛋产生时方格上方会冒出鸡蛋泡泡。每天您需要点击泡泡让鸡蛋进入仓库，否则当天产生的鸡蛋会被第二天的鸡蛋覆盖。</div>
                          </div>
                        </li> -->
                    </ul>
                </div>
            </div>
            <div class="popup-title rule-title">游戏规则说明</div>
            <a class="close-btn ruleBtn"></a> </div>
    </div>
    <div class="alert alert-msg"  id="alertMsg" style="display:none;">
        <div class="alert-board msg-board">
            <div class="context">
                <div class="text">您填写的信息有误，请注意检查~</div>
            </div>
            <a class="only-confirm"></a> </div>
    </div>
</div>
<div class="filter">
	<div id="code">
	<textarea id="tuiguang" cols="20" rows="2" style="width:100%;background-color:orange" value>
  </textarea>
	
	</div> 
	<!--<div class="tuiguang"><input type="text" id="tuiguang" value=""></div>
    <img src="/Public/fuguiji/images/home/emw.png" alt="" class="code">-->
    <section class="chart">
        <button class="emw-code emw-close"><span>确认</span></button>
    </section>
</div>
<!--<audio src="/MC/Public/fuguiji/music/bg.mp3" preload="" loop></audio>-->
<script src="/MC/Public/fuguiji/js/jquery-1.7.2.min.js"></script>
<script src="/MC/Public/fuguiji/js/function.js"></script>
<script src="/MC/Public/fuguiji/js/user.js"></script>
<script src="/MC/Public/fuguiji/js/global.js"></script>
<script src="//cdn.bootcss.com/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
<script>
    $(function () {
	
	
        $.ajax({
            url:host + "/User/getResources",
            type:"post",
            data:{token:userInfo.token},
            dataType:"json",
            success:function(data){
                if(data.errcode != 10000){
                    alertMsg(data.msg);
                }else{
                    sessionStorage.setItem('userInfo', JSON.stringify(data.result[0]));
                    $('#num-in').text(data.result[0].feed);
					$('.clm-r').text(data.result[0].animal_count);
					$('.clm-l').text(data.result[0].currency);
                }
            }
        });

    })
	var u = 'http://' + window.location.hostname + '/index.php/Index/index/user/'+userInfo.account;
	$('#tuiguang').val(u);
	$('#code').qrcode(u);
    /**
     * 市场
     */
    $('.market').click(function(){
        $('#market-a .show').empty();
        $('.shade').show();
        $('#market-a').show();
        $.ajax({
            url:host + "/User/marketList",
            type:"post",
            data:{token:userInfo.token},
            dataType:"json",
            success:function(data){
                if(data.errcode != 10000){
                    alertMsg(data.msg);
                }else{
                    var res = data.result;
                    console.log(res);
                    $(res).each(function(){
                        var html = "<li class=\"text\"><i class=\"ico fence\"></i><div class=\"content\"><p class=\"name\">"+this.account+"</p><p class=\"name fenceLevel\">数量:"+this.number+"</p></div><button class=\"redListBtn buy\" id-data=\""+this.id+"\"><span>抢购</span></button></li>";
                        $('#market-a .show').append(html);
                    });
                }

            }
        });
    });
	
	$('.dan').click(function(){
		$('.show').empty();
		var keep = $(this).attr('data-tab');
		if(keep == 1){
			$.ajax({
				url:host + "/User/marketList",
				type:"post",
				data:{token:userInfo.token},
				dataType:"json",
				success:function(data){
					if(data.errcode != 10000){
						alertMsg(data.msg);
					}else{
						var res = data.result;
						console.log(res);
						$(res).each(function(){
							var html = "<li class=\"text\"><i class=\"ico fence\"></i><div class=\"content\"><p class=\"name\">"+this.account+"</p><p class=\"name fenceLevel\">数量:"+this.number+"</p></div><button class=\"redListBtn \" id-data=\""+this.id+"\"><span>抢购</span></button></li>";
							$('#market-a .show').append(html);
						});
					}

				}
			});
		}else{
			$.ajax({
				url:host + "/User/getMyDeal",
				type:"post",
				data:{token:userInfo.token},
				dataType:"json",
				success:function(data){
					if(data.errcode != 10000){
						alertMsg(data.msg);
					}else{
						var res = data.result;
						console.log(res);
						$(res).each(function(){
							var html = "<li class=\"text\"><i class=\"ico fence\"></i><div class=\"content\"><p class=\"name\">"+this.account+"</p><p class=\"name fenceLevel\">数量:"+this.number+"</p></div><button class=\"redListBtn \"><span>已锁定</span></button></li>";
							$('#market-a .show').append(html);
						});
					}

				}
			});
		}
	});
    $(".buy").live("click", ".buy", function(){
        var id = $(this).attr('id-data');
		var thas = this;
        $.ajax({
            url:host + "/User/buyEgg",
            type:"post",
            data:{token:userInfo.token,id:id},
            dataType:"json",
            success:function(data){
                if(data.errcode != 10000){
                    alertMsg(data.msg);
                }else{
					alertMsg("锁定成功,请联系卖家");
                    $(thas).addClass('grayListBtn');
                    $(thas).removeClass('redListBtn');
					$(thas).removeClass('buy');
                }
            }
        });
    });

    var chicken = {};
    $.ajax({
        url:host + "/User/getUserAnimal",
        type:"post",
        data:{token:userInfo.token},
		async: false,
        dataType:"json",
        success:function(data){
            if(data.errcode != 10000){
                alertMsg(data.msg);
            }else{
//                chicken = {"data":data.result};
                sessionStorage.setItem('animal', JSON.stringify(data.result));
                console.log(data);
            }

        }
    });
	$.ajax({
            url:host + "/User/getNotice",
            type:"get",
            dataType:"json",
			async: false,
            success:function(data){
                if(data.errcode != 10000){
                    alertMsg(data.msg);
                }else{
					$('#show-notice p span').text(data.result[0].title);
					$('.note-title .date').text(data.result[0].date);
					$('.notice div span').text(data.result[0].title);
					$('.note-context div').text(data.result[0].content);
                }

            }
        });
    var chicken = {"data":JSON.parse(sessionStorage.getItem('animal'))};
/*    var chicken = {
        "data": [
            {
                "name": "chicken1",  // 鸡的名字
                "delay": 1,      //延迟走动
                "top": 1.3,   //距离顶部的高度
                "left": 1
            },
            {
                "name": "chicken1",
                "delay": 2,
                "top": 1.3,
                "left": 3
            },
            {
                "name": "chicken1",
                "delay": 3,
                "top": 1.3,
                "left": 6
            }
        ]
    }*/


    var  feedText="产蛋中";
    var isFeeding=false;
    var isGaining=false;


    function addChicken(c) {
        for (var i = 0; i < c.length; i++) {
            var status=c[i].status;
            var txt="";
            var cl="";
            var li_index;
            li_index= Math.floor(Math.random()*12);  //可均衡获取0到9的随机整数
            while($(".field .green").eq(li_index).find(".chicken-box").size()>0)
            {
                li_index= Math.floor(Math.random()*c.length);  //可均衡获取0到9的随机整数
            }
            if(status==1)
            {
                txt="生产中";
                cl="producing"
            }
            else  if(status==2)
            {
                txt="待拾蛋";
                cl="pick";
            }
          else
            {
                txt="我饿啦";
                cl="hunger"
            }
            $(".field .green").eq(li_index).append('<div class="chicken-box run-move"  style="animation-delay:  ' + c[i].delay + 's; top: ' + c[i].top + 'rem;" id-name='+ c[i].name +'><i class="chicken-run" style="animation-delay:  ' + c[i].delay + 's;"></i><span class="txt '+cl+'">'+txt+'<span></div>');

        }
    }

    $(function () {

        addChicken(chicken.data);
        $(".field li").height($(".field li").width()*0.95);

        $(".field .chicken-box").click(function (o) {
          //  alert("鸡");
            if(isFeeding)
            {
                //喂养
                if($(this).find(".hunger").size()==1)
                {
                    var animalOn = $(this).attr('id-name');
                    var thas = this;
                    $.ajax({
                        url:host + "/User/feed",
                        type:"post",
                        data:{token:userInfo.token,animalOn:animalOn},
                        dataType:"json",
                        success:function(data){
                            if(data.errcode != 10000){
                                alertMsg(data.msg);
                            }else{
                                $(thas).find(".hunger").remove();
                                $(thas).append('<span class="txt  feed">'+feedText+'<span>');
								var num = $('#num-in').text();
								$('#num-in').html(num-1);
								alertMsg('喂养成功');
                            }
                        }
                    });

                }
            }
            if(isGaining)
            {
                //收获
                if($(this).find(".pick").size()==1)
                {
                    var animalOn = $(this).attr('id-name');
                    var thas = this;
                    $.ajax({
                        url:host + "/User/pickupEgg",
                        type:"post",
                        data:{token:userInfo.token,animalOn:animalOn},
                        dataType:"json",
                        success:function(data){
                            if(data.errcode != 10000){
                                alertMsg(data.msg);
                            }else{
                                //发送ajax请求，请求成功后执行下面代码
                                $(thas).find(".pick").remove();
								alertMsg('拾蛋成功');
								history.go(0);
                            }
                        }
                    });
                }
            }
        });

        $("#feed").click(function(){
        //    alert("feeding");
            isFeeding=true
            $(this).attr("src","/MC/Public/fuguiji/images/farm/weiyang_cur.png");
            $("#harvest").attr("src","/MC/Public/fuguiji/images/farm/shidan.png");
            isGaining=false;
        });

        $("#harvest").click(function(){
            isFeeding=false;
            isGaining=true;
            $(this).attr("src","/MC/Public/fuguiji/images/farm/shidan_cur.png");
            $("#feed").attr("src","/MC/Public/fuguiji/images/farm/weiyang.png");
        });

        $(".library").click(function(){
            if(!userInfo.animal_count) userInfo.animal_count = 0;
            if(!userInfo.currency) userInfo.currency = 0;
            if(!userInfo.action_code) userInfo.action_code = 0;
            $('#fuguiji').text("总计:拥有"+userInfo.animal_count+"只富贵鸡");
            $('#jidan').text("总计:拥有"+userInfo.currency+"个富贵蛋");
            $('#jihuoma').text("总计:拥有"+userInfo.action_code+"个帮好友买鸡");
            $(".shade").show();
           $("#storage-a").show();

        });
        $(".log").click(function(){
            $(".shade").show();
            $(".friend-list").show();

        });



        $(".l-vine").click(function(){
         //   $(".shade").show();
         //   $("#notice").show();

        });



        $(".friend-list .close").click(function(){
            $(".shade").hide();
            $(".friend-list").hide();

        });

        $(".storage .close").click(function(){
            $(".shade").hide();
            $(".storage").hide();

        });

        $(".ruleBtn").click(function(){
            $("#gameRule").hide();
        });
//        $('.rule').click(function () {
//            var userInfo = JSON.parse(sessionStorage.getItem('userInfo'));
//            var token = userInfo.token;
//            var url = "<?php echo U('Index/user');?>?token="+token;
//            window.location.href=url;
//        });

        $("#notice .close").click(function(){
            $(".shade").hide();
            $("#notice").hide();
        });
        /**
         * 显示商城
         */
        $(".shop1").click(function(){
            var userInfo = JSON.parse(sessionStorage.getItem('userInfo'));
            var token = userInfo.token;
            var url = "<?php echo U('Index/home');?>?token="+token;
            window.location.href=url;
        });
		$(".refresh").on('touchstart',function(){
			history.go(0);
		});
		$(".back").on('touchstart',function(){
			history.go(-1);
		});
		$('#goumaijidan').click(function(){
			window.location.href = "./buy.html";
		});
		


    });
</script>
</body>
</html>