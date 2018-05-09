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
<title>登陆日志</title>
</head>
<body>



    <style>
        tr td{
            border: 1px solid #cecaca;
            text-align: center;
            vertical-align:middle;
        }
    </style>
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统设置 <span class="c-gray en">&gt;</span> 市场价格 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="page-container">
        <div class="col-md-8 col-lg-8">
            <div id='calendar'></div>
        </div>
        <div class="col-md-4 col-lg-4">
            <h3>近日10天价格榜</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>编号</th>
                        <th>日期</th>
                        <th>当日价格</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td scope="row"><?php echo ($i); ?></td>
                        <td><?php echo ($vo["start"]); ?></td>
                        <td><?php echo ($vo["price"]); ?></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <script type="text/javascript" src="/MC/Public/resource/lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="/MC/Public/resource/lib/layer/2.1/layer.js"></script>
    <script type="text/javascript" src="/MC/Public/resource/lib/laypage/1.2/laypage.js"></script>
    <script type="text/javascript" src="/MC/Public/resource/lib/My97DatePicker/WdatePicker.js"></script>
    <script type="text/javascript" src="/MC/Public/resource/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/MC/Public/static/h-ui/js/H-ui.js"></script>
    <script type="text/javascript" src="/MC/Public/static/h-ui/js/H-ui.admin.js"></script>

    <script src="/MC/Public/admin/fullcalendar.min.js"></script>
    <script src="/MC/Public/admin/jquery-ui-1.10.2.custom.min.js"></script>
    <script type="text/javascript">
        $(function(){

            $('#calendar').fullCalendar({
                header: {//设置日历头部信息
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                firstDay:1,//每行第一天为周一
                editable: true,//可以拖动
                events: "<?php echo U('getCalendarJson');?>",
                //设置选项和回调
                dayClick: function(date, allDay, jsEvent, view) {
                    console.log(view);
                    var selDate =$.fullCalendar.formatDate(date,'yyyy-MM-dd');//格式化日期
                    layer.open({
                        type: 2,
                        title:"设置"+selDate+"日价格",
                        area: ['300px', '230px'],
                        fixed: false, //不固定
                        maxmin: true,
                        content: "<?php echo U('calendar');?>?date="+selDate
                    });
                }
            })
//            $('#calendar').fullCalendar('next');

            $('.table-sort').dataTable({
                "aaSorting": [[ 1, "desc" ]],//默认第几个排序
                "bStateSave": true,//状态保存
                "aoColumnDefs": [
                    //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
                    {"orderable":false,"aTargets":[0]}// 制定列不参与排序
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
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
                $(obj).remove();
                layer.msg('已停用!',{icon: 5,time:1000});
            });
        }

        /*用户-启用*/
        function member_start(obj,id){
            layer.confirm('确认要启用吗？',function(index){
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
                $(obj).remove();
                layer.msg('已启用!',{icon: 6,time:1000});
            });
        }
        /*用户-编辑*/
        function notice_edit(title,url,id,w,h){
            layer_show(title,url,w,h);
        }
        /*密码-修改*/
        function change_password(title,url,id,w,h){
            layer_show(title,url,w,h);
        }
        /*用户-删除*/
        function notice_del(obj,id){
            layer.confirm('确认要删除吗？',function(index){

                $.post("<?php echo U('Tool/Notice/del');?>",{id:id},function(data){
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                });
            });
        }

        function pass(id,url){

            var prize=prompt("请输入奖励","");

            if(/^[0-9]+$/.test(prize)) {

                $.post(url,{id:id,prize:prize},function(e){

                    layer.msg('通过成功!',{icon:1,time:1000});
                    location.replace(location.href);
                })
            }
            else {

                layer.msg('只能输入数字!',{icon:2,time:1000});
            }
        }

        function no_pass(id,url){

            $.post(url,{id:id},function(e){

                location.replace(location.href);
            })
        }
    </script>

</body>
</html>