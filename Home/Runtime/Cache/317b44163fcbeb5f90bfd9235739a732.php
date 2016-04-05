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
<title>师大夜市</title>
</head>

<body>
      <div class="box">
           <div class="top clearfix">
                 <a href="javascript:history.go(-1)"></a>
                <span>师大夜市</span>
           </div>
           <div class="con">
                       <ul class="seller">
                        <?php if(is_array($shop_list)): $i = 0; $__LIST__ = $shop_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?><li>
                       <div class="shangjia"><a href="<?php echo U('Shida/shop',array('shopid'=>$p['shopid']));?>"><img src="<?php echo ($p['shoppic']); ?>" /></a></div>
                       <div class="text">
                            <h3><?php echo ($p['shopname']); ?></h3>
                            <p>主要经营项目：烧烤</p>
                            <p><div class="tuijian">推荐指数：</div><div class="xing"><img src="__PUBLIC__/images/seller_06.png" /><img src="__PUBLIC__/images/seller_06.png" /><img src="__PUBLIC__/images/seller_06.png" /><img src="__PUBLIC__/images/seller_06.png" /><img src="__PUBLIC__/images/seller_06.png" /></div></p>
                       </div>
                       </li><?php endforeach; endif; else: echo "" ;endif; ?>
                       </ul>
           </div>
      </div>
</body>
</html>