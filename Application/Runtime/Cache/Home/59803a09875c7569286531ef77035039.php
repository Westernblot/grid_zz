<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
   <title>中证财讯网</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link href="/grid_zz/Public/mcss/base.css" rel="stylesheet" type="text/css"/>
  	<link href="/grid_zz/Public/mcss/index.css" rel="stylesheet" type="text/css"/>
</head>
<body id="wrap">
    <header class="header">     
        <h1 title="中证财讯网"><a href="index.html" title="中证财讯网" class="zz_logo"></a></h1>
        <a href="guide.html" class="right_aside"><span class="tab_bar_menu"></span></a>
    </header>
        <nav class="main_nav">
            <div class="main_nav_list">
                <a href="list.html">金融服务</a>
                <a href="list.html">投资锦囊</a>
                <a href="list.html">专家解盘</a>
                <a href="list.html">实盘跟踪</a>
			</div>
            <div class="main_nav_list">
                <a href="list.html">产品</a>
                <a href="list.html">股市视野</a>
                <a href="list.html">独家视点</a>
                <a href="list.html">政策前瞻</a>
			</div>
            <div class="main_nav_list">
                <a href="list.html">行业研究</a>
                <a href="list.html">个股资讯</a>
                <a href="list.html">市场数据</a>
                <a href="list.html">券商研报</a>
			</div>
        </nav>
<!--焦点图-->
        <div class="swiper-container" style="height:153px;">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="http://120.24.96.72/Public/res/setup.zip"><img src="/grid_zz/Public/picfile/1.jpg" alt="中证财讯客户端"/></a></div>
            <div class="swiper-slide"><a href="#"><img src="/grid_zz/Public/picfile/2.jpg" alt="出鞘:从日机拦截中国军机谈起"/></a></div>
            <div class="swiper-slide"><a href="#"><img src="/grid_zz/Public/picfile/3.jpg" alt="男篮拍写真剑指亚锦赛"/></a></div>
            <div class="swiper-slide"><a href="#"><img src="/grid_zz/Public/picfile/4.jpg" alt="宾利添越:世界上最豪华的SUV"/></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
<!--搜索模块-->
    <dl class="site_search">
				<form action="" method="post">
				<dt class="site_select">
					<span>标题</span>
					<select name="search_kind">
						<option value="s_title" selected="selected">标题</option>
						<option value="s_content">内容</option>
					</select>
				</dt>
				<dd class="site_searchbox">
				     <div class="site_search_input">
					<input type="text" name='search_keyword' class="f_search_t" value="" placeholder="输入您想搜索的新闻" id="searchInput"/>
				     </div>
                     <span id="searchCross" class="cross"><b></b></span>
				     <input type="submit" class="f_search_btn" value="" />
				</dd>
				</form>
	</dl>
<div class="card_finance">
	<div class="card_finance_box">				
						        		        <a href="nasdaq_single.php">
					<div class="record">
						<span class="record_name">
							上证指数						</span>
						<strong class="record_red">3243.089</strong>
						<em class="record_em record_red">
							72.64&nbsp;&nbsp;2.29%						</em>
					</div>
				</a>
						        		        <a href="nasdaq_single.php">
					<div class="record">
						<span class="record_name">
							深证成指						</span>
						<strong class="record_red">4756.53</strong>
						<em class="record_em record_red">
							10620.133&nbsp;&nbsp;2.91%						</em>
					</div>
				</a>
						        		        <a href="nasdaq_single.php">
					<div class="record">
						<span class="record_name">
							 恒生指数						</span>
						<strong class="record_red">22131.31</strong>
						<em class="record_em record_red">
							872.27&nbsp;&nbsp;4.10%						</em>
					</div>
				</a>
					  </div>	
		 
</div>
<!--列表-->
<div class="news_module">
    <ul class="news_tab">
    		<li class="on">今日市场头条</li>
        </ul>
    <div class="j_newsModule">
        <ul class="news_items">
                        <li><a href="show.html">亚太股市大反弹.日经暴涨8%</a></li>
                        <li><a href="show.html">达沃斯.股市动荡有人背黑锅?</a></li>
                        <li><a href="show.html">李稻葵看A股大跌:健康回调</a></li>
                        <li><a href="show.html">南京老股民用24节气炒股小赚</a></li>
                        <li><a href="show.html">炒股引发职务犯罪.股民挪公款</a></li>
                        <li><a href="show.html">阿里市值10个月少1407亿美元</a></li>
                        <li><a href="show.html">炒股拼装备.股民投资十万元</a></li>
                        <li><a href="show.html">手机炒股大赛决赛号角吹响！</a></li>
                    </ul>
    </div>
 </div>
    
    <!--列表-->
