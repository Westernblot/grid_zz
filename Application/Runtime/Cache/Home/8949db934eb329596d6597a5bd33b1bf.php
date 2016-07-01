<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="/grid_zz/Public/res/favicon.ico" type="image/x-icon">
	<title>在线预约</title>
	<link rel="stylesheet" href="/grid_zz/Public/zzcss/base.css" type="text/css" />
	<link rel="stylesheet" href="/grid_zz/Public/zzcss/columns.css" type="text/css" />
	<script type="text/javascript" src="/grid_zz/Public/js/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="/grid_zz/Public/js/sysGeneral.js"></script>
    <script type="text/javascript" src="/grid_zz/Public/js/systemUtils.js"></script>
</head>

<script type="text/javascript">
    
    //刷新验证码
	function freshVerify(){
		$('#verifyImg').attr('src','/grid_zz/index.php/Home/Index/verify?time='+Math.random());  
	}
	
	//提交注册
	function doCmd(){
		
		var idcard=$('#idcard').val();
		if(idcard.length<16){
			alert('身份证号有误！');
			return;
		}
		
		var checked = checkForm('#form2');
	    if(checked==false){
		   return;
	    }
	    
		var data=PublicAjax('/grid_zz/index.php/Home/Index/doOrder',$('#form2').serialize());
		//alert(data);
	    if(data==-1){
			alert('验证码输入错误！');
		}else if(data==0){
			alert('操作失败！');
		}else{
			alert('操作成功！');
			location.reload();
		}
	}
	
</script>

<body>
<!-- <div class="pull-order"><a href="/grid_zz/index.php/Home/Index/order.html"><img src="/grid_zz/Public/images/order.jpg" /></a></div> -->
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
            </div>
            <div class="pull-right">
                <a href="javascript:#">电脑版</a>
                <a href="javascript:#">手机客户端</a>
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
                  <li><a href="/grid_zz/index.php/Home/Index/news?type=投资锦囊"
                  	<?php if(($type) == "投资锦囊"): ?>class="active"<?php endif; ?>
                  	>投资锦囊</a></li>  
                  <li><a href="/grid_zz/index.php/Home/Index/experts" 
                  	<?php if((ACTION_NAME) == "experts"): ?>class="active"<?php endif; ?>
                  	>专家解盘</a></li>  
                  <li><a href="/grid_zz/index.php/Home/Index/nlist?type=实盘跟踪"
                  	<?php if((ACTION_NAME) == "list"): ?>class="active"<?php endif; ?>
                  	>实盘跟踪</a></li>
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


<div id="container"> 
   <div class="ordinary">
   		<div class="ordinary-side">
        	<ul class="side-menu">
               <li><a href="/grid_zz/index.php/Home/Index/about?type=关于我们"
        	  	<?php if(($type) == "关于我们"): ?>class="active"<?php endif; ?>
        	  	>关于我们</a></li>
        	  	     	
              <li><a href="/grid_zz/index.php/Home/Index/about?type=荣誉资质"
              	<?php if(($type) == "荣誉资质"): ?>class="active"<?php endif; ?>
              	>荣誉资质</a></li>
              
              <li><a href="/grid_zz/index.php/Home/Index/about?type=明星团队"
              	<?php if(($type) == "明星团队"): ?>class="active"<?php endif; ?>
              	>明星团队</a></li>
              
              <li><a href="/grid_zz/index.php/Home/Index/order"
              	<?php if((ACTION_NAME) == "order"): ?>class="active"<?php endif; ?>
              	>预约开户</a></li>
              
              <li><a href="/grid_zz/index.php/Home/Index/about?type=联系我们"
              	<?php if(($type) == "联系我们"): ?>class="active"<?php endif; ?>
              	>联系我们</a></li>
            </ul>
        </div>
   		<div class="ordinary-main">
            <div class="title"><h3>预约开户</h3></div>
        	<div class="main">
        		<form id="form2">
        			
               <ul class="order">
               		<li>
                    	<div class="o-text">真实姓名：</div>
                        <div class="o-lable"><input type="text" id="name" name="name" class="inputText" placeholder="请输入您的真实姓名" want="yes" title="姓名" /></div>
                    </li>
               		<li>
                    	<div class="o-text">身份证号：</div>
                        <div class="o-lable"><input type="text" id="idcard" name="idcard" class="inputText" placeholder="请输入您的身份证号" want="yes" title="身份证号" /></div>
                    </li>
               		<li>
                    	<div class="o-text">手机号：</div>
                        <div class="o-lable"><input type="text" id="phone" name="phone" class="inputText" placeholder="填写的手机号码作为开户登记的手机号码"  dataType="mobile" want="yes" title="手机号" /></div>
                        <!-- <a class="o-code" href="#">获取手机验证码</a> -->
                    </li>
               		<li>
                    	<div class="o-text">输入验证码：</div>
                        <div class="o-lable"><input type="text" id="validateCode" name="validateCode" class="inputText" placeholder="输入验证码"/></div>
                    </li>
               		<li>
                    	<div class="o-text">验证码：</div>
                        <div class="o-lable11"><img style='cursor:pointer' title='刷新验证码' src='/grid_zz/index.php/Home/Index/verify' id='verifyImg' onClick='freshVerify()'/></div>
                    </li>
               		<li>
                    	<div class="o-text"></div>
                        <div class="o-clues"><span>联系电话需要对客户本人做身份确认，请用本人常用电话</span></div>
                    </li>
               		<li>
                    	<div class="but">
                              <input name="button" type="button" id="button" class="bBlue" value="提交" onclick="doCmd()">
                       </div>
                    </li>
               </ul>
        		</form>
        	</div>
        </div>
   </div>
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
        增值电信业务经营许可证 粤B2-20050348号 互联网视听节目服务(AVSP):粤备2015002 粤ICP备14046937号<br/>
		版权所有 中证财讯网
        </div>
	</div>
   
   <div class="pull-service">
    <div class="service-top"><img src="/grid_zz/Public/images/service-01.gif" /></div>
    <div class="pull-order"><a href="/grid_zz/index.php/Home/Index/order.html"><img src="/grid_zz/Public/images/service-02.gif" /></a></div>
    <ul class="service-center">
    	<li><span class="Cred">在线客服</span></li>
    	<li><a title="在线咨询" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3185994270&site=qq&menu=yes">在线咨询</a></li>
    </ul>
    <div class="service-bottom"><img src="/grid_zz/Public/images/service-03.gif" /></div>
</div>

</body>
</html>