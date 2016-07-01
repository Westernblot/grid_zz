<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
   <title>中证财讯网</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link href="/grid_zz/Public/mcss/base.css" rel="stylesheet" type="text/css"/>
  	<link href="/grid_zz/Public/mcss/index.css" rel="stylesheet" type="text/css"/>
</head>
  <script type="text/javascript" src="/grid_zz/Public/js/zepto.js"></script>
  <script type="text/javascript">
        	  //搜索
            function doSearch(){
            	var key=$('#key').val();
            	location.href="/grid_zz/index.php/Mobile/Index/search?key="+key;
            }
            
        	
  </script>
<body id="wrap">
    <header class="header">     
        <h1 title="中证财讯网"><a href="/grid_zz/index.php/Mobile/Index/index.html" title="中证财讯网" class="zz_logo"></a></h1>
        <a href="/grid_zz/index.php/Mobile/Index/guide.html" class="right_aside"><span class="tab_bar_menu"></span></a>
    </header>
        <nav class="main_nav">
            <div class="main_nav_list">
                <a href="/grid_zz/index.php/Mobile/Index/news?type=金融服务">金融服务</a>
                <a href="/grid_zz/index.php/Mobile/Index/news?type=中证投资锦囊">投资锦囊</a>
                <a href="news.html">专家解盘</a>
                <a href="/grid_zz/index.php/Mobile/Index/news?type=实盘跟踪">实盘跟踪</a>
			</div>
            <div class="main_nav_list">
                <a href="/grid_zz/index.php/Mobile/Index/product.html">产品</a>
                <a href="/grid_zz/index.php/Mobile/Index/news?type=股市大视野">股市视野</a>
                <a href="/grid_zz/index.php/Mobile/Index/news?type=中证独家视点">独家视点</a>
                <a href="/grid_zz/index.php/Mobile/Index/news?type=中证政策前瞻">政策前瞻</a>
			</div>
            <div class="main_nav_list">
                <a href="/grid_zz/index.php/Mobile/Index/news?type=中证行业研究">行业研究</a>
                <a href="/grid_zz/index.php/Mobile/Index/news?type=中证个股资讯">个股资讯</a>
                <a href="/grid_zz/index.php/Mobile/Index/news?type=市场数据">市场数据</a>
                <a href="/grid_zz/index.php/Mobile/Index/news?type=券商研报">券商研报</a>
			</div>
        </nav>
<!--焦点图-->
        <div class="swiper-container" style="height:153px;">
          <div class="swiper-wrapper">
          	
              <!-- <div class="swiper-slide"><a href="http://120.24.96.72/Public/res/setup.zip"><img src="/grid_zz/Public/picfile/1.jpg" alt="中证财讯客户端"/></a></div>
              <div class="swiper-slide"><a href="#"><img src="/grid_zz/Public/picfile/2.jpg" alt="出鞘:从日机拦截中国军机谈起"/></a></div>
              <div class="swiper-slide"><a href="#"><img src="/grid_zz/Public/picfile/3.jpg" alt="男篮拍写真剑指亚锦赛"/></a></div> -->
              
          	<?php if(is_array($linkList)): foreach($linkList as $key=>$vo): ?><div class="swiper-slide"><a href="<?php echo ($vo["action"]); ?>"><img src="<?php echo ($vo["imgurl"]); ?>" /></a></div><?php endforeach; endif; ?>
           
          </div>
          <div class="swiper-pagination"></div>
        </div>
<!--搜索模块-->
    <dl class="site_search">
				
				<dt class="site_select">
					<span>标题</span>
					<select name="search_kind">
						<option value="s_title" selected="selected">标题</option>
						<option value="s_content">内容</option>
					</select>
				</dt>
				<dd class="site_searchbox">
				     <div class="site_search_input">
					<input type="text" name='key' class="f_search_t" value="" placeholder="输入您想搜索的新闻" id="key"/>
				     </div>
                     <span id="searchCross" class="cross" ><b></b></span>
				     <input type="button" onclick="doSearch()" class="f_search_btn" value=""  />		
				</dd>
				
	</dl>
