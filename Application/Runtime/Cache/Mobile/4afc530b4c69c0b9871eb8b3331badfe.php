<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
   <title>中证财讯网</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link href="/grid_zz/Public/mcss/base.css" rel="stylesheet" type="text/css"/>
  	<link href="/grid_zz/Public/mcss/subPage.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<header class="header">    
        <a href="javascript:void(0);" onClick="history.back();return false;" class="return_back">返回</a>
        <h2 class="main_title"><?php echo ($type); ?></h2>
        <a href="/grid_zz/index.php/Mobile/Index/guide.html" class="right_aside"><span class="tab_bar_menu"></span></a>
</header>

<div class="nav_module">
    <ul class="nav_items">
        <li><a href="/grid_zz/index.php/Mobile/Index/about?type=关于我们" 
        	<?php if(($type) == "关于我们"): ?>class="on"<?php endif; ?>
        	>关于我们</a></li>
        <li><a href="/grid_zz/index.php/Mobile/Index/about?type=明星团队"
        	<?php if(($type) == "明星团队"): ?>class="on"<?php endif; ?>
        	>明星团队</a></li>
        <li><a href="/grid_zz/index.php/Mobile/Index/about?type=荣誉资质"
        	<?php if(($type) == "荣誉资质"): ?>class="on"<?php endif; ?>
        	>荣誉资质</a></li>
        <li><a href="/grid_zz/index.php/Mobile/Index/about?type=联系我们"
        	<?php if(($type) == "联系我们"): ?>class="on"<?php endif; ?>
        	>联系我们</a></li>
    </ul>
</div>
    
<section class="art_main_card">
	<!--标题-->
	<section class="art_title">
		<h1 class="art_title_h1"><?php echo ($type); ?></h1>
	</section>
  <!--文章内容-->       
  <?php echo ($document["content"]); ?>            
<!-- <p class="art_t">
<p>一、中证投资资讯有限公司介绍 </p>
<p>深圳市中证投资资讯有限公司是中国证券报社控股子公司。公司具备中国证监会特许证券投资咨询业务资格，主要从事投资资讯研发与服务、金融品牌开发与推广、证券视频节目制作、市值管理等业务活动。公司依托中国证券报的品牌及资源优势，各项主体业务得到中证报各部门和派驻全国各地机构的全力支持。 </p>
<p>二、  深圳和旭通惠网络科技有限公司介绍<br />
</p>
<p>使命：专注于成为中国有影响力的证券资讯提供商,</p>
<p>愿景：成为国内一流的证券资讯类网络运营平台。 </p>
<p>价值观：诚信  规范  合作 分享</p>
<p>优势： </p>
<p>1、中证投资资讯有限公司授权面向全国销售中国证券报社出品的各类资讯产品并提供服务的唯一代理公司。 </p>
<p>2、拥有强大的产品研发能力和媒体推广能力，网络运营管理能力。 </p>
<p>3、拥有强大的业务开发能力和团队管理能力。 </p>
<p>4、拥有强大的活动策划及营销推广能力。 </p>
<p>5、拥有丰富的行业经验及资深管理团队。 </p>
<p>三、产品介绍 </p>
<p> 1、《中证财讯》是中证资讯借助中证报总部及各地记者站的资源及人脉优势，倾力打造的一款专门针对中小投资者的投资资讯终端，目前共形成了《中证早知道》《中证投资锦囊》《中证专家解盘》《中证投资内参》《中证独家调研》六档资讯产品及系列服务。</p></p> -->
</section>
<!-- 页尾 -->
<footer>
		<div class="i-footer">
			<div class="i-footer_nav">
				<a href="/grid_zz/index.php/Mobile/Index/index.html" class="linkico">首页</a>
                <a href="/grid_zz/index.php/Mobile/Index/guide.html" class="linkico">导航</a>
                <a href="/grid_zz/index.php/Mobile/Index/about.html" class="linkico">关于</a>						
			</div>
            <p class="i-footer_copy">
               版权所有 中证财讯网
            </p>
		</div>
	</footer>
<!-- 固定条 -->
   <nav class="nav_tab">
	<ul class="table">
		<li><a href="/grid_zz/index.php/Mobile/Index/order.html">预约开户</a></li>
		<li class="on"><a href="tel:4007237988">一键拨打</a></li>
		<li><a href="/grid_zz/index.php/Mobile/Index/register.html">注册</a></li>
    </ul>
</nav>
<div class="visible"></div>
</body>
</html>