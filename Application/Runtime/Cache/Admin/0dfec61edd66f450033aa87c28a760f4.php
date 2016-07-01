<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="renderer" content="webkit" /><!-- 开启360浏览器极速模式，其他浏览器未测试 -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>用户登陆</title>

<link href="/grid_zz/Public/css/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/grid_zz/Public/js/jquery.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/systemUtils.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/goaler.js"></script>
<style type="text/css">
 body{background:url(/grid_zz/Public/images/sys/log_bg.jpg) repeat; }
 .m_log{background:url(/grid_zz/Public/images/sys/log_tbg.jpg) top repeat-x #F9F9F9; border:1px solid #C8C8CA; margin:16% auto 0 auto; font-weight:bold; color:#5E5E5E;}
 .m_log input[type="text"],
 .m_log input[type="password"]{ width:90%;}
</style>
</head>
<body>
<form action="/grid_zz/index.php/Admin/Login/login" id="form1" method="post">
<table width="400" height="240" border="0"  class="m_log">
  <tr>
  <td height="40" style="font-size:14px;background:url(/grid_zz/Public/images/sys/user_silhouette.png) no-repeat 10px center;">　　用户登陆</td>
  </tr>
    <tr style="display:none">
  <td align="center">
  <div><a href="javascript:doTip()"><font color="blue">[系统使用说明]</font></a></div>
  </td>
  </tr>
    <tr>
  <td align="center">
      <table width="80%" height="160" border="0" align="center">
        <tr>
      <td width="60"><span style="display:block;">用户名</span>　</td>
      <td><input type="text" id="username" name="username" want="yes" title="账号" onkeydown="if(event.keyCode==13)toPwd()" ></td>
      </tr>
      <tr>
      <td><span style="display:block;">密　码</span>　</td>
      <td><input type="password" id="password" name="password" want="yes" title="密码" onkeydown="if(event.keyCode==13)doLogin();" ></td>
      </tr>
      <!--
      <tr style="display:none">
						<td align="right">验证码：</td>
						<td>
							<img id="codeImg" src="setCode" width="70" height="20" border="0" onclick="getVerifyCode();" title="看不清,点击图片刷新" style="cursor: pointer;"/>
							<input type="text" name="verifyCode" id="verifyCode" maxlength="4" style="width:50px;margin-bottom: 2px;" />
						</td>
	  </tr>
      	 -->
      
      <tr>
      <td></td>
      <td>
          <input type="submit"  name="submit" value="登陆" class="btn btn-red"  >
          <input type="reset"  name="reset" value="重置" class="btn btn-default" >
      </td>
      </tr>
    </table>
  </td>
  </tr>  
</table>
</form>

</body>
</html>