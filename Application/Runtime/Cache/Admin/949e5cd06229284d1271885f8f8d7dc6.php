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
<script type="text/javascript" src="/grid_zz/Public/js/sysGeneral.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/systemUtils.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/ajaxfileupload.js"></script>
 <script type="text/javascript" src="/grid_zz/Public/js/prototype.js"></script>
<script type="text/javascript">

</script>
</head>
<body style="overflow: auto;">
<div id="div_right">
	<div class="right_top">
					<span>直播记录</span>
				</div>
				<div class="title">
					<a href="javascript:history.back();" class="btn btn-default"  >返回</a>
				</div>
				
		<div class="develop">
		
		   <table width="100%" border="0" class="mtable" >
		   
		   <tr>
		   	<td align="right" width="20%">直播间</td>
		   	<td style="height: 450px">
		   		
		   		
		   			<div id="content" style="height: 450px;overflow: auto">
                       
                       <?php if(is_array($spzzList)): foreach($spzzList as $key=>$vo): ?><div class="spzzitems">
									<h2><?php echo ($vo["title"]); ?></h2>
									<p><?php echo ($vo["word"]); ?></p>
									<span class="fr"><?php echo ($vo["intime"]); ?></span>
								</div><?php endforeach; endif; ?>
                       
                    </div>
		   		
		   	</td>
		   </tr>
		    <!-- <tr>
		    	<td align="right" width="20%">发送内容</td>
		    	<td width="80%" >
		    		<input size="80" type="text" id="word" name="word" value="<?php echo ($keyword["name"]); ?>" onkeydown="if(event.keyCode==13)sendData();" />
		    		<input type="button" value="发送" onclick="sendData()" />
		    	</td>
		     </tr> -->
		    
		   </table> 
	
	     </div>
		
</div>
</body>
</html>