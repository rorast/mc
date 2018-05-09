<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
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
<script type="text/javascript" src="http:///Public/resource/lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>添加用户 - </title>
</head>
<body>
<article class="page-container">
	<form action="<?php echo U('Tool/Index/wallet');?>" method="post" class="form form-horizontal" id="form-member-add">

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>选择：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div class="form-group">
					<div class="radio">
						<label>
							<input type="radio" name="wallet" id="optionsRadios4" value="money">
							现金
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="wallet" id="optionsRadios5" value="currency">
							鸡蛋
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="account" name="account">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>数量：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="count" name="count">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">备注：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="beizhu" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" onKeyUp="textarealength(this,100)"></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/resource/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/resource/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/Public/resource/lib/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="/Public/resource/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/Public/resource/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/Public/resource/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.admin.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});

	$("#form-member-add").validate({
		rules:{
			account:{
				required:true,
				minlength:3,
				maxlength:13
			},
			count:{
				required:true,
			},
			wallet:{
				required:true,
			}



		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		/*submitHandler:function(form){
			$(form).ajaxSubmit(ajax_option);
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}*/
	});


});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>