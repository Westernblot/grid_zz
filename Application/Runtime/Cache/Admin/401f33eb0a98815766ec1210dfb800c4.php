<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>开户预约</title>
<link href="/grid_zz/Public/css/default.css" rel="stylesheet" type="text/css" />
<link href="/grid_zz/Public/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/grid_zz/Public/js/goaler.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/jquery.js"></script>
 <script type="text/javascript" src="/grid_zz/Public/js/DatePicker/WdatePicker.js"></script>
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
	location.href='/grid_zz/index.php/Admin/Order/delete?ids='+ids;
}


//条件查询
function doSearch(){
	$('#formQuery').attr('action','/grid_zz/index.php/Admin/Order/orderMain');
	$('#formQuery').submit();
}


//条件查询结果导出
function doSearchExport(){
	
	$('#formQuery').attr('action','/grid_zz/index.php/Admin/order/orderExport');
	$('#formQuery').submit();
}


</script>
<body>
<div id="div_right">
	<div class="right_top">
					<span>开户预约</span>
				</div>
				<div class="title">
							
					<a href="javascript:doDelete()" class="btn btn-red">删除</a> 
					
					<div style="float: right">
						<form action="/grid_zz/index.php/Admin/Order/orderMain" id="formQuery" method="get">							
		时间：
            <input type="text" id="sdate" name="sdate"  class="Wdate" value="<?php echo ($sdate); ?>"  onclick="WdatePicker()" ><font color="red">*</font>
                                 至
            <input type="text" id="edate" name="edate"  class="Wdate" value="<?php echo ($edate); ?>"  onclick="WdatePicker()" ><font color="red">*</font>
           
						手机号：<input type="text" name="phone" value="<?php echo ($phone); ?>" />
						<a href="javascript:doSearch()" class="btn btn-bule">查询</a> 
						<a href="javascript:doSearchExport()" class="btn btn-green">导出</a> 
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
							<th width="25%" >姓名</th>
							<th width="30%" >身份证号</th>
							<th width="45%" >手机号</th>							
							<th width="45%" >时间</th>							
						</tr>
					<tbody id="goaler">
						
						<?php if(empty($orderList)): ?><tr>
							<td colspan="5" align="center"><font color="red">暂无记录</font></td>
						</tr><?php endif; ?>
						
						<?php if(is_array($orderList)): foreach($orderList as $key=>$vo): ?><tr id="<?php echo ($vo["id"]); ?>">
						       <td class="thcheckbox"><input type="checkbox" name="chk" id="chk" onclick="selTr(this);" ></td>						        
						         <td><?php echo ($vo["name"]); ?></td>
						         <td><?php echo ($vo["idcard"]); ?></td>
						         <td><?php echo ($vo["phone"]); ?></td>						 					         					     				 					         
						         <td><?php echo ($vo["intime"]); ?></td>						 					         					     				 					         
						      </tr><?php endforeach; endif; ?>
						
					</tbody>
					</table>
		</div>
				<?php echo ($page); ?>
</div>
</body>
</html>