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
<link rel="stylesheet" type="text/css" href="__PUBLIC__/calendar.css">
<script type="text/javascript" src="__PUBLIC__/calendar.js"></script>

    <!-- jQuery -->
    <script src="__PUBLIC__/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="__PUBLIC__/img/favicon.ico">
	<link rel="stylesheet" href="__PUBLIC__/editor/themes/default/default.css" />  
        <script charset="UTF-8" src="__PUBLIC__/editor/kindeditor-min.js"></script>  
            <script charset="UTF-8" src="__PUBLIC__/editor/lang/zh_CN.js"></script>  
            <script>  
                
                var editor;  
                KindEditor.ready(function(K) {  
                editor = K.create('textarea[name="shangpininfo"]', {  
                                allowFileManager : true  ,
								 width : "70%", //编辑器的宽度为70%
    height : "300px", //编辑器的高度为100px
   resizeMode : 0,
                            });  
                                
                        });  
            </script> 

	         <script>  
                        KindEditor.ready(function(K) {  
                            var editor = K.editor({  
                                allowFileManager : true  ,
								allowImageUpload:true
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

                          KindEditor.ready(function(K) {  
                            var editor1 = K.editor({  
                                allowFileManager : true  ,
                                allowImageUpload:true
                            });  
                            K('#image1').click(function() {  
                                editor1.loadPlugin('image', function() {  
                                    editor1.plugin.imageDialog({  
                                        imageUrl : K('#thumb1').val(),  
                                        clickFn : function(url, title, width, height, border, align) {  
                                            K('#thumb1').val(url);  
                                            editor1.hideDialog();  
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
                <h2><i class="glyphicon glyphicon-cog"></i>编辑商品</h2>
				
            </div>
            <div class="box-content">
                <form name="myform" method="post" action="<?php echo U('Shangpin/editact');?>" enctype="multipart/form-data" />
	  <input  type="hidden" class="form-control" id="exampleInput1" name="shangpinid"  value="<?php echo ($a['shangpinid']); ?>">
                         
					 <div class="form-group">
                        <label for="exampleInput7"> 商品名称</label><br>
                      
					  <input required='required' type="text" class="form-control" id="exampleInput1" name="shangpinname"  value="<?php echo ($a['shangpinname']); ?>">
                     </div>
					   <div class="form-group">
                        <label for="exampleInput5">所在商户</label><br>
                     
						 <select name="shopid">
									<?php if(is_array($shangpin)): $i = 0; $__LIST__ = $shangpin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?><option
											<?php if($a['shopid']==$p["shopid"]) echo "selected";?>	

										value="<?php echo $p['shopid']?>"> <?php echo $p['shopname']?> </option><?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
						
				   </div>
					 
				   <div class="form-group">
                        <label for="exampleInput5">商品图片</label><br>
                     
						  <input required='required'  type="text"  name="shangpinpic" id="thumb"  size="50" value="<?php echo ($a['shangpinpic']); ?>"/>  &nbsp;
							  <input type="button" id="image" value="上传图片" />  
						
				   </div>
                    <div class="form-group">
                        <label for="exampleInput5">商品详情图片</label><br>
                     
                          <input required='required'  type="text"  name="shangpindetail" id="thumb1" size="50"/>  &nbsp;
                              <input type="button" id="image1" value="上传图片" />  
                        
                   </div>
				   <div class="form-group">
                        <label for="exampleInput5">商品价格</label><br>
                     
						  <input required='required'  type="text"  name="shangpinmoney" size="50" value="<?php echo ($a['shangpinmoney']); ?>"/>  &nbsp;
					
				   </div>
                   
					<div class="form-group">
                        <label for="exampleInput2">商品简介</label><br>
                      
								
								<textarea name="shangpininfo" id="shangpininfo"   class="required"><?php echo ($a['shangpininfo']); ?></textarea> 
					</div>
					<div class="form-group">
                        <label for="exampleInput2">商品标签</label><br>
					<div style="border:1px solid gray;width:70%;padding:10px;">
                      推荐
						  <input type="checkbox"  name="shangpintag0" size="50" value="0"/>  &nbsp;  
						       热销
						  <input type="checkbox"  name="shangpintag1" size="50" value="1"/>  &nbsp;  
						       特色
						  <input type="checkbox"  name="shangpintag2" size="50" value="2"/>  &nbsp;  
								
							</div>
					</div>
					<div class="form-group">
                        <label for="exampleInput2">商品简介</label><br>
                      
								
								<textarea name="shangpininfo" id="shangpininfo"   class="required"><?php echo ($a['shangpininfo']); ?></textarea> 
					</div>
					
					
					<div class="form-group" align="center">
                    <input type="submit" class="btn btn-success" value="提交">
					&nbsp;&nbsp;&nbsp;&nbsp;
					
					</div>
                </form>

            </div>
        </div>
    </div>

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