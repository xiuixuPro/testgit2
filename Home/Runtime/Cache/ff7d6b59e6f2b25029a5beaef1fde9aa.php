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
    <link id="bs-css" href="/public/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="/public/css/charisma-app.css" rel="stylesheet">
    <link href='/public/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='/public/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='/public/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='/public/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='/public/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='/public/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='/public/css/jquery.noty.css' rel='stylesheet'/>
    <link href='/public/css/noty_theme_default.css' rel='stylesheet'/>
    <link href='/public/css/elfinder.min.css' rel='stylesheet'/>
    <link href='/public/css/elfinder.theme.css' rel='stylesheet'/>
    <link href='/public/css/jquery.iphone.toggle.css' rel='stylesheet'/>
    <link href='/public/css/uploadify.css' rel='stylesheet'/>
    <link href='/public/css/animate.min.css' rel='stylesheet'/>
<link rel="stylesheet" href="/public/editor/themes/default/default.css" />  
        <script charset="UTF-8" src="/public/editor/kindeditor-min.js"></script>  
            <script charset="UTF-8" src="/public/editor/lang/zh_CN.js"></script>  
			 <script>  
                        KindEditor.ready(function(K) {  
                            var editor = K.editor({  
                                allowFileManager : true  
                            });  
                            K('#image').click(function() {  
                                editor.loadPlugin('image', function() {  
                                    editor.plugin.imageDialog({  
                                        imageUrl : K('#thumb').val(),  
                                        clickFn : function(url, title, width, height, border, align) {  
                                            K('#thumb').val(url);  
                                            editor.hideDialog();  
                                        }  
                                    });  
                                });  
                            });  
                        });  
            </script> 
    <!-- jQuery -->
    <script src="/public/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="/public/img/favicon.ico">

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

                <p>You need to have <a href="#" target="_blank">JavaScript</a>
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
                <h2><i class="glyphicon glyphicon-cog"></i>网站设置</h2>

               
            </div>
            <div class="box-content">
                <form name="myform" method="post" action="<?php echo U('Config/setting');?>" enctype="multipart/form-data" />

                   <div class="form-group">
                        <label for="exampleInput1">网站名称</label>
                        <input required='required' type="text" class="form-control" id="exampleInput1" name="sitename" value="<?php echo $configarr[0]['sitename']; ?>"><span id="dsitename"></span>
                    </div>
					 <div class="form-group">
                        <label for="exampleInput7">网站标题</label>
                        <input required='required' type="text" class="form-control" id="exampleInput7" name="sitetitle" value="<?php echo $configarr[0]['sitetitle']; ?>">
                    </div>
					<div class="form-group">
                        <label for="exampleInput2">网站地址</label>
                        <input  required='required' type="text" class="form-control" id="exampleInput2" name="siteurl" value="<?php echo $configarr[0]['siteurl']; ?>"><span id="dsiteurl"></span><p style="color:gray;">（以“http://”开头，“/”结束）</p>
                    </div>
					<div class="form-group">
                        <label for="exampleInput3">备案号码</label>
                        <input required='required' placeholder="请输入数字" type="text" class="form-control" id="exampleInput3" name="icpcode" value="<?php echo $configarr[0]['icpcode'] ;?>"><span id="dicpcode"></span><p style="color:gray;">（网站备案信息将显示在页面底部）</p>
                    </div>
					<div class="form-group">
                        <label for="exampleInput4">网站版权信息</label>
                       
						<textarea  style="width:98%;height:200px;display:block;" class="autogrow" name="sitecopyright" id="exampleInput4"><?php echo $configarr[0]['sitecopyright']; ?></textarea>
					
					</div>
					<div class="form-group">
                        <label for="exampleInput5">选择Logo图片</label>
                     
						  <input required='required'  type="text" name="logoimg" id="thumb" value="<?php echo $configarr[0]['logoimg'];?>" size="50"/>  &nbsp;
							  <input type="button" id="image" value="上传图片" />  
						
				   </div>
                    <div class="form-group">
                        <label for="exampleInput6">图片大小</label>
						宽：
                        <input required='required' name="logowidth" id="logowidth" type="text" size="5" value="<?php echo $configarr[0]['logowidth']?>" />px
						高：
						<input required='required' name="logoheight" id="logoheight" type="text" size="5" value="<?php echo $configarr[0]['logoheight'];?>" />px
					</div>
					<div class="form-group" align="center">
                    <input type="submit" class="btn btn-success" value="提交">
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="reset" class="btn btn-info"  value="重置">
					</div>
                </form>

            </div>
        </div>
    </div>
	</div>




</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="/public/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='/public/bower_components/moment/min/moment.min.js'></script>
<script src='/public/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='/public/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="/public/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="/public/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="/public/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="/public/bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="/public/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="/public/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="/public/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="/public/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="/public/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="/public/js/jquery.history.js"></script>
<!-- application script for Charisma demo

<script src="/public/js/charisma.js"></script>

 -->



</body>
</html>