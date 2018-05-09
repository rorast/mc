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
<title>饲料购买</title>
</head>
<body>




    <style>

        .star-bar-show{background:url(/MC/Public/static/h-ui/images/iconpic-star-S-default.png) repeat-x 0 0}
        .star-bar-show .star{background:url(/MC/Public/static/h-ui/images/iconpic-star-S.png) repeat-x 0 0;}
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
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 交易管理 <span class="c-gray en">&gt;</span> 购买管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="page-container">
        <div class="mt-20">
            <table class="table table-border table-bordered table-hover table-bg table-sort">
                <thead>
                <tr class="text-c">
                    <th width="60">编号</th>
                    <th width="100">购买者手机号</th>
                    <th width="250">购买详情</th>
                    <th width="80">购买时间</th>
                    <th width="50">消费金额</th>
                    <th width="80">操作</th>
                    <!--<th width="25"><input type="checkbox" name="" value=""></th>-->
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($log)): $i = 0; $__LIST__ = $log;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c">
                        <td><?php echo ($vo["id"]); ?></td>
                        <td><?php echo ($vo["phone"]); ?></td>
                        <td><?php echo ($vo["desc"]); ?></td>
                        <td><?php echo (date("Y-m-d H:i",$vo["create_time"])); ?></td>
                        <td><?php echo ($vo["number"]); ?></td>
                        <td class="td-status">
                            <a title="拒绝" href="javascript:;" onclick="no_pass(this,'<?php echo ($vo["id"]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6a6;</i></a>
                        </td>

                        <!--<td class="td-manage"> <a style="text-decoration:none" class="ml-5" onClick="pass(this,'<?php echo ($vo["id"]); ?>')" href="javascript:;" title="接受"><i class="Hui-iconfont">&#xe6a7;</i></a> <a title="拒绝" href="javascript:;" onclick="no_pass(this,'<?php echo ($vo["id"]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6a6;</i></a></td>-->
                        <!--<td><input type="checkbox" value="1" name=""></td>-->
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
    </div>



    <script type="text/javascript" src="/MC/Public/resource/lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="/MC/Public/resource/lib/layer/2.1/layer.js"></script>
    <script type="text/javascript" src="/MC/Public/resource/lib/laypage/1.2/laypage.js"></script>
    <script type="text/javascript" src="/MC/Public/resource/lib/My97DatePicker/WdatePicker.js"></script>
    <script type="text/javascript" src="/MC/Public/resource/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/MC/Public/static/h-ui/js/H-ui.js"></script>
    <script type="text/javascript" src="/MC/Public/static/h-ui/js/H-ui.admin.js"></script>
    <script type="text/javascript">
        $(function(){
            $('.table-sort').dataTable({
                "aaSorting": [[ 1, "desc" ]],//默认第几个排序
                "bStateSave": true,//状态保存
                "aoColumnDefs": [
                    //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
                    {"orderable":false,"aTargets":[0,5]}// 制定列不参与排序
                ]
            });
            $('.table-sort tbody').on( 'click', 'tr', function () {
                if ( $(this).hasClass('selected') ) {
                    $(this).removeClass('selected');
                }
                else {
                    $('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                }
            });
        });

        /*用户-查看*/
        function member_show(title,url,id,w,h){
            layer_show(title,url,w,h);
        }

        /*密码-修改*/
        function change_password(title,url,id,w,h){
            layer_show(title,url,w,h);
        }




        function pass(obj,id){

            layer.confirm('确认要通过吗？',function(index){

                $.post("<?php echo U('Tool/Deal/gold_pass');?>",{id:id},function(data){
                    $(obj).parents("tr").remove();
                    layer.msg('完成交易!',{icon:1,time:1000});
                });
            });
        }

        function no_pass(obj,id){

            layer.confirm('确认要删除吗吗？',function(index){

                $.post("<?php echo U('Tool/Buy/delFeedLog');?>",{id:id},function(data){
                    if(data.status == 1){
                        $(obj).parents("tr").remove();
                        layer.msg('操作成功!',{icon:1,time:1000});
                    }


                });
            });
        }


    </script>

</body>
</html>