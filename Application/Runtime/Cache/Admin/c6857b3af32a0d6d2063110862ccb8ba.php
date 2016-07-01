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

//保存数据
function sub(){
	
	var name=$('#name').val();
	if(name==null || name==''){
		alert('不能添加不存在股票信息！');
	    return;
	}
	
	$('#form1').submit();
}

//查询股票
function doSearch(){
	
	var code=$('#code').val();
	
	var res= PublicAjax('/grid_zz/index.php/Admin/Stock/search',{'code':code});
	if(res.status=='success'){
		
		$('#name').val(res.name);
		$('#kind').val(res.kind);
		$('#kindcode').val(res.kindcode);
		$('#h2').text('查询成功！');
		
	}else{
		$('#name').val('');
		$('#kind').val('');
		$('#kindcode').val('');
		$('#h2').text('查询失败,无此股票代码！');
	}
	
}

</script>
</head>
<body style="overflow: auto;">
<div id="div_right">
	<div class="right_top">
					<span>明星股票</span>
				</div>
				<div class="title">
					<a href="javascript:sub()"  class="btn btn-green">保存</a> 
					<a href="javascript:history.back();" class="btn btn-default"  >返回</a>
				</div>
				
		<div class="develop">
		<form action="<?php echo ($stock==null?'/grid_zz/index.php/Admin/Stock/insert':'/grid_zz/index.php/Admin/Stock/update'); ?>"  id="form1" method="post">
		   
		   <input type="hidden" name="id" value="<?php echo ($stock["id"]); ?>" />		
		  
		   <table width="100%" border="0" class="mtable" >
		   		
		    <tr>
		    	<td align="right" width="30%">股票代码</td>
		    	<td width="70%">
		    	<input type="text" id="code" name="code" value="<?php echo ($stock["code"]); ?>" onkeydown="if(event.keyCode==13)doSearch();" />
		    	<input type="button" value="查 询" onclick="doSearch();" />
		    	<font color="red">请先查询出股票的信息，再进行添加。</font>
		    	</td>
		    </tr>		
		    
		    <tr>
		    <td colspan="4"><font color="red"><h2 id="h2">查询结果</h2></font><hr></td>
		    </tr>
		      
		    <tr>
		    	<td align="right">名称</td>
		    	<td >
		    	<input type="text" id="name" name="name" value="<?php echo ($stock["name"]); ?>" readonly="readonly" />
		    	</td>
		    </tr>		  
		    <tr>
		    	<td align="right">类别</td>
		    	<td >
		    	<input type="text" id="kind" name="kind" value="<?php echo ($stock["kind"]); ?>" readonly="readonly" />
		    	</td>
		    </tr>		  
		    <tr>
		    	<td align="right">全股票代码</td>
		    	<td >
		    	<input type="text" id="kindcode" name="kindcode" value="<?php echo ($stock["kindcode"]); ?>" readonly="readonly" />
		    	</td>
		    </tr>		  
		   
		  
		   </table> 
		</form>
		</div>
		
</div>
</body>
</html>