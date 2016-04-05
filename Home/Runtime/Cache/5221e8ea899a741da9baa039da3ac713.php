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
           <div class="top clearfix"><a href="javascript:history.go(-1)"></a>提交订单</div>
                <div class="con1">
                <div class="pay">

                  <form action="<?php echo U('Shida/billact');?>" method="post">
                     <div class="list">
                          <div class="list1">
                               <ul>
                               <li>
                               <div class="a1"><?php echo ($shangpinlist['shangpinname']); ?></div>
                               <div class="a2"><?php echo ($num); ?>份</div>
                               <div class="a3">￥<?php echo ($shangpinlist['shangpinmoney']); ?></div>
                               </li>
                             <input type="hidden" value="<?php echo ($shangpinlist['shopid']); ?>" name="shopid">
                             <input type="hidden" value="<?php echo ($shangpinlist['shangpinid']); ?>" name="shangpinid">
                             <input type="hidden" value="测试" name="memberid">
                              <input type="hidden" value="<?php echo ($num); ?>" name="num">
                               <li>
                               <div class="a1"></div>
                               <div class="a2"></div>
                               <div class="a3">总计：￥<?php echo $shangpinlist['shangpinmoney']*$num?></div>
                               </li>
                               </ul>
                          </div>
                        
                          <div class="list2 clearfix">
                              <div class="floatl">备注：</div>
                              <div class="floatr"><input type="text" value="" name="billinfo"/></div>
                          </div>
                          <div class="list2 clearfix">
                              <div class="floatl">联系方式：</div>
                              <div class="floatr"><input type="text" required="required" value="" name="chat"/></div>
                          </div>
                          <div class="list2 clearfix">
                              <div class="floatl">送货地址：</div>
                              <div class="floatr"><input type="text" required="required" value="" name="address"/></div>
                          </div>
                     </div>
                     <div class="pay_anniu"><input type="submit" value="确认提交" /></div>
                   </form>
                </div>
      </div> 
      </div>
</body>
</html>