<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>中证财讯通-互动交流</title>
		<link rel="stylesheet" href="/grid_zz/Public/cxtcss/style.css" type="text/css" />
		<script src="/grid_zz/Public/validate/jquery.js"></script>
		<script src="/grid_zz/Public/validate/jquery.validate.min.js"></script>
		<script src="/grid_zz/Public/validate/localization/messages_zh.js"></script>
	</head>

	<style type="text/css">
		.error {
			color: red;
		}
	</style>

	<script type="text/javascript">
		$().ready(function() {
			$("#form1").validate();
		});

	    //刷新验证码
	function freshVerify(){
		$('#verifyImg').attr('src','/grid_zz/index.php/Client/Index/verify?time='+Math.random());  
	}
	</script>

	<body>
		<div id="container">

			<div class="message-info">
				
				<?php if(empty($list)): ?><font color="red">查无数据</font><?php endif; ?>
				
				<?php if(is_array($list)): foreach($list as $key=>$vo): ?><dl class="message">
					<dt><img src="/grid_zz/Public/images/user.png" />
					</dt>
					<dd>
						<h3 class="ly-title"><?php echo ($vo["title"]); ?> <span><?php echo ($vo["add_time"]); ?></span></h3>
						<p>
							<?php echo ($vo["content"]); ?>
						</p>
					</dd>
				</dl>
				<dl class="m-reply">
					<dt><img src="/grid_zz/Public/images/spzz.jpg" />
					</dt>
					<dd>
						<div class="ly-title">
							<B>回复</B><span><?php echo ($vo["reply_time"]); ?></span>
						</div>
						<p>
							<?php echo ($vo["reply"]); ?>
						</p>
					</dd>
				</dl><?php endforeach; endif; ?>
				

				<div class='Page'>
					<?php echo ($page); ?>
				</div>
			</div>

			<div class="box_release">
				<form action="/grid_zz/index.php/Client/Index/saveInteraction" method="post" id="form1">
					
					<table>
						<tr>
							<td class="TDleft">信件标题：</td>
							<td colspan="3">
							<input type="text" name="title" id="title" style=" width:740px;"  datatype="LimitB"  msg="标题字数须在1-100个汉字之间" required="required" />
							</td>
						</tr>
						<tr>
							<td class="TDleft">正    文：</td>
							<td><textarea name="content" id="content" style=" width:760px;" rows="8" datatype="Require" msg="内容须填写" required="required"></textarea></td>
						</tr>
						<tr>
							<td class="TDleft"> 验 证 码：</td>
							<td>
							<input name="validateCode" type="text" id="validateCode" datatype="LimitB"  msg="验证码须4个字符" size="16" required="required" />
							<img style='cursor: pointer; vertical-align:middle' title='刷新验证码' src='/grid_zz/index.php/Client/Index/verify' id='verifyImg' onClick='freshVerify()' /></td>
						</tr>
						<tr>
							<td align="center" colspan="4" style="padding-top:20px;">
							<input type="submit" id="submit" value="提交信息"  class="button" />
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>