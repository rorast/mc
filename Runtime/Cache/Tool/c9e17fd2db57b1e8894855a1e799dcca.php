<?php if (!defined('THINK_PATH')) exit();?>﻿<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
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
<!--/meta 作为公共模版分离出去-->

<title>基本设置</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统管理 <span class="c-gray en">&gt;</span> 基本设置 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<form class="form form-horizontal" id="form-article-add" method="post" action="<?php echo U('Tool/Index/fenhong_set');?>">
		<div id="tab-system" class="HuiTab">
			<div class="tabBar cl"><span>基本设置</span></div>
			<div class="tabCon">
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>富贵鸡价格：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="" name="animalPrice" placeholder="单位:富贵蛋" value="<?php echo (C("animalPrice")); ?>" class="input-text">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>饲料价格：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="" name="feedProce" placeholder="单位:富贵蛋" value="<?php echo (C("feedProce")); ?>" class="input-text">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>激活码价格：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="" name="actricePrice" placeholder="单位:富贵蛋" value="<?php echo (C("actricePrice")); ?>" class="input-text">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>富贵鸡生产时间：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="" name="broodCycle" placeholder="小时为单位" value="<?php echo (C("broodCycle")); ?>" class="input-text">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>富贵鸡生命周期：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="" name="lifeCycle" placeholder="天为单位" value="<?php echo (C("lifeCycle")); ?>" class="input-text">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>富贵鸡总产蛋个数：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="" name="broodNumber" placeholder="个为单位" value="<?php echo (C("broodNumber")); ?>" class="input-text">
					</div>
				</div>

				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>1-30天,每天产蛋数量：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="" name="januaryBroodNumber" placeholder="个为单位" value="<?php echo (C("januaryBroodNumber")); ?>" class="input-text">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>31-60天,每天产蛋数量：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="" name="FebruaryBroodNumber" placeholder="个为单位" value="<?php echo (C("FebruaryBroodNumber")); ?>" class="input-text">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>61-90天,每天产蛋数量：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="" name="MarchBroodNumber" placeholder="个为单位" value="<?php echo (C("MarchBroodNumber")); ?>" class="input-text">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>直推奖金：</label>
					<div class="formControls col-xs-8 col-sm-9">
						每直推激活用户<input type="text" id="" name="subordinateNumber" placeholder="个为单位" value="<?php echo (C("subordinateNumber")); ?>" class="input-small">个,获得
						<input type="text" id="" name="rewardNumber" placeholder="个为单位" value="<?php echo (C("rewardNumber")); ?>" class="input-small">富贵蛋
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>三代奖金：</label>
					<div class="formControls col-xs-8 col-sm-9">
						一代<input type="text" id="" name="oneLevelBonus" placeholder="百分比" value="<?php echo (C("oneLevelBonus")); ?>" class="input-small">
						二代<input type="text" id="" name="twoLevelsBonus" placeholder="百分比" value="<?php echo (C("twoLevelsBonus")); ?>" class="input-small">
						三代<input type="text" id="" name="threeLevelsBonus" placeholder="百分比" value="<?php echo (C("threeLevelsBonus")); ?>" class="input-small">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>提现低限：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="" name="withdrawLeast" placeholder="元为单位" value="<?php echo (C("withdrawLeast")); ?>" class="input-text">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>提现手续费：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="" name="fee" placeholder="元为单位" value="<?php echo (C("fee")); ?>" class="input-text">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>每天最多购买富贵鸡个数：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="" name="buyCycleMostNumber" placeholder="单位:个" value="<?php echo (C("buyCycleMostNumber")); ?>" class="input-text">
					</div>
				</div>

				<!--<div class="row">-->
					<!--<div class="col-xs-offset-3 col-xs-7 ">-->
  					  <!--奖金代数和利率 百分之10 就写10,百分之5就写5,百分之0.5就写0.5,用逗号分割,分割几次就获得几代奖金-->
  				  	<!--</div>-->
					<!--<div class="col-xs-offset-3 col-xs-7 ">-->
  					  <!--10,8,5,2,0.5 就是获得第一代的百分之10,获得第二代的百分之8,获得第三代的百分之5,获得第四代的百分之2-->
  				  	<!--</div>-->
				<!--</div>-->
			</div>






		</div><!--end-->
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/MC/Public/resource/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/MC/Public/resource/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/MC/Public/resource/lib/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="/MC/Public/resource/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/MC/Public/resource/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/MC/Public/resource/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/MC/Public/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/MC/Public/static/h-ui/js/H-ui.admin.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	$.Huitab("#tab-system .tabBar span","#tab-system .tabCon","current","click","0");

});

/*帮助-启用*/
function to_help(obj,id){
	layer.confirm('你确定要继续吗？',function(index){

		$.post("<?php echo U('Tool/Index/system_set');?>",{to_switch_time:id},function(data){
			window.location.href=window.location.href;
		});


	});
}

/*每日提现限制-开关*/
function limit_help_get(obj,id){
	layer.confirm('你确定要继续吗？',function(index){

		$.post("<?php echo U('Tool/Index/system_set');?>",{limit_help_get_switch:id},function(data){
			window.location.href=window.location.href;
		});


	});
}
/*每日帮助限制-开关*/
function limit_help_to(obj,id){
	layer.confirm('你确定要继续吗？',function(index){

		$.post("<?php echo U('Tool/Index/system_set');?>",{limit_help_to_switch:id},function(data){
			window.location.href=window.location.href;
		});


	});
}
/*用户烧伤-开关*/
	function economic_foam_switch(obj,id){

		layer.confirm('你确定要继续吗？',function(index){

			$.post("<?php echo U('Tool/Index/system_set');?>",{economic_foam_switch:id},function(data){
				window.location.href=window.location.href;
			});

		});

	}
/*入场券-开关*/
function ticket_switch(obj,id){

	layer.confirm('你确定要继续吗？',function(index){

		$.post("<?php echo U('Tool/Index/system_set');?>",{ticket_switch:id},function(data){
			window.location.href=window.location.href;
		});

	});

}
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>