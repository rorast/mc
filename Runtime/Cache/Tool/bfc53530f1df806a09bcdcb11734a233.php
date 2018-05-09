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
    <link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">

    <!--[if lt IE 9]>

    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->

    <title>基本设置</title>
</head>
<body>

<!--_footer 作为公共模版分离出去-->
<form class="form-inline" method="post"  >
    <div class="form-group">
        <label class="sr-only">Email</label>
        <p class="form-control-static">当日价格</p>
    </div>
    <div class="form-group">
        <label for="inputPassword2" class="sr-only">当日价格</label>
        <input type="text" name="price" class="form-control" id="inputPassword2" placeholder="当日价格">
        <input type="hidden" name="date" class="form-control"  value="<?php echo ($_GET['date']); ?>">
    </div>
    <button type="submit" class="btn btn-default">提交</button>
</form>
<!--/_footer /作为公共模版分离出去-->

<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>