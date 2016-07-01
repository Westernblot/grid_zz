<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>..</title>
<link href="/grid_zz/Public/css/default.css" rel="stylesheet" type="text/css" />
<link href="/grid_zz/Public/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/grid_zz/Public/js/goaler.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/jquery.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/sysGeneral.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/systemUtils.js"></script>
</head>
<script type="text/javascript">
$(function(){
	
});

//删除
function doDelete(){
	var ids = getId('delete'); 
	if(ids==false){
		return;
	}
	//alert(ids);
	location.href='/grid_zz/index.php/Admin/Link/delete?ids='+ids;
}


//条件查询
function doSearch(){
	$('#formQuery').submit();
}


</script>
<body>
<div id="div_right">
	<div class="right_top">
					<span><?php echo ($type); ?></span>
				</div>
				<div class="title">
					<a href="/grid_zz/index.php/Admin/Link/linkUI?type=<?php echo ($type); ?>"  class="btn btn-green">新增</a> 				
					<a href="javascript:doDelete()" class="btn btn-red">删除</a> 				
				</div>
				<!-- 
				style="height:400px;overflow:auto;"
				 -->
		<div class="develop"  >
					<table width="100%" border="0" class="mtable">
						<tr>
							<th class="thcheckbox" width="3%" ><input type="checkbox"
								name="checkbox" id="checkbox" onclick="checkAll(this);" ></th>
				 <?php if(!in_array(($type), explode(',',"友情链接,行销支持"))): ?><th width="25%" >图像</th><?php endif; ?>
							<th width="20%" >名称标识</th>
					<?php if(!in_array(($type), explode(',',"中证金牛V计划"))): ?><th width="45%" >链接地址</th><?php endif; ?>
							<th width="15%" >操作</th>
						</tr>
					<tbody id="goaler">
						<?php if(empty($linkList)): ?><tr>
							<td colspan="5" align="center"><font color="red">暂无记录</font></td>
						</tr><?php endif; ?>
						
						<?php if(is_array($linkList)): foreach($linkList as $key=>$vo): ?><tr id="<?php echo ($vo["id"]); ?>">
						         <td class="thcheckbox"><input type="checkbox" name="chk" id="chk" onclick="selTr(this);" ></td>
				 <?php if(!in_array(($type), explode(',',"友情链接,行销支持"))): ?><td><img src="<?php echo ($vo["imgurl"]); ?>" style="width: 160px;height: 90px" /></td><?php endif; ?>
						         <td><?php echo ($vo["name"]); ?></td>
				<?php if(!in_array(($type), explode(',',"中证金牛V计划"))): ?><td><?php echo ($vo["action"]); ?></td><?php endif; ?>					 					         			 					         
						         <td>
						         	<a href="/grid_zz/index.php/Admin/Link/linkUI?id=<?php echo ($vo["id"]); ?>&type=<?php echo ($type); ?>">编辑</a>&nbsp;					         	
						         </td>						 					         
						      </tr><?php endforeach; endif; ?>
						
					</tbody>
					</table>
		</div>
				<?php echo ($page); ?>
</div>
</body>
</html>