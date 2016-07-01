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

var kindEditor;
$(document).ready(function(){
	
	kindEditor = KindEditor.create('#content', {
		themeType : 'simple',
		allowPreviewEmoticons : false,
		allowFileManager : false,
		allowImageUpload : true,
		uploadJson : '/grid_zz/index.php/Home/File/mangeUpload',
		urlType: 'absolute',
		items : [
			'source', 'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
			'removeformat', 'strikethrough', 'lineheight', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
			'insertunorderedlist', '|', 'emoticons', 'image', 'table', 'hr', 'link', '|', 'wordpaste', 'quickformat', 'fullscreen']
	});
	
});

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
    // $('#form1').attr('action','/grid_zz/index.php/Admin/News/upload');
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
	kindEditor.sync();
	$('#form1').submit();
}



//===================================附件上传===========================================

function doUpload(){
	 $.ajaxFileUpload
     (
         {
             url: '/grid_zz/index.php/Home/File/upload', //用于文件上传的服务器端请求地址
             type: 'post',
             data: { fileId: 'file_attachment', name: 'lunis' }, //此参数非常严谨，写错一个引号都不行
             secureuri: false, //一般设置为false
             fileElementId: 'file_attachment', //文件上传空间的id属性  <input type="file" id="file1" name="file1" />
             dataType: 'text', //返回值类型 一般设置为json
             success: function (data, status)  //服务器成功响应处理函数
             {
                var name=data.name;
                var url=data.url;
                var href = '/grid_zz/index.php/Home/File/download?file_name='+name+'&file_path=<?php echo C("LOCAL_UPLOAD");?>'+url;
                
                
               // alert(name+";"+url);
                
                var div = $('#div_attachment');
				var html = '<div>'
						    +'<input type="hidden" name="attachment[]" value="'+name+'">'
							+'<input type="hidden" name="attachmenturl[]" value="'+url+'">'
							+'<a href="'+href+'">'+name+'</a><a onclick="removeParent(this)"><img src="/grid_zz/Public/images/remove.png"></a>'
							+'</div>';
				div.append(html);
             },
             error: function (data, status, e)//服务器响应失败处理函数
             {
                 alert(e);
             }
         }
     );
}

         /**
          *移除父对象 
          */
         function removeParent(obj){
         	$(obj).parent().remove();
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
		<form action="<?php echo ($news==null?'/grid_zz/index.php/Admin/News/insert':'/grid_zz/index.php/Admin/News/update'); ?>"  id="form1" method="post">
		   
		   <input type="hidden" name="id" value="<?php echo ($news["id"]); ?>" />
		   <input type="hidden" name="type" value="<?php echo ($type); ?>" />
		   
		   <table width="100%" border="0" class="mtable" >
		   	
		   	<!--  名家-团队类别时显示  -->	
		   	<?php if(in_array(($type), explode(',',"专家,实盘跟踪"))): ?><tr>
		   		<td align="right"><?php echo ($type); ?></td>
		   		<td colspan="3">
		   			<select id="experts_id" name="experts_id">
		   				<?php if(is_array($expertsList)): foreach($expertsList as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>" <?php if(($news["experts_id"]) == $vo["id"]): ?>selected<?php endif; ?> ><?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
		   			</select>
		   		</td>
		   	</tr><?php endif; ?>
		   		
		   	<!--  非名家-团队类别时显示  -->	
		   	<?php if(!in_array(($type), explode(',',"专家,实盘跟踪"))): ?><tr>
		    	<td align="right">封面</td>
		    	<td colspan="3">
		    		<div>
		    		<input type="file" id="file1" name="file1" onchange="doImg(this)" />
		    		<img id="imgId" alt="" src="<?php echo ($news["imgurl"]); ?>" style="width: 160px;height: 90px" >
		    		 <a href="javascript:#" id="del" onclick="delDiv(this)"><img src="/grid_zz/Public/images/remove.png" /></a>
		    		<br><input type="hidden" size="80" id="imgurl" name="imgurl" value="<?php echo ($news["imgurl"]); ?>" />
		            </div>
		    	</td>
		    </tr>
		    <tr>
		    	<td align="right">主题</td>
		    	<td colspan="3"><input type="text" size="80" id="subject" name="subject" value="<?php echo ($news["subject"]); ?>" /></td>
		    </tr>
		    <tr>
		    	<td align="right">描述</td>
		    	<td colspan="3">
                    <textarea id="description" name="description"><?php echo ($news["description"]); ?></textarea>
                </td>
		    </tr><?php endif; ?>
		    
		  
		    <tr>
		    	<td align="right" width="20%">来源</td>
		    	<td width="80%" colspan="3">
		    		<input type="text" id="source" name="source" value="<?php echo ((isset($news["source"]) && ($news["source"] !== ""))?($news["source"]):'中证财讯'); ?>" />
		    		<input type="hidden" id="intime" name="intime" value="<?php echo ((isset($news["intime"]) && ($news["intime"] !== ""))?($news["intime"]):$nowtime); ?>" />
		    	</td>
		    	<!-- <td align="right" width="20%">时间</td>
		    	<td width="30%"><input type="text" id="indate" name="intime" value="<?php echo ((isset($news["intime"]) && ($news["intime"] !== ""))?($news["intime"]):$nowtime); ?>" class="Wdate"  onclick="WdatePicker()" /></td>
		    	 -->
		    	 <!-- <td width="30%"><input type="text" id="indate" name="intime" value="<?php echo ((isset($news["intime"]) && ($news["intime"] !== ""))?($news["intime"]):$nowtime); ?>" class="Wdate"  onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" /></td> -->
		    </tr>
		    
		    
		    <?php if(!in_array(($type), explode(',',"中证投资内参,中证投资锦囊,中证独家调研"))): ?><tr>
		    	<td align="right">标题</td>
		    	<td colspan="3">
		    		<input type="text" size="80" id="title" name="title" value="<?php echo ($news["title"]); ?>" />
		    	</td>
		    </tr><?php endif; ?>
		    
		   
		   <!-- 中证投资内参添加字段 -->
		   <?php if(in_array(($type), explode(',',"中证投资内参,中证投资锦囊,中证独家调研"))): ?><tr>
		    		<td align="right">评断</td>
		    		<td colspan="3">
		    			<textarea id="pingduan" name="pingduan"><?php echo ($news["pingduan"]); ?></textarea>
		    		</td>
		    	</tr>
		    	<tr>
		    		<td align="right">影响个股</td>
		    		<td colspan="3">
		    			<input type="text" name="gegu" value="<?php echo ($news["gegu"]); ?>">
		    		</td>
		    	</tr><?php endif; ?>
		    
		    
		    <tr>
		    	<td align="right">内容</td>
		    	<td colspan="3">
		    		  <textarea id="content" name="content" style="width: 100%; height:300px;visibility: hidden;"><?php echo ($news["content"]); ?></textarea>
		    	</td>
		    </tr>
		    <tr>
		    	<td align="right">附件</td>
		    	<td colspan="3">
		    		  
		    	
		    		  
<div id="div_attachment">
					
		 <!-- 如果有附件就显示 -->	     
	<?php if(!empty($news["attachmenturl"])): if(is_array($attachmenturlArr)): foreach($attachmenturlArr as $k=>$vo): ?><div>	      
		       <a href="/grid_zz/index.php/Home/File/download?file_name=<?php echo ($attachmentArr[$k]); ?>&file_path=<?php echo C("LOCAL_UPLOAD"); echo ($vo); ?>" ><?php echo ($attachmentArr[$k]); ?></a>
		       <input type="hidden" id="attachment" name="attachment[]" value="<?php echo ($attachmentArr[$k]); ?>"  />
		       <input type="hidden" id="attachmenturl" name="attachmenturl[]" value="<?php echo ($vo); ?>" />
		       <a onclick="removeParent(this)"><img src="/grid_zz/Public/images/remove.png" /></a>
		     </div><?php endforeach; endif; endif; ?>
		    		  
</div>  		  
		    		<input type="file" id="file_attachment" name="file_attachment" onchange="doUpload(this)" />
		    	</td>
		    </tr>
		    
		   </table> 
		</form>
		</div>
		
</div>
</body>
</html>