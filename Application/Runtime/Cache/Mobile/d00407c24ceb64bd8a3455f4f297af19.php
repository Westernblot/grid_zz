<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
   <title><?php echo ($news["title"]); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link href="/grid_zz/Public/mcss/base.css" rel="stylesheet" type="text/css"/>
  	<link href="/grid_zz/Public/mcss/subPage.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<header class="header">    
        <a href="javascript:void(0);" onClick="history.back();return false;" class="return_back">返回</a>
        <h2 class="main_title">金融服务</h2>
        <a href="/grid_zz/index.php/Mobile/Index/guide.html" class="right_aside"><span class="tab_bar_menu"></span></a>
</header>
	<nav class="i-nav">
		<h2><a class="i_txt" href="/grid_zz/index.php/Mobile/Index/index.html">首页</a></h2>	
		<ul class="i_nav_items">		
            <li><a href="/grid_zz/index.php/Mobile/Index/news?type=<?php echo ($news["type"]); ?>" title="手机财经频道"><?php echo ($news["type"]); ?></a></li>
            <li><a href="javascript:#" title="正文">正文</a></li>
		</ul>
	</nav>	
    
<section class="art_main_card">
	<!--标题-->
	<section class="art_title">
		<h1 class="art_title_h1"><?php echo ($news["title"]); ?></h1>
		<article class="art_title_op">
			<aside>
				<!-- <a href="javascript:void(0)">收藏</a> -->
			</aside>
			<time><?php echo ($news["source"]); ?> <?php echo ($news["author"]); ?> <?php echo ($news["intime"]); ?></time>
		</article>
	</section>
   <!--视频-->
					<!-- <section class="video_module slide-box">
							<div class="video-card">
								<div class="article_video">
									<img src="picfile/3.jpg" width="100%"/>
								</div>
								<h4 class="intro">视频：玫瑰金版iPhone 6s上手体验</h4>
							</div>
					</section> -->
  <!--文章内容-->    
  <?php echo ($news["content"]); ?>               
<!-- <p class="art_t">　　iPhone 6s与iPhone 6s Plus的售价与上代iPhone发布时的价格一致，合约价最低199元起。两款iPhone基础版本均为16GB版，同时提供64GB版本和128GB版本。三款iPhone 6s两年合约价分别为199美元、299美元、399美元。iPhone 6s Plus三款对应两年合约价分别为299美元、399美元和499美元。</p>
<p class="art_t">　　新款iPhone将在9月25日上市，并于9月12日开始接受预定。新款iPhone将在超过130个国家上市，中国大陆位于首批发布国家及地区名单之内。(方泽)</p> -->
</section>

<!--热点推荐开始-->
<section class="extend-module">
	<aside class="th_td">推荐阅读</aside>
	<aside class="recommend_moudule">
        <div class="carditems">
      
      <?php if(is_array($newsList)): foreach($newsList as $key=>$vo): ?><a href="/grid_zz/index.php/Mobile/Index/show?id=<?php echo ($vo["id"]); ?>">
          <dl class="carditems_list">
            <dt class="carditems_list_dt"> <img src="<?php echo ($vo["imgurl"]); ?>" /> </dt>
            <dd class="carditems_list_dd">
              <h3 class="carditems_list_h3"><?php echo ($vo["subject"]); ?></h3>
              <h4 class="carditems_list_h4"><?php echo (subtext($vo["description"],30)); ?></h4>
              <!-- <p class="carditems_list_op"><span class="op_ico time_num fl">4小时前</span><span class="op_ico num_ico fr">10</span></p> -->
            <p class="carditems_list_op"><span class="op_ico time_num fl"><?php echo ($vo["intime"]); ?></span>
              	<!-- <span class="op_ico num_ico fr">2</span> -->
            </p>
         </dd> </dl>
          </a><?php endforeach; endif; ?>
        
        
          </div>
	</aside>
	<aside class="load-more">
		<!-- <span class="loading">加载中</span> -->
	</aside>
</section> 

<!-- 返回顶部 -->
<a title="返回顶部" href="#top" class="backTop" id="toolBackTop">返回顶部</a>
<!-- 页尾 -->
<footer>
		<div class="i-footer">
			<div class="i-footer_nav">
				<a href="/grid_zz/index.php/Mobile/Index/index.html" class="linkico">首页</a>
                <a href="/grid_zz/index.php/Mobile/Index/guide.html" class="linkico">导航</a>
                <a href="/grid_zz/index.php/Mobile/Index/about.html" class="linkico">关于中证</a>						
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

<script type="text/javascript" src="js/zepto.js"></script>
<script type="text/javascript" src="js/toolBackTop.js"></script>
</body>
</html>