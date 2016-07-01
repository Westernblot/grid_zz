<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="/grid_zz/Public/res/favicon.ico" type="image/x-icon">
	<title>重设密码</title>
	<script type="text/javascript" src="/grid_zz/Public/js/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="/grid_zz/Public/js/sysGeneral.js"></script>
    <script type="text/javascript" src="/grid_zz/Public/js/systemUtils.js"></script>
	<style>
	*{ margin:0; padding:0;}
	body{ text-align:center; font-size:13px; line-height:21px;}
	ul,li{ list-style:none;}
	h1{ color:#C5D7E3; line-height:60px; font-size:36px;}
	.register{ background-color:#3F4E6B; width:554px; margin:0 auto; overflow:hidden;}
	.register .r-top{border-top:1px solid #0F1217; border-bottom:1px solid #ACB4C3; margin-bottom:1px;}
	.register .r-main{ background-color:#EFF2F9; overflow:hidden;}
	.register .r-main ul{ margin:16px 0 26px 100px;text-align:left;}
	.register .r-main li{ color:#585D6E; padding:10px 0;}
	.register .r-main li span{ width:90px; display:inline-block; text-align:center;}
	.register .r-main li em{ background-color:#3683C4; color:#FFF; font-style:normal; font-size:12px; padding:4px 10px;}
	.register .r-main li .inputText{ width:184px; border:1px solid #BDC2C8; height:21px;}
	.register .r-main li .button{ background-color:#870D0C; width:155px; height:28px; border:1px; color:#FFF;}
	.register .r-title{ padding:6px 0; color:#C5D7E3;font-weight:bold;}
    </style>
</head>

<script type="text/javascript">

   $(function(){
   	//判断用户浏览器是否禁用 cookie
   	if (!navigator.cookieEnabled){
         alert("您好，您的浏览器设置禁止使用cookie\n请设置您的浏览器，启用cookie功能，再重新操作。");
      }
   });
   
	var timer1;
	var s=60;
	
	//刷新验证码
	function freshVerify(){
		$('#verifyImg').attr('src','/grid_zz/index.php/Home/Index/verify?time='+Math.random());  
	}
	
	//提交注册
	function doCmd(){
		
		var password=$('#password').val();
		var re_password=$('#re_password').val();	
		 if(password=='' || password!=re_password){
			alert('两次密码输入不一致');
			return;
		}
		
		var checked = checkForm('#form1');
	    if(checked==false){
		   return;
	    }
	    
		var data=PublicAjax('/grid_zz/index.php/Home/Index/doresetpwd',$('#form1').serialize());
		//alert(data);
		if(data==-5){
			alert('修改手机号码？闹着玩呢！');
		}else if(data==-4){
			alert('验证码已过期，请重新获取！');
		}else if(data==-2){
			alert('手机号码有误，请联系系统管理员!');
		}else if(data==-1){
			alert('验证码错误！');
		}else if(data==0){
			alert('操作失败,请不要使用之前的密码！');
		}else{
			alert('操作成功！');
			location.href="/grid_zz/index.php/Home/Index/index";
		}
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
		if( isMobile(phone) == false){
			alert("手机号码有误！");
		    return;
		}
		
		//请求发送验证码
		var data=PublicAjax('/grid_zz/index.php/Home/Code/send',{'phone':phone});
		if(data.status==0){
			alert('短信已经发送!');
		    //clearInterval(timer1);
		    clock();
		    timer1=setInterval("clock()",1000);
		}else{
			alert('短信发送失败！');
		}
		
	}
	
	
	
	
</script>

<body>

 	<div class="register">
    	<div class="r-title r-top"><h1>重设密码</h1></div>
    	<div class="r-main">
    		<form id="form1">  			
        	<ul>
                <li><span><label for="phone">手机号码<font color="red">*</font></label></span><input name="phone" id="phone" type="text" class="inputText" dataType="mobile" want="yes" title="手机号"/><input id="sp_code" type="button" value="获取验证码" onclick="sendCode()"></li>
                <li><span><label for="validateCode">输入验证码<font color="red">*</font></label></span><input name="validateCode" id="validateCode" type="text" class="inputText" want="yes" title="验证码" /></li>
                <li><span><label for="password">新密码<font color="red">*</font></label></span><input name="password" id="password" type="password" class="inputText" want="yes" title="密码" /></li>
                <li><span><label for="re_password">确认密码<font color="red">*</font></label></span><input name="re_password" id="re_password" type="password" class="inputText"  /></li>
                <!-- <li><span><label for="phone">手机号码<font color="red">*</font></label></span><input name="phone" id="phone" type="text" class="inputText" dataType="mobile" want="yes" title="手机号"/><em><span id="sp_code" style="cursor: pointer" onclick="sendCode()">获取验证码</span></em></li> -->
                <!-- <li><span><label for="code">验证码</label></span> <img style='cursor:pointer' title='刷新验证码' src='/grid_zz/index.php/Home/Index/verify' id='verifyImg' onClick='freshVerify()'/></li> -->
                <!-- <li><span></span><input name="checkbox" type="checkbox" value="checkbox" id="checkbox" /><label for="checkbox">是否接收高端信息</label></li> -->
                <li style="padding:0;"><span></span><input name="button" type="button" value="修改" class="button" onclick="doCmd()" /></li>
            </ul>
    		</form>
        </div>
    	<div class="r-title">客服电话：400-723-7988</div>
    </div>

</body>
</html>