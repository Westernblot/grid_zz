<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>产品</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/grid_zz/Public/css/base.css" type="text/css" />
    <style>
		*{ margin:0; padding:0; }
		ul,li{ list-style-type:none;}
    	body{ background:#1099DF; text-align:center;}
		.product img{ width:100%;}
		.product-con{ padding:0 5%; background-color:#FFF; overflow:hidden;}
		.product-con li{ margin-top:25px; margin-bottom:21px;}
    </style>
</head>

<body>
<div class="product">
        <div class="product-top"><img src="/grid_zz/Public/images/product/01.jpg" /><img src="/grid_zz/Public/images/product/02.jpg" /><img src="/grid_zz/Public/images/product/03.jpg" border="0" usemap="#Map2" />
          <map name="Map2" id="Map2">
            <area shape="rect" coords="604,33,756,104" href="#" />
          </map>
        </div>
  <div style=" padding:0 10%;background:url(/grid_zz/Public/images/product/04.jpg) no-repeat top center; background-size:100% auto;">
    <!-- <ul class="product-con">
             <li><img src="/grid_zz/Public/images/product/1.jpg" /></li>
             <li><img src="/grid_zz/Public/images/product/2.jpg" /></li>
             <li><img src="/grid_zz/Public/images/product/3.jpg" /></li>
             <li><img src="/grid_zz/Public/images/product/4.jpg" /></li>
             <li><img src="/grid_zz/Public/images/product/5.jpg" /></li>
             <li><img src="/grid_zz/Public/images/product/6.jpg" /></li>
             <li><img src="/grid_zz/Public/images/product/7.jpg" /></li>
      </ul>
      <img src="/grid_zz/Public/images/product/8.jpg" />
      <img src="/grid_zz/Public/images/product/9.jpg" />
      <img src="/grid_zz/Public/images/product/10.jpg" />
      <img src="/grid_zz/Public/images/product/11.jpg" />
      <img src="/grid_zz/Public/images/product/12.jpg" />
      <img src="/grid_zz/Public/images/product/13.jpg" />
      <img src="/grid_zz/Public/images/product/14.jpg" /> -->
      
       <ul class="product-con">
           <?php echo ($product["content"]); ?>
       </ul>
      
      
      <img src="/grid_zz/Public/images/product/15.jpg" border="0" usemap="#Map" />
            <map name="Map" id="Map">
              <area shape="rect" coords="267,32,489,108" href="javascript:#" />
            </map>
      <!-- <img src="/grid_zz/Public/images/product/16.jpg" />
      <img src="/grid_zz/Public/images/product/17.jpg" /> -->
    </div>
        <div style="height:300px;"></div>
</div>


</body>
</html>