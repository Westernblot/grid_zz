<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link href="/grid_zz/Public/css/default.css" rel="stylesheet" type="text/css" />
<link href="/grid_zz/Public/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/grid_zz/Public/js/goaler.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/kindeditor/kindeditor-min.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/sysGeneral.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/systemUtils.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/ajaxfileupload.js"></script>
<script type="text/javascript">

//保存
function sub(){
	$('#form1').submit();
}

</script>
</head>
<body style="overflow: auto;">
<div id="div_right">
	<div class="right_top">
					<span>中证战绩回顾</span>
				</div>
				<div class="title">
					<a href="javascript:sub()"  class="btn btn-green">保存</a> 
					<a href="javascript:history.back();" class="btn btn-default"  >返回</a>
				</div>
				
		<div class="develop">
		<form action="<?php echo ($mo==null?'/grid_zz/index.php/Admin/Performance/insert':'/grid_zz/index.php/Admin/Performance/update'); ?>"  id="form1" method="post">
		   <input type="hidden" name="id" value="<?php echo ($mo["id"]); ?>" />
		   
		   <table width="100%" border="0" class="mtable" >
		     
		    <tr>
		    	<td width="20%" align="right">
		    		变更时间:
		    	</td>
		    	<td>
		    		<input type="text" name="change_date" value="<?php echo ($mo["change_date"]); ?>" class="Wdate"  onclick="WdatePicker()" />
		    	</td>
		    	<td align="right">
		    		股票类型:
		    	</td>
		    	<td>
		    		<input type="text" name="type" value="<?php echo ($mo["type"]); ?>" />
		    	</td>
		    </tr>
		    <tr>
		    	<td align="right">
		    		股票代码:
		    	</td>
		    	<td>
		    		<input type="text" name="code" value="<?php echo ($mo["code"]); ?>" />
		    	</td>
		    	<td align="right">
		    		公司名:
		    	</td>
		    	<td>
		    		<input type="text" name="company" value="<?php echo ($mo["company"]); ?>" />
		    	</td>
		    </tr>
		    <tr>
		    	<td align="right">
		    		操作评级:
		    	</td>
		    	<td>
		    		<input type="text" name="cmd_rate" value="<?php echo ($mo["cmd_rate"]); ?>" />
		    	</td>
		    	<td align="right">
		    		当前操作评级:
		    	</td>
		    	<td>
		    		<input type="text" name="now_cmd_rate" value="<?php echo ($mo["now_cmd_rate"]); ?>" />
		    	</td>
		    </tr>
		    <tr>
		    	<td align="right">
		    		历史评级:
		    	</td>
		    	<td>
		    		<input type="text" name="history_rate" value="<?php echo ($mo["history_rate"]); ?>" />
		    	</td>
		    	<td align="right">
		    		变更状态:
		    	</td>
		    	<td>
		    		<input type="text" name="status_change" value="<?php echo ($mo["status_change"]); ?>" />
		    	</td>
		    </tr>
		   
		  
		    
		   </table> 
		</form>
		</div>
		
</div>
</body>
</html>