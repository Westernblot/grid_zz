<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>中证财讯网</title>
	<link rel="stylesheet" href="/grid_zz/Public/zzcss/base.css" type="text/css" />
	<link rel="stylesheet" href="/grid_zz/Public/zzcss/columns.css" type="text/css" />
    <style>
		.client { margin-top:50px; overflow:hidden;}
    	.client li{text-align:center; float:left; height:327px;width:410px; border:2px solid #999; overflow:hidden; padding:50px 0; margin:0 40px;}
		.client li .client-logo{ float:left; margin:60px 26px 0 28px;}
		.client li p{ float:left;}
    </style>
</head>

<body>
    <!-- 固定条 -->
   
<!-- JiaThis Button BEGIN -->
<script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_r.js?type=left&amp;move=0" charset="utf-8"></script>
<!-- JiaThis Button END -->

<div class="top">
	<div class="margin">
        <div class="top01">
            <div class="pull-left">
                <a href="javascript:#" class="hrefs" onclick="myhomepage()">设为首页</a>
                <!-- <a href="index.html">登录</a> -->
                <a href="/grid_zz/index.php/Home/Index/register.html">注册</a>
                <a href="/grid_zz/index.php/Home/Index/resetpwd.html">忘记密码</a>
            </div>
            <div class="pull-right">
                <a href="http://cxcxt.com/Public/res/setup.zip">电脑版</a>
                <a href="/grid_zz/index.php/Home/Down/index.html" target="_blank">手机客户端</a>
                <a href="javascript:#">加入我们</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
	
function myhomepage(){ 
	
//this.homepage.style.behavior='url(#default#homepage)';
this.homepage.sethomepage('http://www.webjx.com'); 
} 
	
</script>

    <!-- 固定条 -->
   <div class="bar">
    <div class="margin">
        <div class="top02">
                  <div class="pull-left">
                      <img src="/grid_zz/Public/images/logo.jpg" />
                  </div>
                  <div class="pull-right">
                      <!-- <img src="/grid_zz/Public/images/top-banner.jpg" /> -->
                      <embed src="/grid_zz/Public/images/top.swf" width="760" height="104"></embed>
                  </div>
        </div>
        <div class="nav">
              <ul>    
                  <li><a href="/grid_zz/index.php/Home/Index/index"
                  	<?php if((ACTION_NAME) == "index"): ?>class="active"<?php endif; ?>
                  	>首页</a></li>            
                  <li><a href="/grid_zz/index.php/Home/Index/news?type=金融服务"
                  	<?php if(($type) == "金融服务"): ?>class="active"<?php endif; ?>
                  	>金融服务</a></li> 
                  <li><a href="/grid_zz/index.php/Home/Index/news?type=中证投资锦囊"
                  	<?php if(($type) == "投资锦囊"): ?>class="active"<?php endif; ?>
                  	>投资锦囊</a></li>  
                  <li><a href="/grid_zz/index.php/Home/Index/experts" 
                  	<?php if((ACTION_NAME) == "experts"): ?>class="active"<?php endif; ?>
                  	>专家解盘</a></li>  
                  <li><a href="http://zhibo.cxcxt.com" target="_blank">直播间</a></li>
                  <li><a href="/grid_zz/index.php/Home/Index/product"
                  	<?php if((ACTION_NAME) == "product"): ?>class="active"<?php endif; ?>
                  	>产品</a></li>
                  <li><a href="/grid_zz/index.php/Home/Index/about"
                  	<?php if((ACTION_NAME) == "about"): ?>class="active"<?php endif; ?>
                  	>关于中证</a></li>
              </ul>  
              <div class="search">
             <form id="form1" action="/grid_zz/index.php/Home/Index/search" method="get">     
                <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><input type="text" id="keyword" name="keyword" class="inputText" placeholder="请输入关键字"/> </td>
                        <td><input name="search" type="button" class="inputBtn" value="搜索" onclick="doSubmit()" /></td>
                    </tr>
                </table>
             </form>
              </div>
           </div>
    </div>
</div>

<script type="text/javascript">
	
	function doSubmit(){
		
		document.getElementById('form1').submit();
	}
	
</script>


<div id="container" style=" padding:50px;"> 
	<h1 style="text-align:center; color:#1298DF;">中证财讯客户端</h1>
    <ul class="client">
        <li>
            <img src="/grid_zz/Public/images/az.png" class="client-logo" />
            <p>
            <img src="/grid_zz/Public/images/ewm.png" /><br/><br/><br/><br/>
            <a href="http://cxcxt.com/Public/res/cxt.apk"><img src="/grid_zz/Public/images/downlaod.png" /></a>
            </p>
        </li>
        <li>
            <img src="/grid_zz/Public/images/pg.png" class="client-logo" />
            <p>
            <img src="/grid_zz/Public/images/pgewm.png" /><br/><br/><br/><br/>
            <!-- <a href="#"><img src="/grid_zz/Public/images/downlaod.png" /></a> -->
            </p>
        </li>
    </ul>
</div>

    <!-- 固定条 -->
     <div id="foot">
    	<div class="margin">
        <div class="foot_lable">
            <a href="/grid_zz/index.php/Home/Index/about?type=关于我们" target="_blank">关于我们</a>　|　
            <a href="javascript:#" target="_blank">法律声明</a>　|　
            <a href="javascript:#" target="_blank">网站地图</a>　|　
            <a href="/grid_zz/index.php/Home/Index/about?type=联系我们" target="_blank">联系我们</a>
        </div>
        备案号  粤ICP备15073810号
		版权所有 中证财讯网&nbsp;&nbsp;
<script src="http://s11.cnzz.com/z_stat.php?id=1256670869&web_id=1256670869 " language="JavaScript"></script>
		<p style=" margin:5px 0; line-height:21px;">
        <B style="color:#990000;">股市有风险，入市须谨慎</B><br/>
        中证财讯所有信息内容及所有终端产品内容仅供参考，投资者应根据自身情况，理性投资。投资者如据此操作，风险自担。
    </p>
        </div>
	</div>


</body>
</html>