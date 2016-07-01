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

//===========================图片上传===================================
function doImg(obj){
	
	 $.ajaxFileUpload
     (
         {
             url: '/grid_zz/index.php/Home/File/mangeUpload', //用于文件上传的服务器端请求地址
             type: 'post',
             data: { fileId: 'file1', name: 'lunis' }, //此参数非常严谨，写错一个引号都不行
             secureuri: false, //一般设置为false
             fileElementId: 'file1', //文件上传空间的id属性  <input type="file" id="file1" name="file1" />
             dataType: 'text', //返回值类型 一般设置为json
             success: function (data, status)  //服务器成功响应处理函数
             {
                var name=data.name;
                var url=data.url;
                
            	$('#imgId').attr('src',url);
	            $('#img').attr('value',name);
	            $('#imgurl').attr('value',url);
             },
             error: function (data, status, e)//服务器响应失败处理函数
             {
                 alert(e);
             }
         }
     );
    // $('#form1').attr('action','/grid_zz/index.php/Admin/Wonder/upload');
    // $('#form1').submit();
}

//删除附件
function delDiv(obj){
	$(obj).parent().find('#imgId').attr('src','');
	$(obj).parent().find('#img').attr('value','');
	$(obj).parent().find('#imgurl').attr('value','');
}

//保存数据
function sub(){
	
	$('#form1').submit();
}

</script>
</head>
<body style="overflow: auto;">
<div id="div_right">
	<div class="right_top">
					<span>精彩回顾</span>
				</div>
				<div class="title">
					<a href="javascript:sub()"  class="btn btn-green">保存</a> 
					<a href="javascript:history.back();" class="btn btn-default"  >返回</a>
				</div>
				
		<div class="develop">
		<form action="<?php echo ($wonder==null?'/grid_zz/index.php/Admin/Wonder/insert':'/grid_zz/index.php/Admin/Wonder/update'); ?>"  id="form1" method="post">
		   
		   <input type="hidden" name="id" value="<?php echo ($wonder["id"]); ?>" />
		 
		   <table width="100%" border="0" class="mtable" >
		    <tr>
		    	<td align="right">股票</td>
		    	<td >
		    	<input type="text" id="stock" name="stock" value="<?php echo ($wonder["stock"]); ?>" />
		    	</td>
		    </tr>
		    <tr>
		    	<td align="right" width="20%">代码</td>
		    	<td width="80%"><input type="text" id="code" name="code" value="<?php echo ($wonder["code"]); ?>" /></td>
		     </tr>
		    <tr>
		    	<td align="right">日期</td>
		    	<td ><input type="text" id="indate" name="indate" value="<?php echo ((isset($wonder["indate"]) && ($wonder["indate"] !== ""))?($wonder["indate"]):$nowdate); ?>" class="Wdate"  onclick="WdatePicker()" /></td>
		    </tr>
		    <tr>
		    	<td align="right">板块内容</td>
		    	<td ><input type="text"  id="content" name="content" value="<?php echo ($wonder["content"]); ?>" /></td>
		    </tr>		    
		    <tr>
		    	<td align="right">涨幅</td>
		    	<td ><input type="text"  id="increase" name="increase" value="<?php echo ($wonder["increase"]); ?>" /></td>
		    </tr>
		    
		   </table> 
		</form>
		</div>
		
</div>
</body>
</html>