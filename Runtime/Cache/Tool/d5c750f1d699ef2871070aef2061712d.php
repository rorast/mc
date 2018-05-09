<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/MC/Public/resource/lib/html5.js"></script>
<script type="text/javascript" src="/MC/Public/resource/lib/respond.min.js"></script>
<script type="text/javascript" src="/MC/Public/resource/lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/MC/Public/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/MC/Public/static/h-ui/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="/MC/Public/static/h-ui/css/style.css" rel="stylesheet" type="text/css" />
<link href="/MC/Public/resource/lib/Hui-iconfont/1.0.7/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>后台登录 - <?php echo ($config["web_title"]); ?></title>
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form class="form form-horizontal" action="<?php echo U('Tool/Relay/login');?>" method="post">
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input id="" name="username" type="text" placeholder="账户" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input id="" name="password" type="password" placeholder="密码" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input class="input-text size-L" type="text" name="verify" placeholder="验证码" onblur="if(this.value==''){this.value='验证码:'}" onclick="if(this.value=='验证码:'){this.value='';}" value="验证码:" style="width:150px;">
          <img src="<?php echo U('Tool/Relay/verify');?>" width="120px"height="41px" id="verifyImg"> <a id="kanbuq" href="javascript:;" onclick="fleshVerify()">看不清，换一张</a> </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <label for="online">
            <input type="checkbox" name="online" id="online" value="">
            使我保持登录状态</label>
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
          <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">Copyright <?php echo ($config["web_title"]); ?> by 2016.06.01</div>
<script type="text/javascript" src="/MC/Public/resource/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/MC/Public/static/h-ui/js/H-ui.js"></script>
<script>
  //刷新验证码
  function fleshVerify(){

    document.getElementById('verifyImg').src= "<?php echo U('Tool/Relay/verify');?>";
  }
</script>
</body>
</html>