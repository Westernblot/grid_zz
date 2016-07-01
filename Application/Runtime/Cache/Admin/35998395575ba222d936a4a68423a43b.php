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
	location.href='/grid_zz/index.php/Admin/Wonder/delete?ids='+ids;
}


//条件查询
function doSearch(){
	$('#formQuery').submit();
}


</script>
<body>
<div id="div_right">
	<div class="right_top">
					<span>精彩回顾</span>
				</div>
				<div class="title">
					<a href="/grid_zz/index.php/Admin/Wonder/wonderUI"  class="btn btn-green">新增</a> 				
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
							<th width="45%" >股票</th>
							<th width="10%" >代码</th>
							<th width="15%" >日期</th>
							<th width="15%" >板块内容</th>
							<th width="15%" >涨幅</th>
							<th width="15%" >操作</th>
						</tr>
					<tbody id="goaler">
						<?php if(empty($wonderList)): ?><tr>
							<td colspan="5" align="center"><font color="red">暂无记录</font></td>
						</tr><?php endif; ?>
						
						<?php if(is_array($wonderList)): foreach($wonderList as $key=>$vo): ?><tr id="<?php echo ($vo["id"]); ?>">
						         <td class="thcheckbox"><input type="checkbox" name="chk" id="chk" onclick="selTr(this);" ></td>
						         <td><?php echo ($vo["stock"]); ?></td>
						         <td><?php echo ($vo["code"]); ?></td>
						         <td><?php echo ($vo["indate"]); ?></td>						 					         			 					         
						         <td><?php echo ($vo["content"]); ?></td>						 					         			 					         
						         <td><?php echo ($vo["increase"]); ?></td>						 					         			 					         
						         <td>
						         	<a href="/grid_zz/index.php/Admin/Wonder/wonderUI?id=<?php echo ($vo["id"]); ?>">编辑</a>&nbsp;					         	
						         </td>						 					         
						      </tr><?php endforeach; endif; ?>
						
					</tbody>
					</table>
		</div>
				<?php echo ($page); ?>
</div>
</body>
</html>