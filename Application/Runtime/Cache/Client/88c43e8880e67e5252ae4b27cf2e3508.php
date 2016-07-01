<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>中证财讯通</title>
	<link rel="stylesheet" href="/grid_zz/Public/cxtcss/style.css" type="text/css" />
</head>

<body>
<div id="container"> 
   <div class="content_title"><a href="/grid_zz/index.php/Client/Index/index">首页</a>　>　<a href="/grid_zz/index.php/Client/Index/fxs">中证分析师</a>　>　<span>正文</span></div>   
   <div class="content" align="center">
                 <div class="box_rw">
                    <div class="box_rw1">
                        <img src="<?php echo ($experts["imgurl"]); ?>" />
                        <p>
                            <?php echo ($experts["name"]); ?>
                        </p>
                    </div>
                    
                    <div class='box_rw2'>
                        <p><B><?php echo ($experts["position"]); ?></B></p>
                        <p>注册职业资格号：<?php echo ($experts["code"]); ?></p>
                        <p><span style="color:red;">星级：</span><span class="star"><?php echo ($experts["star"]); ?></span></p>
                    </div>
                    <div class='box_rw3'>
                        个人简介:
                        <span><?php echo ($experts["introduce"]); ?></span>
                    </div>
                </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
       </div>
</div>

</body>
</html>