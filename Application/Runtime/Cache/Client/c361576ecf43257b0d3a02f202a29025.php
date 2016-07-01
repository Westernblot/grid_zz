<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>中证财讯通</title>
		<link rel="stylesheet" href="/grid_zz/Public/cxtcss/style.css" type="text/css" />
		<!-- <script type="text/javascript" src="/grid_zz/Public/js/sysGeneral.js"></script> -->
		<!-- <script type="text/javascript" src="/grid_zz/Public/js/systemUtils.js"></script>
		<script type="text/javascript" src="/grid_zz/Public/js/ajaxfileupload.js"></script> -->
		<script type="text/javascript" src="/grid_zz/Public/js/jquery.js"></script>
		<!-- <script type="text/javascript" src="/grid_zz/Public/js/prototype.js"></script> -->
	</head>

	<body>

		<div id="container">
			<div class="sub-banner">
				<a href="#"><img src="/grid_zz/Public/images/1.jpg" width="950" height="100" /></a>
			</div>
			<div class="content">
				<div class="content-list" style="width:701px; padding:0;">
					
					
<div class="spzzitems" id="div_spzzitems">
	
	<?php if(is_array($spzzList)): foreach($spzzList as $key=>$vo): ?><dl>
          <dt><img src="/grid_zz/Public/images/spzz.jpg"/> </dt>
          <dd>
            <h3><?php echo ($vo["title"]); ?></h3>
            <p><?php echo ($vo["word"]); ?></p>
            <span class="fr"><?php echo ($vo["intime"]); ?></span>
          </dd>
        </dl><?php endforeach; endif; ?>
</div>

   <!-- <a href="show.html">
      <dl>
          <dt><img src="/grid_zz/Public/images/spzz.jpg"/> </dt>
          <dd>
            <h3>iPhone 6s合约价199美元起</h3>
            <p>iPhone 6s与iPhone 6s Plus的售价与上代iPhone发布时的价格一致，合约价最低199元起。两款iPhone基础版本均为16GB版，同时提供64GB版本和128GB版本。三款iPhone 6s两年合约价分别为199美元、299美元、399美元。iPhone 6s Plus三款对应两年合约价分别为299美元、399美元和499美元。</p>
            <span class="fr">2015-09-30 15:10</span>
          </dd>
        </dl>
     </a> -->
					
					
				</div>
				<div class="content-right w233">

					<div class="title">
						<h4>中证介绍</h4>
					</div>
					<div class="side-about">
						<p><?php echo ($document["content"]); ?></p>
					</div>

					<div class="title">
						<h4><a href="/grid_zz/index.php/Client/Index/fxs">中证分析师</a></h4>
					</div>
					<div class="experts">

						<?php if(is_array($expertsList)): foreach($expertsList as $key=>$vo): ?><div class="index-experts">
								<div class="e-01">
									<div class="e-object">
										<img src="<?php echo ($vo["imgurl"]); ?>" />
									</div>
									<div class="e-name">
										<?php echo ($vo["name"]); ?>
									</div>
									<div class="e-lable">
										<?php echo ($vo["introduce"]); ?><a href="/grid_zz/index.php/Client/Index/experts_introduce?id=<?php echo ($vo["id"]); ?>">[详细]</a>
									</div>
									<div class="e-star">
										星级：<span><?php echo ($vo["star"]); ?></span>
									</div>
								</div>
							</div><?php endforeach; endif; ?>

					</div>

				</div>
			</div>
		</div>

		<script src="https://cdn.wilddog.com/js/client/current/wilddog.js"></script>
		<script type="text/javascript">
			// var ref = new Wilddog("https://broadcast.wilddogio.com/msg");
// 
			// $(function() {
				// ref.remove();
			// });
			// //实时监控
			// ref.on('child_added', function(snapshot) {				
				// var data = snapshot.val();
				// var arr = data.split("<{}>");
				// var title = arr[0];
				// var word = arr[1];
				// var intime = "<?php echo date('Y-m-d H:i:s');?>"; 
// 				
// var html='<dl>'
          // +'<dt><img src="/grid_zz/Public/images/spzz.jpg"/> </dt>'
          // +'<dd>'
          // +'  <h3>'+title+'</h3>'
          // + ' <p>'+word+'</p>'
          // +  '<span class="fr">'+intime+'</span>'
         // + '</dd>'
        // +'</dl>';
// 				            
                // $("#div_spzzitems").prepend(html); 
//                 
			// });

		</script>


	</body>
</html>