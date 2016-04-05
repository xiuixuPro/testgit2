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
                 <div class="search">
                 <input type="text" value="搜索美食" />
                 <div class="suosou"><img src="__PUBLIC__/images/product_03.png" /></div>
                 </div>
           </div>
           <div class="con">
                       <ul class="seller_product">

                          <?php if(is_array($shangpin_list)): $i = 0; $__LIST__ = $shangpin_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?><li>
                        <form action="<?php echo U('Shida/money');?>" method="post">
                          <input type="hidden" value="<?php echo ($p['shangpinid']); ?>" name="shangpinid">

                             <input type="hidden" value="<?php echo ($p['shoplist']); ?>" name="shoplist">
                       <div class="chanpin"><a href="<?php echo U('Shida/splist',array('shangpinid'=>$p['shangpinid']));?>"><img src="<?php echo ($p['shangpinpic']); ?>" /></a></div>
                       <div class="text1">
                            <h3><input name="shangpinname" value="<?php echo ($p['shangpinname']); ?>" type="text" disabled="disabled"></h3>
                            <p><span>￥<input style="width:20px;" name="shangpinmoney" value="<?php echo ($p['shangpinmoney']); ?>" type="text" disabled="disabled"></span> 元/份</p>
                            <p><div class="xing1"><img src="__PUBLIC__/images/seller_06.png" /><img src="__PUBLIC__/images/seller_06.png" /><img src="__PUBLIC__/images/seller_06.png" /><img src="__PUBLIC__/images/seller_06.png" /><img src="__PUBLIC__/images/seller_06.png" /></div></p>
                            <p>已售
                            <?php  $bill=M('bill'); $where['shangpinid']=$p['shangpinid']; $where['shopid']=$p['shopid']; $where['_logic']="and"; echo $bill->where($where)->count(); ?>



                              份</p>
                            <p class="mai_box">
                                <div class="number">
                                    <a href="javascript:jian(<?php echo $p['shangpinid']?>);" id="jian<?php echo $p['shangpinid']?>"  ><img src="__PUBLIC__/images/seller_product_06.png" /></a>
                                    <input type="text" value="1"  id="input<?php echo $p['shangpinid']?>" name="num"/>
                                    <a href="javascript:jia(<?php echo $p['shangpinid']?>);" id="jia<?php echo $p['shangpinid']?>" ><img src="__PUBLIC__/images/seller_product_08.png" /></a>
                                </div>
                                <div class="num_anniu"><input type="submit" value="购买" /></div>
                            </p>
                       </div>
                     </form>
                       </li><?php endforeach; endif; else: echo "" ;endif; ?>
                       </ul>
                        
                     
           </div>
              <div class="page"><?php echo ($spPage); ?></div>
      </div>

      <script>

    //弹出一个对话框  做一个带确定和取消的对话框，当用户点确定的时候弹出删除。否则弹出不删除


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