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
<title>会员管理</title>
</head>
<body>




	<style>

		.star-bar-show{background:url(/Public/static/h-ui/images/iconpic-star-S-default.png) repeat-x 0 0}
		.star-bar-show .star{background:url(/Public/static/h-ui/images/iconpic-star-S.png) repeat-x 0 0;}
		.star-1{width:20%;}
		.star-2{ width:40%}
		.star-3{width:60%;}
		.star-4{ width:80%}
		.star-5{ width:100%}
		.star-bar-show.size-M{width:120px;height:24px}
		.star-bar-show.size-M,.star-bar-show.size-M .star{background-size:24px}
		.star-bar-show.size-M .star{ height:24px}
		.star-bar-show.size-S{width:80px; height:16px}
		.star-bar-show.size-S,.star-bar-show.size-S .star{background-size:16px}
		.star-bar-show.size-S .star{ height:16px}
		.star-bar{font-size:0;line-height: 0}
		.star-bar .star{display: inline-block;float: left}
		
		

	</style>


	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span class="c-gray en">&gt;</span> 用户管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="member_add('添加用户','<?php echo U('Tool/Index/member_add');?>','','510')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加用户</a></span> <span class="r">共有用户：<strong><?php echo ($member_count); ?></strong> 位</span> </div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="60">ID</th>
				<th width="90">账户名</th>
				<th width="90">姓名</th>
				<th width="60">介绍人</th>
				<th width="100">团队人数</th>
				<th width="100">团队总充值金额</th>
				<th width="130">加入时间</th>
				<th width="60">激活</th>
				<th width="70">状态</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c">
				<td><input type="checkbox" value="1" name=""></td>
				<td><?php echo ($vo["id"]); ?></td>
				<td><u style="cursor:pointer" class="text-primary"><a href="<?php echo U('Tool/Index/home',array('account'=>$vo['account']));?>" target="_blank"><?php echo ($vo["account"]); ?></a></u></td>
				<td><?php echo ($vo["realname"]); ?></td>
				<td><?php echo ($vo["references"]); ?></td>
				<td><?php echo (countTeamNumber($vo["id"])); ?>人</td>
				<td><?php echo (countTeamRecharge($vo["id"])); ?>元</td>
				<td><?php echo (date("Y-m-d H:i",$vo["reg_time"])); ?></td>
				<td>
					<?php if($vo["active"] == 0): ?>未激活<?php endif; ?>
					<?php if($vo["active"] == 1): ?>激活<?php endif; ?>
				</td>
				<td class="td-status"><?php if($vo["status"] != 0): ?><span class="label label-defaunt radius">已停用</span><?php else: ?><span class="label label-success radius">已启用</span><?php endif; ?></td>
				<td class="td-manage"><?php if($vo["status"] != 0): ?><a style="text-decoration:none" onClick="member_start(this,'<?php echo ($vo["id"]); ?>')" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a><?php else: ?><a style="text-decoration:none" onClick="member_stop(this,'<?php echo ($vo["id"]); ?>')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a><?php endif; ?> <a title="编辑" href="javascript:;" onclick="member_edit('编辑','<?php echo U('Tool/Index/info',array('id'=>$vo['id']));?>','4','','510')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="member_del(this,<?php echo ($vo["id"]); ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
		
	</table>
	
	</div>
	
</div>




<script type="text/javascript" src="/Public/resource/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/resource/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/Public/resource/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="/Public/resource/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/resource/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.admin.js"></script>
<script type="text/javascript">
$(function(){
	$('.table-sort').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		  {"orderable":false,"aTargets":[0,6]}// 制定列不参与排序
		]
	});
	$('.table-sort tbody').on( 'click', 'tr', function () {
		if ( $(this).hasClass('selected') ) {
			$(this).removeClass('selected');
		}
		else {
			table.$('tr.selected').removeClass('selected');
			$(this).addClass('selected');
		}
	});
});
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*用户-查看*/
function member_show(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*用户-停用*/
function member_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		$.post("<?php echo U('Tool/Index/stop_member');?>",{id:id},function(e){
			$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
			$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
			$(obj).remove();
			layer.msg('已停用!',{icon: 5,time:1000});
		});

	});
}

/*用户-启用*/
function member_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		$.post("<?php echo U('Tool/Index/stop_member');?>",{id:id},function(e){
			$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
			$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
			$(obj).remove();
			layer.msg('已启用!',{icon: 6,time:1000});
		});
	});
}
/*用户-编辑*/
function member_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*密码-修改*/
function change_password(title,url,id,w,h){
	layer_show(title,url,w,h);	
}
/*用户-删除*/
function member_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.post("<?php echo U('Tool/Index/member_del');?>",{id:id},function(e){
			$(obj).parents("tr").remove();
			layer.msg('已删除!',{icon:1,time:1000});
		});
	});
}
</script>

</body>
</html>