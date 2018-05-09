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
<script type="text/javascript" src="/MC/Public/resource/lib/html5.js"></script>
<script type="text/javascript" src="/MC/Public/resource/lib/respond.min.js"></script>
<script type="text/javascript" src="/MC/Public/resource/lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/MC/Public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/MC/Public/static/h-ui/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/MC/Public/resource/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/MC/Public/resource/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/MC/Public/static/h-ui/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/MC/Public/static/h-ui/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title><?php echo ($config['admin_title']); ?></title>
</head>
<body>

<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href=""><?php echo ($config['admin_title']); ?></a> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onclick="member_add('添加用户','<?php echo U('Tool/Index/member_add');?>','','520')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"><?php echo ($_SESSION['admin']['username']); ?> <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="<?php echo U('Tool/Relay/logout');?>">退出</a></li>
						</ul>
					</li>
					<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="绿色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>


<aside class="Hui-aside">
	<input runat="server" id="divScrollValue" type="hidden" value="" />
	<div class="menu_dropdown bk_2">
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Tool/Index/member');?>" data-title="会员列表" href="javascript:;">会员列表</a></li>
					<!--<li><a _href="<?php echo U('Tool/Index/member1');?>" data-title="会员列表" href="javascript:;">有效会员列表</a></li>-->
					<li><a _href="<?php echo U('Tool/Index/wallet');?>" data-title="用户钱包" href="javascript:;">会员充值</a></li>
					<li><a _href="<?php echo U('Tool/Index/drawing');?>" data-title="用户提现" href="javascript:;">用户提现</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-tongji">
			<dt><i class="Hui-iconfont">&#xe61a;</i> 市场记录<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Tool/Buy/buyFeedLog');?>" data-title="饲料购买" href="javascript:void(0)">饲料购买记录</a></li>
					<li><a _href="<?php echo U('Tool/Buy/buyActiveCodeLog');?>" data-title="激活币购买" href="javascript:void(0)">激活币购买记录</a></li>

					<li><a _href="<?php echo U('Tool/Buy/buyAnimalLog');?>" data-title="富贵鸡购买" href="javascript:void(0)">富贵鸡购买记录</a></li>
					<li><a _href="<?php echo U('Tool/Buy/buyAnimal');?>" data-title="市场鸡场" href="javascript:void(0)">市场鸡场</a></li>
					<li><a _href="<?php echo U('Tool/Buy/buyAnimal');?>" data-title="奖金记录" href="javascript:void(0)">奖金记录</a></li>
				</ul>
			</dd>
		</dl>
		<!--<dl id="menu-tongji">-->
			<!--<dt><i class="Hui-iconfont">&#xe61a;</i> 交易管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>-->
			<!--<dd>-->
				<!--<ul>-->
					<!--<li><a _href="<?php echo U('Tool/Deal/gold');?>" data-title="购买管理" href="javascript:void(0)">购买管理</a></li>-->
					<!--<li><a _href="<?php echo U('Tool/Deal/baoli');?>" data-title="提现管理" href="javascript:void(0)">全部提现记录</a></li>-->
					<!--<li><a _href="<?php echo U('Tool/Deal/tixian1');?>" data-title="充值管理" href="javascript:void(0)">提现中的记录</a></li>-->
					<!--<li><a _href="<?php echo U('Tool/Deal/tixian2');?>" data-title="充值管理" href="javascript:void(0)">提现成功记录</a></li>-->
					<!--&lt;!&ndash; <li><a _href="<?php echo U('Tool/Deal/fenhong');?>" data-title="分红管理" href="javascript:void(0)">分红管理</a></li> &ndash;&gt;-->
				<!--</ul>-->
			<!--</dd>-->
		<!--</dl>-->
		<dl id="menu-notice">
			<dt><i class="Hui-iconfont">&#xe622;</i> 公告管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Tool/Notice/index');?>" data-title="公告管理" href="javascript:;">公告管理</a></li>
				</ul>
			</dd>
		</dl>

		<!--<dl id="menu-happymsg">
			<dt><i class="Hui-iconfont">&#xe622;</i>  留言管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Tool/HappyMsg/index');?>" data-title="留言管理" href="javascript:;">用户留言</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="http://h-ui.duoshuo.com/admin/" data-title="评论列表" href="javascript:;">评论列表</a></li>
					<li><a _href="feedback-list.html" data-title="意见反馈" href="javascript:void(0)">意见反馈</a></li>
				</ul>
			</dd>
		</dl>-->


		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<!--<li><a _href="<?php echo U('Tool/Index/system_set');?>" data-title="系统设置" href="javascript:void(0)">系统设置</a></li>-->
					<li><a _href="<?php echo U('Tool/Index/fenhong_set');?>" data-title="综合设置" href="javascript:void(0)">综合设置</a></li>
					<li><a _href="<?php echo U('Tool/Index/market');?>" data-title="市场价格" href="javascript:void(0)">市场价格</a></li>
					<li><a _href="<?php echo U('Tool/Index/admin');?>" data-title="添加管理员" href="javascript:void(0)">添加管理员</a></li>
					<li><a _href="<?php echo U('Tool/Index/log');?>" data-title="" href="javascript:void(0)">登陆日志</a></li>
					<!--<li><a href="javascript:;" onclick="system_clear()">清除数据</a></li>-->
				</ul>
			</dd>
		</dl>
	</div>
</aside>


<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active"><span title="我的桌面" data-href="<?php echo U('Tool/Index/welcome');?>">我的桌面</span><em></em></li>
			</ul>
		</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
	</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="<?php echo U('Tool/Index/welcome');?>"></iframe>
		</div>
	</div>
</section>


<script type="text/javascript" src="/MC/Public/resource/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/MC/Public/resource/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/MC/Public/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/MC/Public/static/h-ui/js/H-ui.admin.js"></script>


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