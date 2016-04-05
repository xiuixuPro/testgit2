<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>师大夜市后台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="__PUBLIC__/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="__PUBLIC__/css/charisma-app.css" rel="stylesheet">
    <link href='__PUBLIC__/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='__PUBLIC__/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='__PUBLIC__/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='__PUBLIC__/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='__PUBLIC__/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='__PUBLIC__/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/jquery.noty.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/noty_theme_default.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/elfinder.min.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/elfinder.theme.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/uploadify.css' rel='stylesheet'>
    <link href='__PUBLIC__/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="__PUBLIC__/js/jquery1.42.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="__PUBLIC__/img/favicon.ico">
    <style>
    
    </style>

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> 
                <span style="font-size:24px;font-weight:bold;">夜市后台</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
			<form action="<?php echo U('Index/loginout');?>" method="post">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="hidden-sm hidden-xs"> 注销</span>
                   
                </button>
                <ul class="dropdown-menu">
          
                   
                    <li><a href="<?php echo U('Index/loginout');?>">注销</a></li>
                </ul>
				</form>
				
            </div>
			
			<div class="btn-group pull-right">
			<form action="<?php echo U('Index/pwdupdate');?>" method="post">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="hidden-sm hidden-xs" style="font-weight:bold;color:red;">修改密码</span>
                   
                </button>
                <ul class="dropdown-menu">
          
                   
                    <li><a href="<?php echo U('Index/pwdupdate');?>" >修改密码</a></li>
                </ul>
				</form>
				
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
           
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
   
                    <form class="navbar-search pull-left">
					<!--
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">-->
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                                        
               <li><a class="ajax-link" href="index.php/m/Config/a/index"><i class="glyphicon glyphicon-cog"></i><span>&nbsp;网站设置</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo U('Member/index');?>"><i class="glyphicon glyphicon-list-alt"></i><span>&nbsp;前台用户管理</span></a>
                        </li>
                        
						<li><a class="ajax-link" href="<?php echo U('Shop/index');?>">
						<i
                                    class="glyphicon glyphicon-align-justify"></i><span>&nbsp;商户管理</span></a></li>
									
									
                  
									
									 <li><a class="ajax-link" href="<?php echo U('User/index');?>"><i class="glyphicon glyphicon-user"></i><span>管理员设置</span></a>
                        </li>
                         <li><a class="ajax-link" href="<?php echo U('Bill/index');?>"><i
                                    class="glyphicon glyphicon-th"></i><span>订单查询</span></a></li>
           
						
      
                    </ul>
                 
                </div>
            </div>
        </div>
        <script>
        
        
    
    
    
    $(".accordion>a").click( function () { 
            
    $(".aaa").css("display","block");
    });
    
    
        </script>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
  
</div>



 <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i>管理员设置</h2>

                    
                </div>
                <div class="box-content">
                <!--
                style="height:374px;position:relative;"
                -->
                    <table class="table table-striped table-bordered responsive">
                      
                        
                    <div class="form-group">
                    
                     <a  class="btn btn-success" href="<?php echo U('User/add');?>">
                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                    添加
                                </a>
                            
                    </div>
                            
                        
                        <tr>
                        <th>角色序号</th>
                            <th>角色名</th>
                            <th>权限</th>
                            
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if(is_array($user_list)): $a = 0; $__LIST__ = $user_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($a % 2 );++$a;?><tr class="del<?php echo $r['userid']; ?>">
<td><?php echo ($a); ?></td>                       
                            <td><?php echo ($r['username']); ?></td>
                           
                            <td class="center"> <?php echo ($r['rolename']); ?></td>
                           
                            <td class="center">
                               
                                <a class="btn btn-info" href="<?php echo U('User/edit',array('userid'=>$r['userid']));?>">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    编辑
                                </a>
                                <a class="btn btn-danger" href="javascript:;" onclick="ajax(<?php echo $r['userid']; ?>)">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                   删除
                                </a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                      <TR>
                      
                      <td colspan="4">
                        <div class="page" align="center"><?php echo $userpage;?></div>
                      </td>
                      </TR>
                        
                        
                        
                        <script>

        //弹出一个对话框  做一个带确定和取消的对话框，当用户点确定的时候弹出删除。否则弹出不删除


        function ajax(id)
    {
         if(window.confirm("确定删除"))
        {
            $.post("index.php?m=User&a=ajax",{"userid":id,"flag":"delajax"},function(e){
            
            if(e.status==1){
                alert(e.info);
                //alert($(this).parents("tr").html(""));
                $(".del"+id).css("display","none");
                
            }else if(e.status==0){
            
                alert(e.info);
                
            }else{
              alert(e.info);
            }
            
            },"json");




        }
    }
 




</script>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!--/span-->

    
    <!--/span-->


</div><!--/row-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->



    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

   

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="__PUBLIC__/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="__PUBLIC__/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='__PUBLIC__/bower_components/moment/min/moment.min.js'></script>
<script src='__PUBLIC__/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='__PUBLIC__/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="__PUBLIC__/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="__PUBLIC__/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="__PUBLIC__/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="__PUBLIC__/bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="__PUBLIC__/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="__PUBLIC__/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="__PUBLIC__/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="__PUBLIC__/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="__PUBLIC__/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="__PUBLIC__/js/jquery.history.js"></script>
<!-- application script for Charisma demo 

<script src="__PUBLIC__/js/charisma.js"></script>
-->
<script src="__PUBLIC__/js/block.js"></script>


</body>
</html>