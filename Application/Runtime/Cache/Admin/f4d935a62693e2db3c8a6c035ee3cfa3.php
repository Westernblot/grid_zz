<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>设置查看权限</title>
		<link href="/grid_zz/Public/css/default.css" rel="stylesheet" type="text/css" />
		<link href="/grid_zz/Public/css/style.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="/grid_zz/Public/js/goaler.js"></script>
		<script type="text/javascript" src="/grid_zz/Public/js/jquery.js"></script>
		<script type="text/javascript" src="/grid_zz/Public/js/sysGeneral.js"></script>
		<script type="text/javascript" src="/grid_zz/Public/js/systemUtils.js"></script>

	</head>
	<script type="text/javascript">
		
		//全选-反选
		function chkAll(checkedValue){
			  $("input[type=checkbox]").attr("checked", checkedValue);
		}
		
		//保存
		function save() {
			$('#form1').submit();
		}

	</script>
	<body>
		<div id="div_right">
			<div class="right_top">
				<span>设置查看权限</span>
			</div>
			<div class="title">
				<a href="javascript:save()"  class="btn btn-green">保存</a>

				<a href="javascript:history.back();" class="btn btn-default" >返回</a>

			</div>

			<div class="tree" align="center" >

				<form action="/grid_zz/index.php/Admin/Account/setPower" id="form1" method="post">
					<input type="hidden" name="id" value="<?php echo ($account["id"]); ?>">
					<input type="hidden" name="power[]" value="0">
					<table width="60%" border="0" class="mtable" >
						<caption>
							<h4>正在为  <?php echo ($account["account"]); ?> 设置权限</h4>
						</caption>
					<tr>
							<td align="left">
								<input type="checkbox" id="chk" onclick="chkAll(this.checked)" /><label for="chk">全选</label>
							</td>
					</tr>
                     <tr>
                     	<td align="left">
                     		&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="chk1" name="power[]" value="1" <?php if(in_array("1", explode(',',$account['power']))): ?>checked<?php endif; ?>  /><label for="chk1">中证投资内参</label>
                     		<br>
                     		&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="chk2" name="power[]" value="2" <?php if(in_array("2", explode(',',$account['power']))): ?>checked<?php endif; ?>  /><label for="chk2">中证实盘追踪</label>
                     		<br>
                     		&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="chk3" name="power[]" value="3" <?php if(in_array("3", explode(',',$account['power']))): ?>checked<?php endif; ?> /><label for="chk3">中证独家调研</label>
                     		<br>
                     		&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="chk4" name="power[]" value="4" <?php if(in_array("4", explode(',',$account['power']))): ?>checked<?php endif; ?> /><label for="chk4">中证寻牛专案</label>
                     	</td>
                     </tr>
					</table>
				</form>

			</div>

		</div>
	</body>
</html>