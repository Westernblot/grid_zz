<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>会员管理</title>
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
	if(confirm("确定删除吗？")){
	    location.href='/grid_zz/index.php/Admin/Account/delete?ids='+ids;
	}
}


//条件查询
function doSearch(){
	$('#formQuery').submit();
}


</script>
<body>
<div id="div_right">
	<div class="right_top">
					<span>会员管理</span>
				</div>
				<div class="title">									
					<a href="javascript:doDelete()" class="btn btn-red">删除</a> 					
					<div style="float: right">
						<form action="/grid_zz/index.php/Admin/Account/accountMain" id="formQuery" method="get">							
						手机号：<input type="text" name="phone" value="<?php echo ($phone); ?>" />
						<a href="javascript:doSearch()" class="btn btn-bule">查询</a> 
						</form>
					</div>
				</div>
				<!-- 
				style="height:400px;overflow:auto;"
				 -->
		<div class="develop"  >
					<table width="100%" border="0" class="mtable">
						<tr>
							<th class="thcheckbox" width="3%" ><input type="checkbox"
								name="checkbox" id="checkbox" onclick="checkAll(this);" ></th>
							<th width="25%" >会员账户</th>
							<th width="30%" >手机</th>
							<th width="15%" >邮箱</th>
							<th width="15%" >注册时间</th>
							<th width="45%" >操作</th>
						</tr>
					<tbody id="goaler">
						<?php if(is_array($accountList)): foreach($accountList as $key=>$vo): ?><tr id="<?php echo ($vo["id"]); ?>">
						         <td class="thcheckbox"><input type="checkbox" name="chk" id="chk" onclick="selTr(this);" ></td>
						         <td><?php echo ($vo["account"]); ?></td>
						         <td><?php echo ($vo["phone"]); ?></td>
						         <td><?php echo ($vo["mail"]); ?></td>						 					         
						         <td><?php echo ($vo["intime"]); ?></td>						 					         
						         <td>						     
						         	<a href="/grid_zz/index.php/Admin/Account/powerUI?id=<?php echo ($vo["id"]); ?>">设置权限</a>&nbsp;
						         	
						         </td>						 					         
						      </tr><?php endforeach; endif; ?>
						
					</tbody>
					</table>
		</div>
				<?php echo ($page); ?>
</div>
</body>
</html>