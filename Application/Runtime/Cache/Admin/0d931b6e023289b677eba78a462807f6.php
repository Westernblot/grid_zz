<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link href="/grid_lyj/Public/css/default.css" rel="stylesheet" type="text/css" />
<link href="/grid_lyj/Public/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/grid_lyj/Public/js/goaler.js"></script>
<script type="text/javascript" src="/grid_lyj/Public/js/jquery.js"></script>
<script type="text/javascript" src="/grid_lyj/Public/js/DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/grid_lyj/Public/js/sysGeneral.js"></script>
<script type="text/javascript" src="/grid_lyj/Public/js/systemUtils.js"></script>
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
					<span>网上调查主题</span>
				</div>
				<div class="title">
					<a href="javascript:sub()"  class="btn btn-green">保存</a> 
					<a href="javascript:history.back();" class="btn btn-default"  >返回</a>
				</div>
				
		<div class="develop">
		<form action="<?php echo ($wsdc==null?'/grid_lyj/index.php/Admin/Wsdc/insert':'/grid_lyj/index.php/Admin/Wsdc/update'); ?>"  id="form1" method="post">
		   
		   <input type="hidden" name="id" value="<?php echo ($wsdc["id"]); ?>" />
		   <table width="100%" border="0" class="mtable" >
		   <tr>
		   <td align="right" >主题：</td>
		   <td >
		   <input type="text" id="subject" name="subject"  want="yes" title="主题" value="<?php echo ($wsdc["subject"]); ?>">
		   <font color="red">*</font>
		   </td>
		   </tr>
		   <tr>
		   <td align="right" >截止时间：</td>
		   <td >
		   <input type="text" id="endate" name="endate"  want="yes" title="截止时间" value="<?php echo ($wsdc["endate"]); ?>" class="Wdate"  onclick="WdatePicker()">
		   <font color="red">*</font>
		   </td>
		   </tr>
		   <tr>
		   <td align="right" >发布状态：</td>
		   <td >
		   <select name="status">
		   	<option value="发布" <?php if(($$wsdc["status"]) == "发布"): ?>selected<?php endif; ?>  >发布</option>
		   	<option value="取消" <?php if(($$wsdc["status"]) == "取消"): ?>selected<?php endif; ?>  >取消</option>
		   	
		   </select>
		   </td>
		   </tr>
		   
		   </table>
		</form>
		</div>
		
</div>
</body>
</html>