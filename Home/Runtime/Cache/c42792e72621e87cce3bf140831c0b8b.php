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
    <title>Free HTML5 Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="/public/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="/public/css/charisma-app.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/public/calendar.css">
<script type="text/javascript" src="/public/calendar.js"></script>

    <!-- jQuery -->
    <script src="/public/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="/public/img/favicon.ico">
	<link rel="stylesheet" href="/public/editor/themes/default/default.css" />  
        <script charset="UTF-8" src="/public/editor/kindeditor-min.js"></script>  
            <script charset="UTF-8" src="/public/editor/lang/zh_CN.js"></script>  
            <script>  
                
                var editor;  
                KindEditor.ready(function(K) {  
                editor = K.create('textarea[name="rongyu"]', {  
                                allowFileManager : true  ,
								 width : "400px", //编辑器的宽度为70%
    height : "200px", //编辑器的高度为100px
   resizeMode : 0,
                            });  
                                
                        });  
            </script> 

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
	<style>
	.page{position:absolute;top:380px;left:340px;}
	.page a{border:1px solid #DDDDDD;display:inline-block;width:50px;height:40px;line-height:40px;text-align:center;border-radius:5px;}
	
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
            <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="/public/img/logo20.png" class="hidden-xs"/>
                <span>Vgo Chess</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo U('Login/index');?>">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
           
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="http://localhost/vgo/index.php"><i class="glyphicon glyphicon-globe"></i> 浏览前台网站</a></li>
               
                <li>
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
                        <li><a class="ajax-link" href="<?php echo U('Index/index');?>"><i class="glyphicon glyphicon-home"></i><span>&nbsp;后台主页</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo U('Config/index');?>"><i class="glyphicon glyphicon-cog"></i><span>&nbsp;网站设置</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo U('Chart/index');?>"><i class="glyphicon glyphicon-list-alt"></i><span>&nbsp;地区统计</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo U('User/index');?>"><i class="glyphicon glyphicon-user"></i><span>用户管理</span></a>
                        </li>
						<li><a class="ajax-link" href="<?php echo U('Index/table');?>">
						<i
                                    class="glyphicon glyphicon-align-justify"></i><span>&nbsp;赛事管理</span></a></li>
                       <li><a class="ajax-link" href="<?php echo U('Shiti/index');?>"><i
                                    class="glyphicon glyphicon-th"></i><span>试题管理</span></a></li>
                        
                        <li><a class="ajax-link" href="<?php echo U('Qishou/index');?>"><i
                                    class="glyphicon glyphicon-th"></i><span> 棋手管理</span></a></li>
                        <li><a href="<?php echo U('Footer/index');?>"><i class="glyphicon glyphicon-globe"></i><span>footer管理</span></a></li>
                       
                        
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
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Typography</a>
        </li>
    </ul>
</div>



 <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i>用户表</h2>

                    
                </div>
                <div class="box-content" style="height:424px;position:relative;">
				<!--
				style="height:374px;position:relative;"
				-->
				<form action="<?php echo U('Qishou/addact');?>" method="post">
                    <table class="table table-striped table-bordered responsive">
                        <thead>
						
                        <tr>
                             <th>棋手名称</th>
                            <th>棋手生日</th>
                            <th>棋手头像</th>
							   <th>棋手段位</th>
                            <th>棋手荣誉</th>
							<th>所在区域</th>
                           
                           
                        </tr>
                        </thead>
                        <tbody>

						
                        <tr> 
                            <td><input type="text"  name="name"/></td>
							<input type="hidden" name="qishouid"/>
                            <td class="center">
							
							<input type="text"  name="birth" id="birthday"/>
							</td>
                            <td class="center"> 
							  <input type="text" name="thumbfiles" id="thumb"  size="50"/>  &nbsp;
							  <input type="button" id="image" value="上传图片" />  
							
							</td>
							<td class="center">
                              
							  <input type="text" value="<?php echo ($r['duanwei']); ?>" name="duanwei"/>
							</td>
                            <td class="center">
                               
								
								<textarea name="rongyu" id="content"  style="width:800px;
height:250px;visibility:hidden;" class="required"> </textarea> 
								
                            </td>
							 <td class="center">
							<select name = "qishouareaid">
							<?php  for($i=0;$i<count($qishouarea_list);$i++){ ?>
							<option value="<?php echo $qishouarea_list[$i]['id']?>"> <?php echo $qishouarea_list[$i]['name']?></option>
							
							<?php }?>
							</select>
                            </td>
                        </tr>
                      
					    <tr>
						 
							 <td cols="4">
							
                               
                               <input type="submit" value="添加" style="margin-bottom:15px;" class="btn btn-success" />
                          
							 </td>
						 </tr>

					
                        </tbody>
                    </table>
					</form>
                </div>
            </div>
        </div>
    <!--/span-->

    
    <!--/span-->


</div><!--/row-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
    <div class="row">
        <div class="col-md-9 col-lg-9 col-xs-9  hidden-xs">
          
            <!-- Charisma Demo 2 -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:728px;height:90px"
                 data-ad-client="ca-pub-5108790028230107"
                 data-ad-slot="3193373905"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <div class="col-md-2 col-lg-3 col-sm-12 col-xs-12 donate">
            <div>
                <small>Help development of Charisma</small>
            </div>
            <a class="btn btn-default" href="http://flattr.com/thing/1507720/usmanhalalitcharisma-on-GitHub"
               target="_blank"><i class="glyphicon glyphicon-usd green"></i> Donate</a>
        </div>

    </div>
    <!-- Ad ends -->

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

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Muhammad
                Usman</a> 2012 - 2014</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
    </footer>

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

<script src="/public/js/block.js"></script>

</body>
</html>