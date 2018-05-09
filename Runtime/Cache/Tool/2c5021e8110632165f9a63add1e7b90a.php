<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/resource/lib/html5.js"></script>
<script type="text/javascript" src="/Public/resource/lib/respond.min.js"></script>
<script type="text/javascript" src="/Public/resource/lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/resource/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/resource/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>提现管理</title>
</head>
<body>



<div class="row">
	<div class="col-md-11 col-sm-11">
		<div class="col-md-2 col-sm-2">
			
		</div>

		<div class="col-md-8 col-sm-8">
			<div class="panel panel-success mt-30">
			<div class="panel-header">
				平台统计数据
			</div>
			<div class="panel-body">
				
				  
				  <h3>平台总会员：<em style="color:red"><?php echo ($member_quanbu); ?></em>人</h3>
				  <h3>今日注册会员：<em style="color:red"><?php echo ($member_newuser); ?></em>人</h3>
				  <!--<h3>平台有效会员：<em style="color:red"><?php echo ($member_count); ?></em>人</h3>
				  <h3>会员购买理财总金额：<em style="color:red"><?php echo ($member_money); ?></em>元</h3>
				  <h3>所有会员奖励钱包剩余总金额<em style="color:red"><?php echo ($reward_wallet); ?></em>元</h3>
				  <h3>明日分红金额：<em style="color:red"><?php echo ($queue); ?></em>元</h3>
				  <h3>平台已分红总金额：<em style="color:red"><?php echo ($queue_log); ?></em>元</h3>
				  <h3>待处理提现金额：<em style="color:red"><?php echo ($tixian_one); ?></em>元
						<small>理财钱包：<?php echo ($tixian_licai0); ?>元，奖金钱包：<?php echo ($tixian_jiangjin0); ?> 元</small>
				  </h3>
				  <h3>已经提现成功金额：<em style="color:red"><?php echo ($tixian_count); ?></em>元
						<small>理财钱包：<?php echo ($tixian_licai1); ?>元，奖金钱包：<?php echo ($tixian_jiangjin1); ?> 元</small>
				  </h3>-->
				
			</div>
		</div>
		</div>
		
		<div class="col-md-2 col-sm-1">
			
		</div>
	</div>
</div>
		

<footer class="footer mt-20">
	<div class="container">

		<p> 冰冬 qq:648372788</p>
	</div>
</footer>


<script type="text/javascript" src="/Public/resource/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/resource/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.admin.js"></script>


<script type="text/javascript">
/*资讯-添加*/
function article_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-添加*/
function product_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}

function system_clear(){

	layer.confirm('确认要清除吗？',function(index){

		window.location.href="<?php echo U('Tool/Index/clear');;?>";
	});
}

</script>

</body>
</html>