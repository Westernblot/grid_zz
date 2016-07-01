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
					<span>中证互动交流回复</span>
				</div>
				<div class="title">
					<a href="javascript:sub()"  class="btn btn-green">保存</a> 
					<a href="javascript:history.back();" class="btn btn-default"  >返回</a>
				</div>
				
		<div class="develop">
		<form action="/grid_zz/index.php/Admin/Interaction/reply"  id="form1" method="post">
		   <input type="hidden" name="id" value="<?php echo ($mo["id"]); ?>" />
		   <input type="hidden" name="status" value="已回复" />
		   
		   <table width="100%" border="0" class="mtable" >
		     
		    <tr>
		    	<td width="20%" align="right">
		    		标题:
		    	</td>
		    	<td>
		    		<?php echo ($mo["title"]); ?>
		    	</td>
		    </tr>
		    <tr>
		    	<td align="right">
		    		内容:
		    	</td>
		    	<td>
		    		<?php echo ($mo["content"]); ?>
		    	</td>
		    </tr>
		    <tr>
		    	<td align="right">
		    		添加时间:
		    	</td>
		    	<td>
		    		<?php echo ($mo["add_time"]); ?>
		    	</td>
		    </tr>
		    <tr>
		    	<td align="right">
		    		回复内容:
		    	</td>
		    	<td>
		    		<textarea name="reply"><?php echo ($mo["reply"]); ?></textarea>
		    	</td>
		    </tr>
		   
		    <tr>
		    	<td align="right">
		    		回复时间:
		    	</td>
		    	<td>
		    		<input name="reply_time" type="text" id="reply_time" value="<?php echo ((isset($mo["reply_time"]) && ($mo["reply_time"] !== ""))?($mo["reply_time"]):$nowDate); ?>" class="Wdate"  onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})"/>
		    	</td>
		    </tr>
		     <tr>
		    	<td align="right">
		    		是否前台显示:
		    	</td>
		    	<td>
		    		<select name="flag">
		    			<option value="否" <?php if(($mo["flag"]) == "否"): ?>selected<?php endif; ?>>否</option>
		    			<option value="是" <?php if(($mo["flag"]) == "是"): ?>selected<?php endif; ?>>是</option>
		    		</select>
		    	</td>
		    </tr>
		    
		   </table> 
		</form>
		</div>
		
</div>
</body>
</html>