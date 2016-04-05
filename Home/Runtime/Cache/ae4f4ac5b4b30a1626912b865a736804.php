<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Keywords" content="seokeywords"/>
<meta name="Description" content="seodescription"/>
<meta charset="UTF-8">
<meta content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection" />
<meta http-equiv="Cache-Control" content="no-transform " />
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" />
  <script src="__PUBLIC__/js/jquery1.42.min.js"></script>
<title>师大夜市</title>
</head>

<body>
      <div class="box">
           <div class="top clearfix">
                 <a href="javascript:history.go(-1)"></a>
                 <span>师大夜市</span>
                <!-- <div class="search">
                 <input type="text" value="搜索美食" />
                 <div class="suosou"><input class="suosou1" type="submit" value="搜索"/></div>
                 </div>-->
           </div>
           <div class="con">
              <form action="<?php echo U('Shida/money');?>" method="post">
                <div class="detail">
                     <div class="meishi">
                     <img src="__PUBLIC__/images/detail_03.jpg" />
                     </div>
                     <div class="jieshao">
                          <h2><?php echo ($productone['shangpinname']); ?></h2>
                          <span>￥<?php echo ($productone['shangpinmoney']); ?>元/份</span>
                            <p class="number1">
                          
                                    <a href="javascript:jian(<?php echo $productone['shangpinid']?>);" id="jian<?php echo $productone['shangpinid']?>"  ><img src="__PUBLIC__/images/seller_product_06.png" /></a>
                                    <input type="text" value="1"  id="input<?php echo $productone['shangpinid']?>" name="num"/>
                                    <a href="javascript:jia(<?php echo $productone['shangpinid']?>);" id="jia<?php echo $productone['shangpinid']?>" ><img src="__PUBLIC__/images/seller_product_08.png" /></a>
                         
                          </p>
                          <p><?php echo ($productone['shangpininfo']); ?></p>
                     </div>
                     <div class="mingcheng">
                          <h2><?php echo ($productone['shopname']); ?></h2>
                          <p><div class="xing1"><img src="__PUBLIC__/images/detail_07.png" /><img src="__PUBLIC__/images/detail_07.png" /><img src="__PUBLIC__/images/detail_07.png" /><img src="__PUBLIC__/images/detail_07.png" /></div></p>
                          <p><?php echo ($productone['shopaddress']); ?></p>
                          <p>联系电话：<?php echo ($productone['shoptel']); ?></p>
                     </div>
                      <input type="hidden" value="<?php echo ($productone['shangpinid']); ?>" name="shangpinid">
                      
                      <input type="hidden" value="<?php echo ($productone['shopid']); ?>" name="shopid">
                      <input type="hidden" value="啦啦" name="memberid">
                     <div class="detail_anniu"><input type="submit" value="我要订餐" /></div>
                   </form>
                </div>
           </div>
      </div>

      <script>
 function jian(id)
  {
    if($("#input"+id).val()==0){
      $("#input"+id).val("0");
    }else{  
     $("#input"+id).val($("#input"+id).val()-1);
    }
  }
  function jia(id)
  {
    $("#input"+id).val(parseInt($("#input"+id).val())+1);
    }



      </script>
</body>
</html>