<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>富贵鸡</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,minimal-ui">
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
<link rel="Shortcut Icon" href="/Public/fuguiji/favicon.ico">
<!-- 浏览器tab图标 -->
<link rel="apple-touch-icon" href="/Public/fuguiji/images/icon.jpg">
<!-- iPhone 和 iTouch，默认 57x57 像素，必须有 -->
<link rel="apple-touch-icon" sizes="72x72" href="/Public/fuguiji/images/icon.jpg">
<!-- iPad，72x72 像素  -->
<link rel="apple-touch-icon" sizes="114x114" href="/Public/fuguiji/images/icon.jpg">
<!-- Retina iPhone 和 Retina iTouch，114x114 像素 -->
<link rel="stylesheet" href="/Public/fuguiji/css/reset.css">
<link rel="stylesheet" href="/Public/fuguiji/css/style.css">
<link type="text/css" rel="stylesheet" href="/Public/fuguiji/css/shop/shop.css">
<link type="text/css" rel="stylesheet" href="/Public/fuguiji/css/home/popup.css">
</head>
<body>
<div id="page" class="page">
  <div class="deal">
    <header>
	
      <div class="header-name">
        <div class="header_box" style="background-image: url(&quot;/Public/fuguiji/images/home/portrait/portrait-chick.png&quot;);"> </div>
      <!--  <div class="leaf"> </div> -->
      </div>
      <div class="deal-with"> <img src="/Public/fuguiji/images/pop/deal-with.png"> 
      <a href="javascript:history.back(-1);">
      <img class="black_1" src="/Public/fuguiji/images/pop/deal-bnt.png"></a> </div>
	  
    </header>

    <section class="deal-content">
      <div class="package package3">

        <div class="content xj-content" style=" display:block;">
          <form id="forms" onsubmit="return false">
              <div class="ye">可提现金额<em>250元</em></div>
            <div>
              <input class="" type="text" name="price"  value="" axlength="20" placeholder="请输入充值金额">
            </div>
              <!--<div>
                  <input class="" type="password" name="account"  value="" axlength="20" placeholder="请输入提现密码">
              </div>-->
              <div class="check-pay">提现到</div>
              <ul class="zf-list">
                  <li style="font-size: 14px; text-align: right;">
                      <img src="/Public/fuguiji/images/home/pay03.png" alt="" class="pay">
                      <span>中国银行（尾号778）</span>
                  </li>
              </ul>
            <div>
              <input type="submit" value="" id="confirm1">
            </div>
          </form>
        </div>
        <!--出售鸡蛋-->
        <div class="content xj-content" style="display:none;">
          <p><img src="/Public/fuguiji/images/pop/big-header.png"></p>
          <form id="forms" onsubmit="return false">
            <div class="xj-header">
              <div><img src="/Public/fuguiji/images/pop/xj-egg.png"><span class="feasible">库存数量</span><span class="feasible-num">0.28</span></div>
              <div style="font-weight: bold;color:#735527;">出售给平台是市场价的百分之80价格</div>
            </div>
            <div>
              <input type="number" name="eggNum" required placeholder="出售数量须为1的倍数">
            </div>
            <div>
              <div class="radio-btn purchaser-btn checkedRadio">
                <label class="male"><span>购买人</span><span>市场 </span></label>
                <input type="radio" checked="checked" value="1" name="purchaser">
              </div>
              <div class="radio-btn purchaser-btn">
                <label class="female">平台 </label>
                <input type="radio" value="0" name="purchaser">
              </div>
            </div>
            <!--<div>-->
              <!--<input type="text" name="friendName" placeholder="目标姓名">-->
            <!--</div>-->
            <!--<div><input type="text" name="code" placeholder="验证码" required oninvalid="setCustomValidity('必填验证码！');"><button>　</button></div>-->
            
            <!--<div id="transfer_open" class="">-->
              <!--<div id="side" class="close1">-->
                <!--<div id="inside" class="close2"></div>-->
              <!--</div>-->
              <!--<div class="text_desc">使用超级转账，一键交易</div>-->
            <!--</div>-->
            <div>
              <input type="submit" id="confirm2" value="">
            </div>
          </form>
        </div>
        <!--生产记录-->
        <div class="content xj-content" style="padding:0;margin-top:50px;display: none;">
          <nav>
            <div class="box">
              <div class="dan" data-tab="1">产蛋记录</div>
              <div class="dan keep" data-tab="2">奖励记录</div>
            </div>
          </nav>
          <div class="deal-table-div">
            <div style="overflow-y: auto;height: 100%;">
              <table class="deal-table">
                <thead>
                <tr>
                  <th>
                    购买人
                  </th>
                  <th>数量</th>
                  <th>类型</th>
                  <th>时间</th>
                  <th>状态</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!--消费记录-->
        <div class="content content-table" style="padding:0;margin-top:80px;display: none;">
              <nav>
                  <div class="box">

                      <div class="xiaofei " data-tab="1">购买记录</div>
                      <div class="xiaofei keep" data-tab="2">使/售记录</div>
                  </div>
              </nav>
              <div class="deal-table-div xiaofei">
                  <div style="overflow-y: auto;height: 100%;">
                      <table class="deal-table">
                          <thead>

                          </thead>
                          <tbody>

                          </tbody>
                      </table>
                  </div>
              </div>

          </div>
        <!--出售中-->
        <div class="content content-table" style="display: none;">
          <nav>
            <div class="box">

              <div class="xiaofei " data-tab="1">挂卖富贵蛋</div>
              <!--<div class="xiaofei keep" data-tab="2">使/售记录</div>-->
            </div>
          </nav>
          <div class="deal-table-div guadan">
            <div style="overflow-y: auto;height: 100%;">
              <table class="deal-table">
                <thead>
                  <tr>
                    <th>数量</th>
                    <th>状态</th>
                    <th>备注</th>
                    <th>操作</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>
</div>
<script src="/Public/fuguiji/js/jquery-1.7.2.min.js"></script>
<script src="/Public/fuguiji/js/global.js"></script>
<script src="/Public/fuguiji/js/function.js"></script>
<script src="/Public/fuguiji/js/user.js"></script>
<script>
	$(function(){
		$.ajax({
            url:host + "/User/getResources",
            type:"post",
            data:{token:userInfo.token},
            dataType:"json",
            success:function(data){
                if(data.errcode != 10000){
                    alertMsg(data.msg);
                }else{
                    //sessionStorage.setItem('userInfo', JSON.stringify(data.result[0]));
                    
					$('.ye em').text(data.result[0].money);
                }
            }
        });
		$.ajax({
            url:host + "/User/getBank",
            type:"post",
            data:{token:userInfo.token},
            dataType:"json",
            success:function(data){
                if(data.errcode != 10000){
                    alertMsg(data.msg);
                }else{
                    $('.zf-list li span').text(data.result[0].bankData);
                }
            }
        });
		$('#confirm1').click(function(){
			var price = $('input[name=price]').val();
			
			$.ajax({
            url:host + "/User/Withdrawals",
            type:"post",
            data:{token:userInfo.token,money:price},
            dataType:"json",
            success:function(data){
                if(data.errcode != 10000){
                    alert(data.msg);
                }else{
                    alert("提现成功");
					history.go(0);
                }
            }
        });
		});
	});
</script>
</body>
</html>