<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
   <title>中证财讯网</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link href="/grid_zz/Public/mcss/base.css" rel="stylesheet" type="text/css"/>
  	<link href="/grid_zz/Public/mcss/subPage.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<header class="header">    
        <a href="javascript:void(0);" onClick="history.back();return false;" class="return_back">返回</a>
        <h2 class="main_title">快速注册</h2>
</header>
    
  <div class="loginform">
  	<form id="form1">  
        <ul>        
          <li><input name="account" id="account" type="text" value="" placeholder="注册账号"></li>
          <li><input name="password" id="password" type="password" value="" placeholder="密码"></li>
          <li><input name="re_password" id="re_password" type="password" value="" placeholder="确认密码"></li>
          <li class="code">
          	<input name="phone" id="phone" type="text" value="" placeholder="手记号码" class="codeInput">
          	<!-- <a href="#" class="codeSource">获取验证码</a> -->
          	<input id="sp_code" class="codeSource" type="button" value="获取验证码" onclick="sendCode()">
          </li>
          <li><input name="validateCode" id="validateCode" type="text" value="" placeholder="输入验证码"></li>
       </ul>
      </form>
       <div class="but">
              <button name="button" class="butYellow" onclick="doCmd()">注册</button>
       </div>
    </div>  
    
<!-- 页尾 -->
<footer>
		<div class="i-footer">
			<div class="i-footer_nav">
				<a href="index.html" class="linkico">首页</a>
                <a href="guide.html" class="linkico">导航</a>
                <a href="about.html" class="linkico">关于中证</a>						
			</div>
            <p class="i-footer_copy">
               版权所有 中证财讯网
            </p>
		</div>
	</footer>

<script type="text/javascript" src="/grid_zz/Public/js/zepto.js"></script>
<script type="text/javascript">

   $(function(){
   	//判断用户浏览器是否禁用 cookie
   	if (!navigator.cookieEnabled){
         alert("您好，您的浏览器设置禁止使用cookie\n请设置您的浏览器，启用cookie功能，再重新操作。");
      }
   });
   
	var timer1;
	var s=60;
	

	//提交注册
	function doCmd(){
		
		var password=$('#password').val();
		var re_password=$('#re_password').val();	
		 if(password=='' || password!=re_password){
			alert('两次密码输入不一致');
			return;
		}
		
		var account=$('#account').val();
		if(account==null || account==''){
			alert('注册账号不能为空');
			return;
		}
	   
	    
	    //提交数据
	    $.ajax({
					type : 'POST',
					url : '/grid_zz/index.php/Home/Index/doRegister',
					data : $('#form1').serialize(),
					dataType : 'json',
					timeout : 3000,
					context: $('body'),
					success : function(data) {
                         if(data==-5){
			                    alert('修改手机号码？闹着玩呢！');
		                 }else if(data==-4){
			                    alert('验证码已过期，请重新获取！');
		                 }else if(data==-3){
			                    alert('该手机号已经注册！');
		                 }else if(data==-2){
			                    alert('该用户已存在,请更换用户名！');
		                 }else if(data==-1){
			                    alert('验证码错误！');
		                 }else if(data==0){
			                    alert('操作失败！');
		                 }else{
			                    alert('操作成功！');
			                    location.href="/grid_zz/index.php/Mobile/Index/index";
		                 }
					},
					error : function(xhr, type) {
						   alert('数据访问失败！');
					}
			}); 

	}
	
	
	//倒计时
	function clock(){
		var sp_code=$('#sp_code');
		var phone=$('#phone');
		sp_code.attr("disabled", "true");
		phone.attr('readOnly','true');
		sp_code.attr('value',(s-1)+'秒后重发');
		s=s-1;
		
		if(s==0){
			sp_code.attr('value','获取验证码');
			sp_code.removeAttr("disabled"); 
			phone.removeAttr("readOnly"); 
			clearInterval(timer1);
			s=60;
		}
	}
	
	//发送手机验证码
	function sendCode(){
	 
		var phone=$('#phone').val();
		if(phone==null || !(/^1[3|4|5|7|8][0-9]\d{8}$/.test(phone))){ 
			alert('手机号码输入有误！');
			return;
		}
		
		//请求发送验证码
		$.ajax({
					type : 'POST',
					url : '/grid_zz/index.php/Home/Code/send',
					data : {'phone':phone},
					dataType : 'json',
					timeout : 3000,
					context: $('body'),
					success : function(data) {
                         
                          if(data.status==0){
			                    alert('短信已经发送!');
		                        //clearInterval(timer1);
		                        clock();
		                        timer1=setInterval("clock()",1000);
		                  }else{
			                    alert('短信发送失败！');
		                  }
					},
					error : function(xhr, type) {
						   alert('数据访问失败！');
					}
			}); 
		

		
	}
	
	
	
	
</script>


</body>
</html>