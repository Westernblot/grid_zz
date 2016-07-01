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
        <h2 class="main_title">预约开户</h2>
</header>
    
  <div class="loginform">
  	<form id="form2">
        <ul>        
          <li><input name="name" id="name" type="text" value="" placeholder="真实姓名"></li>
          <li><input name="idcard" id="idcard" type="text" value="" placeholder="身份证号"></li>
          <li><input name="phone" id="phone" type="text" value="" placeholder="手机号"></li>
          <li class="code">
          	<input name="validateCode" id="validateCode" type="code" value="" placeholder="验证码" class="codeInput">
          	<span class="codeSource"><img src="/grid_zz/index.php/Home/Index/verify" id='verifyImg' onClick='freshVerify()' /></span></li>
       </ul>
       </form>
       <div class="but">
              <button name="button" class="butYellow" onclick="dosub()">提交</button>
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
<!-- <script type="text/javascript" src="/grid_zz/Public/js/zepto.js"></script> -->
<script type="text/javascript" src="/grid_zz/Public/js/jquery.js"></script>

<script type="text/javascript">
    
    $(function(){
   	//判断用户浏览器是否禁用 cookie
   	if (!navigator.cookieEnabled){
         alert("您好，您的浏览器设置禁止使用cookie\n请设置您的浏览器，启用cookie功能，再重新操作。");
      }
   });
    
    //刷新验证码
	function freshVerify(){
		$('#verifyImg').attr('src','/grid_zz/index.php/Home/Index/verify?time='+Math.random());  
	}
	
	//提交注册
	function dosub(){
		
		var name=$('#name').val();
		if(name==null || name==''){
			alert('姓名不得为空！');
			return false;
		}
		
		var idcard=$('#idcard').val();
		if(idcard.length<16){
			alert('身份证号有误！');
			return;
		}
		
		var phone = $('#phone').val();
		if(phone==null || !(/^1[3|4|5|7|8][0-9]\d{8}$/.test(phone))){ 
			alert('手机号码输入有误！');
			return;
		}
		
		$.ajax({
					type : 'POST',
					url : '/grid_zz/index.php/Home/Index/doOrder',
					data : $('#form2').serialize(),
					dataType : 'json',
					timeout : 3000,
					context: $('body'),
					success : function(data) {
                         
                          if(data==-1){
			                  alert('验证码输入错误！');
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
	
</script>
	
</body>
</html>