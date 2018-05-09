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
<link type="text/css" rel="stylesheet" href="/MC/Public/fuguiji/css/shop/shop.css">
<link type="text/css" rel="stylesheet" href="/MC/Public/fuguiji/css/home/popup.css">
</head>
<body>
<div id="page" class="page">
  <div class="deal">
    <header>
	
      <div class="header-name">
        <div class="header_box" style="background-image: url(&quot;/MC/Public/fuguiji/images/home/portrait/portrait-chick.png&quot;);"> </div>
      <!--  <div class="leaf"> </div> -->
      </div>
      <div class="deal-with"> <img src="/MC/Public/fuguiji/images/pop/deal-with.png"> 
      <a href="javascript:history.back(-1);">
      <img class="black_1" src="/MC/Public/fuguiji/images/pop/deal-bnt.png"></a> </div>
	  <!--
      <div class="deal-top-text"> 
	  
	  <img src="/MC/Public/fuguiji/images/pop/deal-Manteng.png"> 
	  <img src="/MC/Public/fuguiji/images/pop/wuding-top.png">
	  
        <div class="text-top">9999</div>
      </div>
	  -->
	  
    </header>

    <section class="deal-content">
      <div class="package">

        <div class="content xj-content" style=" display:;">
          <p><img src="/MC/Public/fuguiji/images/pop/big-header.png"></p>
          <form id="forms" onsubmit="return false">
            <div>
              <input type="text" name="account"  value="<?php echo ($data['account']); ?>" disabled maxlength="20" placeholder="账号(手机号)">
            </div>
			
            <div>
              <input type="text" name="realname"  value="<?php echo ($data['realname']); ?>" disabled maxlength="12" placeholder="真实姓名">
            </div>
			<!--
            <div class="radio-btn checkedRadio">
              <label class="male"><span>性别</span><span>男</span></label>
              <input type="radio" checked="checked" value="1" name="sex">
            </div>
            <div class="radio-btn">
              <label class="female">女</label>
              <input type="radio" value="0" name="sex">
            </div>  -->
            <div>
              <input type="text"  name="alipay" value="<?php echo ($data['alipay']); ?>" placeholder="支付宝" maxlength="20">
            </div>
			<div>
              <input type="text"  name="wechat" value="<?php echo ($data['wechat']); ?>" placeholder="微信" maxlength="20">
            </div>
			<div>
              <input type="text"  name="bank_name" value="<?php echo ($data['bank_name']); ?>" placeholder="开户行" maxlength="20">
            </div>
			<div>
              <input type="text"  name="bank_code" value="<?php echo ($data['bank_code']); ?>" placeholder="银行卡号" maxlength="20">
            </div>
            <!--<div class="xj-remarks">-->
              <!--<p>所需初始数小鸡&nbsp;<span class="num">330</span></p>-->
            <!--</div>-->
            <!--<div><input type="password" required name="password" placeholder="密码"></div>
        <div><input type="password" required name="password2" placeholder="确认密码"></div>-->
            <div>
              <input type="submit" value="" id="confirm1">
            </div>
          </form>
        </div>
        <!--出售鸡蛋-->
        <div class="content xj-content" style="display:none;">
          <p><img src="/MC/Public/fuguiji/images/pop/big-header.png"></p>
          <form id="forms" onsubmit="return false">
            <div class="xj-header">
              <div><img src="/MC/Public/fuguiji/images/pop/xj-egg.png"><span class="feasible">库存数量</span><span class="feasible-num">0.28</span></div>
              <div style="font-weight: bold;color:#735527;">出售给平台是市场价的百分之90价格</div>
            </div>
            <div>
              <input type="number" name="eggNum" required placeholder="出售数量须为1的倍数">
            </div>
            <div>
			
              <div class="radio-btn purchaser-btn checkedRadio">
                <label class="male"><span>购买人</span><span>市场 </span></label>
                <input type="radio" checked="checked" value="1" name="purchaser">
              </div> 
              <div class="radio-btn purchaser-btn checkedRadio ">
                <label class="female">平台 </label>
                <input type="radio" checked="checked" value="0" name="purchaser">
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
          <div class="deal-table-div danlog">
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
              <div class="deal-table-div xiaofeilog">
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
      <div class="left-sd">
        <ul>
          <li data-tab="1" class="nth1"> </li>
          <li data-tab="2" class="nth-give2"> </li>
          <li data-tab="3" class="nth-give3"> </li>
          <li data-tab="4" class="nth-give4 "> </li>
          <li data-tab="5" class="nth-give5 "> </li>
        </ul>
      </div>
    </section>
  </div>
  <section class="shade" style="display: none"> 
    <!--todo: 错误提示-->
    <div class="content min error" style="display: none">
      <div class="flex-box">
        <div class="f-l"></div>
        <div class="flex"></div>
        <div class="f-r"></div>
      </div>
      <p>出错啦！</p>
      <br>
      <button class="yellowBtn"><span>确认</span></button>
      <i class="bottom"></i> </div>
    <div class="register" style="display: none;height: 100%"> <img src="/MC/Public/fuguiji/images/window/register.png" alt=""> </div>
    <div class="content min confirm sell">
      <div class="flex-box">
        <div class="f-l"></div>
        <div class="flex"></div>
        <div class="f-r"></div>
      </div>
      <p>确认出售</p>
      <div class="sellinput">
        <input type="number" class="validation" value="">
        <a class="captchaBtn" id="yanzhengcode">获取验证码</a> </div>
      <br>
      <button class="buffBtn" id="to_not"><span>取消</span></button>
      <button class="yellowBtn" id="to_yes"><span>确认</span></button>
      <i class="bottom"></i> </div>
  </section>
