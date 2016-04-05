<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统登录</title>
<link href="__PUBLIC__/css/login.css" rel="stylesheet" rev="stylesheet" type="text/css" media="all" />
<link href="__PUBLIC__/css/demo.css" rel="stylesheet" rev="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="__PUBLIC__/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.SuperSlide.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/Validform_v5.3.2_min.js"></script>




</head>

<body>


<div class="header">
  <h1 class="headerLogo"><a title="后台管理系统" target="_blank"><img alt="logo" src="__PUBLIC__/images/logo.gif"></a></h1>
	
</div>

<div class="banner">

<div class="login-aside">
  <div id="o-box-up"></div>
  <div id="o-box-down"  style="table-layout:fixed;">
   <div class="error-box"></div>
   
   <form action="<?php echo U('Login/loginact');?>" method="post">
   <div class="fm-item">
	   <label for="logonId" class="form-label">帐　　号：</label>
	   <input placeholder="请填写帐号" required="required" type="text"  maxlength="100" id="username"  name="username" onblur="checkdata('user')"  class="i-text" />  <span class="umsg"></span>   
       <div class="ui-form-explain"></div>
  </div>
  
  <div class="fm-item">
	   <label for="logonId" class="form-label">登陆密码：</label>
	   <input placeholder="请填写密码"  required="required" type="password"  maxlength="100" id="pwd" class="i-text" datatype="*6-16" nullmsg="请设置密码！" name="pwd" errormsg="密码范围在6~16位之间！">    
       <div class="ui-form-explain"></div>
  </div>
  
  <div class="fm-item pos-r">
	   <label for="logonId" class="form-label">验 证 码</label>
	   <input type="text"  required="required" placeholder="输入验证码" maxlength="100" name="yzm" id="yzm" class="i-text yzm" nullmsg="请输入验证码！" >    
       <div class="ui-form-explain">
	   <img id="img" src="<?php echo U('Login/verify');?>" onclick="refresh()"  class="yzm-img"/>
	   </div>
  </div>
  
  <div class="fm-item">
	   <label for="logonId" class="form-label"></label>
	   <input type="submit" value="" tabindex="4" id="send-btn" class="btn-login"> 
       <div class="ui-form-explain"></div>
  </div>
  
  </form>
  
  </div>
<script>
  function refresh(){
				document.getElementById("img").src="<?php echo U('Login/verify'); ?>"+"?"+Math.random();
	
		}
function checkdata(t){
	
		//var curcode=$("#Code").val();
		var curuser=$("#username").val();
		
		$.post("index.php?m=Login&a=loginact",{"user":curuser,"flg":t},function(d){
				
				//alert(d.info);
				
				
				if(d.status)
				{
					//alert("ok");
					
						$(".umsg").html(d.info);
						
					
				}
				else
				{

					$(".umsg").html(d.info);
						
					
				}
				
				
				
			},"json");
	}

</script>
</div>

	<div class="bd">
		<ul>
			<li style="background:url(__PUBLIC__/themes/theme-pic1.jpg) #CCE1F3 center 0 no-repeat;"><a target="_blank" href="http://sc.chinaz.com/"></a></li>
			<li style="background:url(__PUBLIC__/themes/theme-pic2.jpg) #BCE0FF center 0 no-repeat;"><a target="_blank" href="http://sc.chinaz.com/"></a></li>
		</ul>
	</div>

	<div class="hd"><ul></ul></div>
</div>
<script type="text/javascript">jQuery(".banner").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click" });</script>


<div class="banner-shadow"></div>



</body>
</html>