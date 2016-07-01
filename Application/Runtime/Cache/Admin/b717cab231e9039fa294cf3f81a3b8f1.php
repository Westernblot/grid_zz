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
		<!-- <script type="text/javascript" src="/grid_zz/Public/js/prototype.js"></script> -->
		<script src="https://cdn.wilddog.com/js/client/current/wilddog.js"></script>

<script type="text/javascript">
	
	var kindEditor;
$(document).ready(function(){
	
	kindEditor = KindEditor.create('#word', {
		themeType : 'simple',
		allowPreviewEmoticons : false,
		allowFileManager : false,
		allowImageUpload : true,
		uploadJson : '/grid_zz/index.php/Home/File/appMangeUpload',
		urlType: 'domain',
		items : [
			'source', 'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
			'removeformat', 'strikethrough', 'lineheight', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
			'insertunorderedlist', '|', 'emoticons', 'image', 'table', 'hr', 'link', '|', 'wordpaste', 'quickformat', 'fullscreen']
	});
	
});
	
</script>

	</head>
	<body style="overflow: auto;">
		<div id="div_right">
			<div class="right_top">
				<span>直播</span>
			</div>
			<div class="title">
				<a href="javascript:history.back();" class="btn btn-default"  >返回</a>
			</div>

			<div class="develop">

				<table width="100%" border="0" class="mtable" >

					<tr>
						<td align="right" width="20%">直播间</td>
						<td >
						<div id="content" style="height: 250px;overflow: auto">

							<?php if(is_array($spzzList)): foreach($spzzList as $key=>$vo): ?><div class="spzzitems">
									<h2><?php echo ($vo["title"]); ?></h2>
									<p><?php echo ($vo["word"]); ?></p>
									<span class="fr"><?php echo ($vo["intime"]); ?></span>
								</div><?php endforeach; endif; ?>

						</div></td>
					</tr>
					
					<tr>
					  <td align="right">标题</td>
					  <td>
					  	<input type="text" size="80" id="title" name="title" value="">
					  </td>
					</tr>
					
					<tr>
						<td align="right" width="20%">发送内容</td>
						<td width="80%" >
						<!-- <input size="80" type="text" id="word" name="word" value="<?php echo ($keyword["name"]); ?>" onkeydown="if(event.keyCode==13)sendData();" /> -->
						
						
						<textarea id="word" name="word" style="width: 100%; height:200px;visibility: hidden;"></textarea>
						
						<input type="button" value="发送" onclick="sendData()" />
						</td>
					</tr>

				</table>

			</div>

		</div>

		<script type="text/javascript">
		
		var ref = new Wilddog("https://broadcast.wilddogio.com/msg");
		
			// var Comet = Class.create();
			// Comet.prototype = {
// 
				// timestamp : 0,
				// url : '/grid_zz/Public/online/backend.php',
				// noerror : true,
// 
				// initialize : function() {
// 
				// },
// 
				// connect : function() {
					// this.ajax = new Ajax.Request(this.url, {
						// method : 'get',
						// parameters : {
							// 'timestamp' : this.timestamp
						// },
						// onSuccess : function(transport) {
							// // handle the server response
							// var response = transport.responseText.evalJSON();
							// this.comet.timestamp = response['timestamp'];
							// this.comet.handleResponse(response);
							// this.comet.noerror = true;
						// },
						// onComplete : function(transport) {
							// // send a new ajax request when this request is finished
							// if (!this.comet.noerror)
								// // if a connection problem occurs, try to reconnect each 5 seconds
								// setTimeout(function() {
									// comet.connect()
								// }, 5000);
							// else
								// this.comet.connect();
							// this.comet.noerror = false;
						// }
					// });
					// this.ajax.comet = this;
				// },
// 
				// disconnect : function() {
// 
				// },
// 
				// handleResponse : function(response) {
					// // $('content').innerHTML += '<div>' + response['msg'] + '</div>';
					// var word = response['msg'];
					// var intime = "<?php echo date('Y-m-d H:i:s');?>";
// 
					// var html = $('content').innerHTML;
// 
					// $('content').innerHTML = ' <div>' + '解盘人：' + word + '<div style="float: right">' + intime + '</div>' + '</div>' + html;
// 
					// //var div = document.getElementById('content');
					// //div.scrollTop = div.scrollHeight;
// 
				// },
// 
				// doRequest : function(request) {
					// new Ajax.Request(this.url, {
						// method : 'get',
						// parameters : {
							// 'msg' : request
						// }
					// });
				// }
			// }
			// var comet = new Comet();
			// comet.connect();

			//var div = document.getElementById('content');
			//div.scrollTop = div.scrollHeight;

			//===========================保存数据直播数据=================================
			function sendData() {
                kindEditor.sync();
				var id = "<?php echo ($id); ?>";
				var title = $('#title').val();
				var word = $('#word').val();
				if(title=='' || word==''){
					alert('标题和发送内容不得为空！');
					return;
				}
				
				//写入数据库
				PublicAjax('/grid_zz/index.php/Admin/Spzz/sendData', {
					'title':title,
					'word' : word,
					'pid' : id
				});
				
				//使用widdog推送
				ref.push(title+"<{}>"+word);

				//广播数据
				//comet.doRequest(word);
				var intime = "<?php echo date('Y-m-d H:i:s');?>";   
				var show_html= '<div class="spzzitems">'
									+'<h2>'+title+'</h2>'
									+'<p>'+word+'</p>'
									+'<span class="fr">' + intime + '</span>'
								+'</div>';
               // $("#content").prepend(show_html); 
                $('#title').attr('value','');
                kindEditor.html("");

			}

		</script>

	</body>
</html>