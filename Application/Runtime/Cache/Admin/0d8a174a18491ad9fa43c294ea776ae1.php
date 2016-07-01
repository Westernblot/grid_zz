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
    // $('#form1').attr('action','/grid_zz/index.php/Admin/Famous/upload');
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
					<span><?php echo ($type); ?></span>
				</div>
				<div class="title">
					<a href="javascript:sub()"  class="btn btn-green">保存</a> 
					<a href="javascript:history.back();" class="btn btn-default"  >返回</a>
				</div>
				
		<div class="develop">
		<form action="<?php echo ($famous==null?'/grid_zz/index.php/Admin/Famous/insert':'/grid_zz/index.php/Admin/Famous/update'); ?>"  id="form1" method="post">
		   
		   <input type="hidden" name="id" value="<?php echo ($famous["id"]); ?>" />
		   <input type="hidden" name="type" value="<?php echo ($type); ?>" />
		   
		   <table width="100%" border="0" class="mtable" >
		    <tr>
		    	<td align="right">封面</td>
		    	<td colspan="3">
		    		<div>
		    		<input type="file" id="file1" name="file1" onchange="doImg(this)" />
		    		<img id="imgId" alt="" src="<?php echo ($famous["imgurl"]); ?>" style="width: 160px;height: 90px" >
		    		 <a href="javascript:#" id="del" onclick="delDiv(this)"><img src="/grid_zz/Public/images/remove.png" /></a>
		    		<br><input type="hidden" size="80" id="imgurl" name="imgurl" value="<?php echo ($famous["imgurl"]); ?>" />
		            </div>
		    	</td>
		    </tr>
		    <tr>
		    	<td align="right" width="20%">姓名</td>
		    	<td width="30%"><input type="text" id="name" name="name" value="<?php echo ($famous["name"]); ?>" /></td>
		    	<td align="right" width="20%">出生日期</td>
		    	<td width="30%"><input type="text" id="birthday" name="birthday" value="<?php echo ($famous["birthday"]); ?>" class="Wdate"  onclick="WdatePicker()" /></td>
		    </tr>
		    
		    <tr>
		    	<td align="right">国籍</td>
		    	<td ><input type="text"  id="nationality" name="nationality" value="<?php echo ($famous["nationality"]); ?>" /></td>
		    	<td align="right">职位</td>
		    	<td ><input type="text"  id="position" name="position" value="<?php echo ($famous["position"]); ?>" /></td>
		    </tr>
		    
		    <tr>
		    	<td align="right">学历</td>
		    	<td ><input type="text"  id="education" name="education" value="<?php echo ($famous["education"]); ?>" /></td>
		    	<td align="right">毕业院校</td>
		    	<td ><input type="text"  id="school" name="school" value="<?php echo ($famous["school"]); ?>" /></td>
		    </tr>
		  
		    <tr>
		    	<td align="right">个人简介</td>
		    	<td colspan="3">
		    		<textarea id="introduce" name="introduce" cols="30" rows="3"><?php echo ($famous["introduce"]); ?></textarea>
		    	</td>
		    </tr>
		  
		    
		   </table> 
		</form>
		</div>
		
</div>
</body>
</html>