<div class="card_finance">
	<div class="card_finance_box">				
			   <a href="javascript:#">
					<div class="record">
						<span class="record_name">上证指数	</span>
					 <script type="text/javascript" src="http://hq.sinajs.cn/list=sh000001" charset="UTF-8"></script>
					 <script type="text/javascript"> 
                     var elements=hq_str_sh000001.split(",");
                     
                     var s2=parseFloat(elements[2]); //昨日收盘价
                     var s3=parseFloat(elements[3]); //当前价格
                     
                     var h1=(s3-s2).toFixed(2);    //涨跌幅                  
                     var m1=(h1/s2*100).toFixed(2); //涨跌比
                                        
                      document.write('<strong class="record_red">'+s3+'</strong>');                                         
                      document.write('<em class="record_em record_red">'+h1+'&nbsp;&nbsp;'+m1+'%</em>');                                    
                     </script>
						<!-- <strong class="record_red">3243.089</strong>
						<em class="record_em record_red">
							72.64&nbsp;&nbsp;2.29%</em> -->
					</div>
				</a>
				
				
			   <a href="javascript:#">
					<div class="record">
						<span class="record_name">深证成指</span>
					<script type="text/javascript" src="http://hq.sinajs.cn/list=s_sz399001" charset="UTF-8"></script>               	
                	<script type="text/javascript"> 
                     var elements=hq_str_s_sz399001.split(",");             
           
                     document.write('<strong class="record_red">'+elements[1]+'</strong>');  
                     document.write('<em class="record_em record_red">'+elements[2]+'&nbsp;&nbsp;'+elements[3]+'% </em>');  
                      
                    </script>
						<!--<strong class="record_red">4756.53</strong>
						    <em class="record_em record_red">
							10620.133&nbsp;&nbsp;2.91% </em> -->
					</div>
				</a>
				
				<a href="javascript:#">
					<div class="record">
						<span class="record_name">恒生指数</span>
					<script type="text/javascript" src="http://hq.sinajs.cn/list=int_hangseng" charset="UTF-8"></script>
                	<script type="text/javascript"> 
                     var elements=hq_str_int_hangseng.split(",");             
                     
                     document.write('<strong class="record_red">'+elements[1]+'</strong>');  
                     document.write('<em class="record_em record_red">'+elements[2]+'&nbsp;&nbsp;'+elements[3]+'% </em>');  
                      
                    </script>
						<!-- <strong class="record_red">22131.31</strong>
						<em class="record_em record_red">
							872.27&nbsp;&nbsp;4.10%						</em> -->
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
        	 
                        <!-- <li><a href="show.html">亚太股市大反弹.日经暴涨8%</a></li>
                        <li><a href="show.html">达沃斯.股市动荡有人背黑锅?</a></li>
                        <li><a href="show.html">李稻葵看A股大跌:健康回调</a></li>
                        <li><a href="show.html">南京老股民用24节气炒股小赚</a></li>
                        <li><a href="show.html">炒股引发职务犯罪.股民挪公款</a></li>
                        <li><a href="show.html">阿里市值10个月少1407亿美元</a></li>
                        <li><a href="show.html">炒股拼装备.股民投资十万元</a></li> -->
                        
        	 	<?php if(is_array($newsList)): foreach($newsList as $key=>$vo): ?><li><a href="/grid_zz/index.php/Mobile/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (subtext($vo["title"],25)); ?></a></li><?php endforeach; endif; ?>
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
     
      <?php if(is_array($newsList0)): foreach($newsList0 as $key=>$vo): ?><a href="/grid_zz/index.php/Mobile/Index/show?id=<?php echo ($vo["id"]); ?>">
          <dl class="carditems_list">
              <dt class="carditems_list_dt"> <img src="<?php echo ($vo["imgurl"]); ?>"  /> </dt>
              <dd class="carditems_list_dd">
              <h3 class="carditems_list_h3"><?php echo ($vo["subject"]); ?></h3>
              <h4 class="carditems_list_h4"><?php echo (subtext($vo["description"],30)); ?></h4>
              <p class="carditems_list_op"><span class="op_ico time_num fl"><?php echo ($vo["intime"]); ?></span>
              	<!-- <span class="op_ico num_ico fr">2</span> -->
              	</p>
              </dd>
          </dl>
      </a><?php endforeach; endif; ?>
      
      </div>
                    <div class="news_more_tips">
                        <a href="/grid_zz/index.php/Mobile/Index/news?type=中证行业研究" title="进入行业研究栏目"><span class="hIcon news_more_r">进入行业研究栏目</span></a>
                    </div>
	        </div>
    
    
    
    		<div class="news_items_module hidden" id="myTab1_Content1">
				<div class="carditems">
         
     <?php if(is_array($newsList1)): foreach($newsList1 as $key=>$vo): ?><a href="/grid_zz/index.php/Mobile/Index/show?id=<?php echo ($vo["id"]); ?>">
          <dl class="carditems_list">
              <dt class="carditems_list_dt"> <img src="<?php echo ($vo["imgurl"]); ?>"  /> </dt>
              <dd class="carditems_list_dd">
              <h3 class="carditems_list_h3"><?php echo ($vo["subject"]); ?></h3>
              <h4 class="carditems_list_h4"><?php echo (subtext($vo["description"],30)); ?></h4>
              <!-- <p class="carditems_list_op"><span class="op_ico time_num fl">54分钟前</span><span class="op_ico num_ico fr">2</span></p> -->
               <p class="carditems_list_op"><span class="op_ico time_num fl"><?php echo ($vo["intime"]); ?></span>
              	<!-- <span class="op_ico num_ico fr">2</span> -->
              	</p>
              </dd>
          </dl>
      </a><?php endforeach; endif; ?>
         
         </div>				
                    <div class="news_more_tips">
                        <a href="/grid_zz/index.php/Mobile/Index/news?type=中证个股资讯" title="进入个股资讯栏目"><span class="hIcon news_more_r">进入个股资讯栏目</span></a>
                    </div>
		   </div>
        
    	  <div class="news_items_module hidden" id="myTab1_Content2">
					<div class="carditems">
   
     <?php if(is_array($newsList2)): foreach($newsList2 as $key=>$vo): ?><a href="/grid_zz/index.php/Mobile/Index/show?id=<?php echo ($vo["id"]); ?>">
          <dl class="carditems_list">
              <dt class="carditems_list_dt"> <img src="<?php echo ($vo["imgurl"]); ?>"  /> </dt>
              <dd class="carditems_list_dd">
              <h3 class="carditems_list_h3"><?php echo ($vo["subject"]); ?></h3>
              <h4 class="carditems_list_h4"><?php echo (subtext($vo["description"],30)); ?></h4>
              <!-- <p class="carditems_list_op"><span class="op_ico time_num fl">54分钟前</span><span class="op_ico num_ico fr">2</span></p> -->
               <p class="carditems_list_op"><span class="op_ico time_num fl"><?php echo ($vo["intime"]); ?></span>
              	<!-- <span class="op_ico num_ico fr">2</span> -->
              	</p>
              </dd>
          </dl>
      </a><?php endforeach; endif; ?>
   
   </div>
                    <div class="news_more_tips">
                        <a href="/grid_zz/index.php/Mobile/Index/news?type=市场数据" title="进入市场数据栏目"><span class="hIcon news_more_r">进入市场数据栏目</span></a>
                    </div>
		  </div>
    			</div>		
</div>
<!-- 页尾 -->    
<footer class="footer">
	<p class="footer_nav">
		<span><a href="/grid_zz/index.php/Mobile/Index/guide.html">导航</a></span>
		<span><a href="/grid_zz/index.php/Mobile/Index/about.html">关于</a></span>
		<span> </span>
	</p>
	<p>鄂ICP备08002286号 　版权所有：中证财讯网</p>
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
   
        <script src="/grid_zz/Public/js/swiper.js"></script> 
        <script>
            var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                paginationClickable: true,
                spaceBetween: 0,
            });
            
        </script>
        <script src="/grid_zz/Public/js/navtab.js"></script> 
 
</body>
</html>