</div>
<!--通用弹层-->
<div class="alert alert-msg"  id="alertMsg" style="display:none;">
        <div class="alert-board msg-board">
            <div class="context">
                <div class="text">您填写的信息有误，请注意检查~</div>
            </div>
            <a class="only-confirm"></a> </div>
    </div>
<script src="/MC/Public/fuguiji/js/jquery-1.7.2.min.js"></script>
<!--<audio src="/MC/Public/fuguiji/music/bg.mp3" preload="" loop></audio>-->
<script src="/MC/Public/fuguiji/js/global.js"></script>
<script src="/MC/Public/fuguiji/js/jquery-1.7.2.min.js"></script>
<script src="/MC/Public/fuguiji/js/function.js"></script>
<script src="/MC/Public/fuguiji/js/user.js"></script>
<script src="/MC/Public/fuguiji/js/global.js"></script>
<script>
  $(function () {
      var currency = userInfo.currency;
      $('.feasible-num').text(currency);
    $(".left-sd ul li").each(function (index){
      $(this).click(function (){
        for(var i=1;i<=5;i++)
        {
          $(".left-sd ul li").eq(i-1).attr("class","nth-give"+i);
        }
        $(this).attr("class","nth"+(index+1));

        $(".package .content").eq(index).siblings(".content").hide().end().show();
      });
    });

      $('.dan').click(function(){
          $('.dan').addClass('keep');
          $(this).removeClass('keep');
          $('.danlog table tbody').empty();
          $('.danlog table thead').empty();
          if($(this).attr('data-tab') == 1){
              var res = geBroodingLog(1);
              console.log(res);
              $('.danlog table thead').append("<tr><th>鸡的编号</th><th>数量</th><th>时间</th><td>产蛋日</td><th>状态</th></tr>");
              $(res).each(function(){
                  $('.danlog table tbody').append("<tr><td>"+this.animal_on+"</td><td>"+this.number+"</td><td>"+this.create_time+"</td><td>"+this.day+"</td><td>成功</td></tr>");
              });
          }else if($(this).attr('data-tab') == 2){
              var res = getRewardLog(1);
              console.log(res);
              $('.danlog table thead').append("<tr><th>内容</th><th>数量</th><th>时间</th></tr>");
              $(res).each(function(){
                  $('.danlog table tbody').append("<tr><td>"+this.desc+"</td><td>"+this.number+"</td><td>"+this.create_time+"</td></tr>");
              });
          }else{
              getSale(1);
          }
      });


//    $(".box div").each(function (index){
//      $(this).click(function (){
//          $(this).siblings().removeClass("keep").end().addClass("keep");
////          $(this).addClass("keep");
////        $(".package .content").eq(index).siblings(".content").hide().end().show();
//          if($(this).attr('data-tab') == 1){
//            getSale(1);
//          }else if($(this).attr('data-tab') == 2){
//
//          }
//      });
//    });

		$('td').click(function(){
			alert(1);
		});
		$('.nth-give3').on('click',function(){
			var res = geBroodingLog(1);
              $('.dan table thead').empty();
			   $('.dan table tbody').empty();
              $('.dan table thead').append("<tr><th>鸡的编号</th><th>数量</th><th>时间</th><td>产蛋日</td><th>状态</th></tr>");
              $(res).each(function(){
                  $('.dan table tbody').append("<tr><td>"+this.animal_on+"</td><td>"+this.number+"</td><td>"+this.create_time+"</td><td>"+this.day+"</td><td>成功</td></tr>");
              });
		});
		$('.nth-give4').on('click',function(){
		
			$('.xiaofeilog table thead').empty();
			 $('.xiaofeilog table tbody').empty();
			var res = getSale(1);
              $('.xiaofeilog table thead').append("<tr><th>标题</th><th>数量</th><th>金额</th><th>时间</th><th>状态</th></tr>");
              $(res).each(function(){
                  $('.xiaofeilog table tbody').append("<tr><td>"+this.desc+"</td><td>"+this.counts+"</td><td>"+this.number+"/蛋</td><td>"+this.create_time+"</td><td>成功</td></tr>");
              });
		});
      $('.xiaofei').click(function(){
          $('.xiaofei').addClass('keep');
          $(this).removeClass('keep');
          $('.xiaofeilog table tbody').empty();
          $('.xiaofeilog table thead').empty();
          if($(this).attr('data-tab') == 1){
              var res = getSale(1);
              $('.xiaofeilog table thead').append("<tr><th>标题</th><th>数量</th><th>金额</th><th>时间</th><th>状态</th></tr>");
              $(res).each(function(){
                  $('.xiaofeilog table tbody').append("<tr><td>"+this.desc+"</td><td>"+this.counts+"</td><td>"+this.number+"/蛋</td><td>"+this.create_time+"</td><td>成功</td></tr>");
              });
          }else if($(this).attr('data-tab') == 2){
              var res = getUseLog(1);
              // console.log(res);
              $('.xiaofeilog table thead').append("<tr><th>标题</th><th>数量</th><th>时间</th><th>状态</th></tr>");
              $(res).each(function(){
                  $('.xiaofeilog table tbody').append("<tr><td>"+this.type+"</td><td>"+this.counts+"</td><td>"+this.create_time+"</td><td>成功</td></tr>");
              });
          }else{
              getSale(1);
          }
      });

      /**
       * 修改个人资料
       */
      $('#confirm1').click(function(){
          var data = {};
          var nickname = $('input[name=nickname]').val();
          var realname = $('input[name=realname]').val();
          var sex = $('input[name=sex]').val();
          var account = $('input[name=account]').val();
		  var alipay = $('input[name=alipay]').val();
		  var wechat = $('input[name=wechat]').val();
		  var bank_name = $('input[name=bank_name]').val();
		  var bank_code = $('input[name=bank_code]').val();
          if(nickname){
              data.nickname = nickname;
          }
          if(realname){
              data.realname = realname;
          }
          data.sex = sex;
          if(account){
              data.account = account;
          }
		  if(alipay){
			data.alipay = alipay;
		  }
		  if(wechat){
			data.wechat = wechat;
		  }
		  if(bank_name){
			data.bank_name = bank_name;
		  }
		  if(bank_code){
			data.bank_code = bank_code;
		  }
		  
          data.token = userInfo.token;
          $.ajax({
              url:host + "/User/editUser",
              type:"post",
              data:data,
              dataType:"json",
              success:function(data){
                  if(data.errcode != 10000){
                      alertMsg(data.msg);
                  }else{
                      alertMsg("修改成功");
                  }
              }
          });
      });
      /**
       * 选择购买方
       */
      $('.purchaser-btn').click(function () {
	  
          $('.purchaser-btn').removeClass('checkedRadio');
          $('.purchaser-btn input').val(0);
          $(this).addClass('checkedRadio');
          $(this).find('input').val(1);
      });

      //$('#confirm2').click(function(){
	  $('#confirm2').on('click',function(){
          var eggNum = $('input[name=eggNum]').val();
          var purchaserType = $('input[name=purchaser]').val(); //1市场 0 是平台
		  if(purchaserType == 1){
			if(eggNum < 10 || eggNum % 10 != 0){
				alertMsg("挂卖10个起并且10的倍数");
				return false;
			  }
		  }
          $.ajax({
              url:host + "/User/saleEgg",
              type:"post",
              data:{token:userInfo.token,eggNum:eggNum,purchaserType:purchaserType},
              dataType:"json",
              success:function(data){
                  if(data.errcode != 10000){
                      alertMsg(data.msg);
                  }else{
                      alertMsg("挂卖成功");
                  }
              }
          });
      });
      //$('.nth-give5').click(function(){
	  $('.nth-give5').on('click',function(){
          $('.guadan tbody').empty();
          $.ajax({
              url:host + "/User/getHangSale",
              type:"post",
              data:{token:userInfo.token},
              dataType:"json",
              success:function(data){
                  if(data.errcode != 10000){
                      alertMsg(data.msg);
                  }else{
                      var res = data.result;
                      $(res).each(function(){
                          $('.guadan tbody').append("<tr><td>"+this.number+"个</td><td>"+this.status+"</td><td>"+this.account+"</td><td>"+this.caozuo+"</td></tr>");
                      });
                  }
              }
          });
      });

      $('#quxiao').live('touchstart', function(event) {
        var id =  $(this).attr('id-data');
          $.ajax({
              url:host + "/User/cancelLock",
              type:"post",
              data:{token:userInfo.token,id:id},
              dataType:"json",
              success:function(data){
                  if(data.errcode != 10000){
                      alertMsg(data.msg);
                  }else{
                      alertMsg("取消成功,请刷新当前页面");
					  //history.go(0);
                  }
              }
          });
      });
      $('#queren').live('touchstart', function(event) {
          $.ajax({
              url:host + "/User/confirm",
              type:"post",
              data:{token:userInfo.token,id:$(this).attr('id-data')},
              dataType:"json",
              success:function(data){
                  if(data.errcode != 10000){
                      alertMsg(data.msg);
                  }else{
                      alertMsg("确认收款,请刷新当前页面");
					  //history.go(0);
                  }
              }
          });
      });
      $('#del').live('touchstart', function(event) {
          $.ajax({
              url:host + "/User/back",
              type:"post",
              data:{token:userInfo.token,id:$(this).attr('id-data')},
              dataType:"json",
              success:function(data){
                  if(data.errcode != 10000){
                      alertMsg(data.msg);
                  }else{
                      alertMsg("退单成功");
					  //history.go(0);
                  }
              }
          });
      });
	  $('.header_box').on('click',function(){
			history.go(0);
	  });
  });
</script>
</body>
</html>