<div class="news_module">
    <ul class="news_tab" id="myTab1">
    		        <li class="on" onClick="nTabs(this,0);">行业研究</li>
    		        <li onClick="nTabs(this,1);">个股资讯</li>
    		        <li onClick="nTabs(this,2);">市场数据</li>
        </ul>
		<div class="news_items_module_wrap">
			<div class="news_items_module" id="myTab1_Content0">
				<div class="carditems">
      <a href="show.html">
      <dl class="carditems_list">
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">苹果发布iPhone6s收盘跌1.92%</h3>
          <h4 class="carditems_list_h4">苹果发布iPhone 6s 股价收跌1.92%</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">2小时前</span></p>
                </dd>
      </dl>
      </a>
      <a href="show.html">
      <dl class="carditems_list">
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">美国前财长强烈反对9月加息</h3>
          <h4 class="carditems_list_h4">美前财长萨默斯撰文强烈反对9月加息</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">58分钟前</span></p>
              </dd>
      </dl>
      </a>
    <a href="show.html">
      <dl class="carditems_list">
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">苹果对乔布斯的又一次背叛</h3>
          <h4 class="carditems_list_h4">Apple Pencil:苹果对乔布斯的又一次背叛</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">28分钟前</span></p>
              </dd>
      </dl>
      </a>
      <a href="show.html">
      <dl class="carditems_list">
        <dt class="carditems_list_dt"> <img src="/grid_zz/Public/picfile/2.jpg" alt="外媒头条:A股救市向老外取经" /> </dt>
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">外媒头条:A股救市向老外取经</h3>
          <h4 class="carditems_list_h4">10日外媒头条：中国救市曾向贝莱德CEO取经</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">6小时前</span><span class="op_ico num_ico fr">300</span></p>
              </dd>
      </dl>
      </a>
      <a href="show.html">
      <dl class="carditems_list">
        <dt class="carditems_list_dt"> <img src="/grid_zz/Public/picfile/4.jpg" alt="外媒头条:A股救市向老外取经" /> </dt>
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">隔夜国际市场要闻（10日）</h3>
          <h4 class="carditems_list_h4">隔夜国际市场要闻必读（9月10日）</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">54分钟前</span><span class="op_ico num_ico fr">2</span></p>
              </dd>
      </dl>
      </a>
      <a href="show.html">
      <dl class="carditems_list">
        <dt class="carditems_list_dt"> <img src="/grid_zz/Public/picfile/3.jpg" alt="外媒头条:A股救市向老外取经" /> </dt>
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">担忧加息周三美股由涨转跌</h3>
          <h4 class="carditems_list_h4">收盘：担忧加息临近美股由涨转跌</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">4小时前</span><span class="op_ico num_ico fr">10</span></p>
              </dd>
      </dl>
      </a>
      <a href="show.html">
      <dl class="carditems_list">
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">联储落后于1994年加息步伐</h3>
          <h4 class="carditems_list_h4">美劳工市场迅速改善 联储落后于1994年加息步伐</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">9小时前</span><span class="op_ico num_ico fr">2</span></p>
              </dd>
      </dl>
      </a></div>
                    <div class="news_more_tips">
                        <a href="list.html" title="进入行业研究栏目"><span class="hIcon news_more_r">进入行业研究栏目</span></a>
                    </div>
	        </div>
    
    		<div class="news_items_module hidden" id="myTab1_Content1">
				<div class="carditems">
    <a href="show.html">
      <dl class="carditems_list">
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">苹果对乔布斯的又一次背叛</h3>
          <h4 class="carditems_list_h4">Apple Pencil:苹果对乔布斯的又一次背叛</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">28分钟前</span></p>
              </dd>
      </dl>
      </a>
      <a href="show.html">
      <dl class="carditems_list">
        <dt class="carditems_list_dt"> <img src="/grid_zz/Public/picfile/2.jpg" alt="外媒头条:A股救市向老外取经" /> </dt>
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">外媒头条:A股救市向老外取经</h3>
          <h4 class="carditems_list_h4">10日外媒头条：中国救市曾向贝莱德CEO取经</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">6小时前</span><span class="op_ico num_ico fr">300</span></p>
              </dd>
      </dl>
      </a>
      <a href="show.html">
      <dl class="carditems_list">
        <dt class="carditems_list_dt"> <img src="/grid_zz/Public/picfile/4.jpg" alt="外媒头条:A股救市向老外取经" /> </dt>
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">隔夜国际市场要闻（10日）</h3>
          <h4 class="carditems_list_h4">隔夜国际市场要闻必读（9月10日）</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">54分钟前</span><span class="op_ico num_ico fr">2</span></p>
              </dd>
      </dl>
      </a>
      <a href="show.html">
      <dl class="carditems_list">
        <dt class="carditems_list_dt"> <img src="/grid_zz/Public/picfile/3.jpg" alt="外媒头条:A股救市向老外取经" /> </dt>
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">担忧加息周三美股由涨转跌</h3>
          <h4 class="carditems_list_h4">收盘：担忧加息临近美股由涨转跌</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">4小时前</span><span class="op_ico num_ico fr">10</span></p>
              </dd>
      </dl>
      </a>
      <a href="show.html">
      <dl class="carditems_list">
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">苹果发布iPhone6s收盘跌1.92%</h3>
          <h4 class="carditems_list_h4">苹果发布iPhone 6s 股价收跌1.92%</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">2小时前</span></p>
              </dd>
      </dl>
      </a>
      <a href="show.html">
      <dl class="carditems_list">
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">美国前财长强烈反对9月加息</h3>
          <h4 class="carditems_list_h4">美前财长萨默斯撰文强烈反对9月加息</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">58分钟前</span></p>
              </dd>
      </dl>
      </a>
      <a href="show.html">
      <dl class="carditems_list">
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">联储落后于1994年加息步伐</h3>
          <h4 class="carditems_list_h4">美劳工市场迅速改善 联储落后于1994年加息步伐</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">9小时前</span><span class="op_ico num_ico fr">2</span></p>
              </dd>
      </dl>
      </a></div>				
                    <div class="news_more_tips">
                        <a href="list.html" title="进入个股资讯栏目"><span class="hIcon news_more_r">进入个股资讯栏目</span></a>
                    </div>
		   </div>
        
    	  <div class="news_items_module hidden" id="myTab1_Content2">
					<div class="carditems">
    <a href="show.html">
      <dl class="carditems_list">
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">苹果对乔布斯的又一次背叛</h3>
          <h4 class="carditems_list_h4">Apple Pencil:苹果对乔布斯的又一次背叛</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">28分钟前</span></p>
              </dd>
      </dl>
      </a>
      <a href="show.html">
      <dl class="carditems_list">
        <dt class="carditems_list_dt"> <img src="/grid_zz/Public/picfile/2.jpg" alt="外媒头条:A股救市向老外取经" /> </dt>
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">外媒头条:A股救市向老外取经</h3>
          <h4 class="carditems_list_h4">10日外媒头条：中国救市曾向贝莱德CEO取经</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">6小时前</span><span class="op_ico num_ico fr">300</span></p>
              </dd>
      </dl>
      </a>
      <a href="show.html">
      <dl class="carditems_list">
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">苹果发布iPhone6s收盘跌1.92%</h3>
          <h4 class="carditems_list_h4">苹果发布iPhone 6s 股价收跌1.92%</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">2小时前</span></p>
              </dd>
      </dl>
      </a>
      <a href="show.html">
      <dl class="carditems_list">
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">美国前财长强烈反对9月加息</h3>
          <h4 class="carditems_list_h4">美前财长萨默斯撰文强烈反对9月加息</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">58分钟前</span></p>
              </dd>
      </dl>
      </a>
      <a href="show.html">
      <dl class="carditems_list">
        <dt class="carditems_list_dt"> <img src="/grid_zz/Public/picfile/4.jpg" alt="外媒头条:A股救市向老外取经" /> </dt>
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">隔夜国际市场要闻（10日）</h3>
          <h4 class="carditems_list_h4">隔夜国际市场要闻必读（9月10日）</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">54分钟前</span><span class="op_ico num_ico fr">2</span></p>
              </dd>
      </dl>
      </a>
      <a href="show.html">
      <dl class="carditems_list">
        <dt class="carditems_list_dt"> <img src="/grid_zz/Public/picfile/3.jpg" alt="外媒头条:A股救市向老外取经" /> </dt>
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">担忧加息周三美股由涨转跌</h3>
          <h4 class="carditems_list_h4">收盘：担忧加息临近美股由涨转跌</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">4小时前</span><span class="op_ico num_ico fr">10</span></p>
              </dd>
      </dl>
      </a>
      <a href="show.html">
      <dl class="carditems_list">
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3">联储落后于1994年加息步伐</h3>
          <h4 class="carditems_list_h4">美劳工市场迅速改善 联储落后于1994年加息步伐</h4>
          <p class="carditems_list_op"><span class="op_ico time_num fl">9小时前</span><span class="op_ico num_ico fr">2</span></p>
              </dd>
      </dl>
      </a></div>
                    <div class="news_more_tips">
                        <a href="list.html" title="进入市场数据栏目"><span class="hIcon news_more_r">进入市场数据栏目</span></a>
                    </div>
		  </div>
    			</div>		
</div>
<!-- 页尾 -->    
<footer class="footer">
	<p class="footer_nav">
		<span><a href="guide.html">导航</a></span>
		<span><a href="about.html">关于</a></span>
		<span> </span>
	</p>
	<p>鄂ICP备08002286号 　版权所有：中证财讯网</p>
</footer>
<nav class="nav_tab">
	<ul class="table">
		<li><a href="order.html">预约开户</a></li>
		<li class="on"><a href="#">一键拨打</a></li>
		<li><a href="register.html">注册</a></li>
    </ul>
</nav>
<div class="visible"></div>
        <script src="js/swiper.js"></script> 
        <script>
            var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                paginationClickable: true,
                spaceBetween: 0,
            });
        </script>
        <script src="js/navtab.js"></script> 
</body>
</html>