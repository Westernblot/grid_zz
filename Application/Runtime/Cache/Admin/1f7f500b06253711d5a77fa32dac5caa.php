<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link href="/grid_zz/Public/css/default.css" rel="stylesheet" type="text/css" />
<link href="/grid_zz/Public/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/grid_zz/Public/js/goaler.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/jquery.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/sysGeneral.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/systemUtils.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	
});


function sub(){
	
	var checked = checkForm('#form1');
	if(checked==false){
		return;
	}
	$('#form1').submit();
}

</script>
</head>
<body style="overflow: auto;">
<div id="div_right">
	<div class="right_top">
					<span>账户管理</span>
				</div>
				<div class="title">
					<a href="javascript:sub()"  class="btn btn-green">保存</a> 
					<a href="javascript:history.back();" class="btn btn-default"  >返回</a>
				</div>
				
		<div class="develop">
		<form action="<?php echo ($user==null?'/grid_zz/index.php/Admin/User/insert':'/grid_zz/index.php/Admin/User/update'); ?>"  id="form1" method="post">
		   
		   <input type="hidden" name="id" value="<?php echo ($user["id"]); ?>" />
		   <table width="100%" border="0" class="mtable" >
		   <tr>
		   <td align="right" >账户：</td>
		   <td >
		   <input type="text" id="username" name="username"  want="yes" title="账户" value="<?php echo ($user["username"]); ?>"
		    <?php if($user!=null): ?>readOnly<?php endif; ?>
		   >
		   <font color="red">*</font>
		   </td>
		   </tr>
		   <tr>
		   <td align="right" >中文名：</td>
		   <td >
		   <input type="text" id="cnname" name="cnname"  want="yes" title="中文名" value="<?php echo ($user["cnname"]); ?>">
		   <font color="red">*</font>
		   </td>
		   </tr>
		   <tr>
		   <td align="right" >部门：</td>
		   <td >
		   <input type="text" id="dept" name="dept"  want="yes" title="部门" value="<?php echo ($user["dept"]); ?>">
		   <font color="red">*</font>
		   </td>
		   </tr>
		   
		   
		   <?php if($user==null): ?><tr>
		   <td align="right" >密码：</td>
		   <td >
		   <input type="password" id="password" name="password" value="" want="yes" title="密码" >
		   <font color="red">*</font>
		   </td>
		   </tr>
		   <!--
		   <tr>
		   <td align="right" >确认密码：</td>
		   <td >
		   <input type="password" id="verifyPwd" name="verifyPwd" value="" want="yes" title="确认密码"  >
		   <font color="red">*</font>
		   </td>
		   </tr>
		   	 --><?php endif; ?>
		   </table>
		</form>
		</div>
		
</div>
</body>
</html>