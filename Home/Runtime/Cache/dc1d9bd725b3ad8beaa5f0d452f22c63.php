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
           <div class="head">
                <div class="tab"><input type="submit" value="商品" id="shangpin"/></div>
                <div class="tab"><input type="submit" value="商家" id="shop"/></div>
           </div>
           <div class="top clearfix">
                 <a href="javascript:history.go(-1)"></a>
                 <div class="search">
                <form action="<?php echo U('Shida/query');?>" method="post">
                 <input type="text"  placeholder="搜索"  name="sousuo"/>
                  <input type="hidden"  name="flg" value="" id="querysousuo"/>
                 <div class="suosou"><input type="submit" value="搜索"/></div>
               </form>
                 </div>
           </div>
           <div class="con">
              <div class="content">
                          <ul class="prolist">
                              <?php if(is_array($shangpin_list)): $i = 0; $__LIST__ = $shangpin_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?><li>
                         <a href="<?php echo U('Shida/splist',array('shangpinid'=>$p['shangpinid']));?>"><img src="<?php echo ($p['shangpinpic']); ?>" /><span><?php echo ($p['shangpinname']); ?></span><br /><span id="price">￥<?php echo ($p['shangpinmoney']); ?>元/份</span></a>
                         </li><?php endforeach; endif; else: echo "" ;endif; ?>
                         </ul>
                        
              </div>

              <div class="content1">
                      <ul class="seller">
                          <?php if(is_array($shop_list)): $a = 0; $__LIST__ = $shop_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($a % 2 );++$a;?><li>
                                 <span class="shangjia"><a href="<?php echo U('Shida/shop',array('shopid'=>$s['shopid']));?>"><img src="<?php echo ($s['shoppic']); ?>" /></a></span>
                                 <span class="text">
                                      <h3><?php echo ($s['shopname']); ?></h3>
                                      <p>主要经营项目：烧烤</p>
                                      <p><span class="tuijian">推荐指数：</span><span class="xing"><img src="__PUBLIC__/images/seller_06.png" /><img src="__PUBLIC__/images/seller_06.png" /><img src="__PUBLIC__/images/seller_06.png" /><img src="__PUBLIC__/images/seller_06.png" /><img src="__PUBLIC__/images/seller_06.png" /></span></p>
                                 </span>
                                 </li><?php endforeach; endif; else: echo "" ;endif; ?>
                       </ul>
                        
              </div>
           </div>
      </div>
      <script>
$('#shangpin').click(function(){

  $('#querysousuo').val("shangpin");
   
});


$('#shop').click(function(){

$('#querysousuo').val("shop");
   
});



  $(function(){
    

    $(".head .tab input").css("cursor","pointer");
    

 
    $(".con div").not(".content").css("display","none");
      $(".tab").click(
        function(){
          
          $(".con div").not($(".con div").eq($(this).index())).css("display","none");


          $(".con div").eq($(this).index()).css("display","block");

        });
  
    })

</script>

</body>
</html>