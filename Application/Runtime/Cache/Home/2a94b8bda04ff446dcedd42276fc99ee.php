<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="baidu-site-verification" content="9TaEhQlayN" />
 <link rel="shortcut icon" href="/grid_zz/Public/res/favicon.ico" type="image/x-icon">
<title>中证财讯网</title>
	<link rel="stylesheet" href="/grid_zz/Public/zzcss/base.css" type="text/css" />
	<link rel="stylesheet" href="/grid_zz/Public/zzcss/index.css" type="text/css" />
<script type="text/javascript" src="/grid_zz/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/sl.js"></script>
<script src="http://js.jrj.com.cn/hq/co/swfobject.js" type="text/javascript"></script>
<script type="text/javascript"> 
	$(document).ready(function(){
	  	$.focus("#focus001");
	  	$.focus("#focus002");
	  	
	  	//checkPlatform();
	});
	
	function doSubmit(){
		$('#form1').submit();
	}
	
	function toRegister(){
		location.href="/grid_zz/index.php/Home/Index/register";
	}
	
	
	function checkPlatform(){
		
		  //平台、设备和操作系统 
        var system = { 
            win: false, 
            mac: false, 
            xll: false, 
            ipad:false 
        }; 
        //检测平台 
        var p = navigator.platform; 
        system.win = p.indexOf("Win") == 0; 
        system.mac = p.indexOf("Mac") == 0; 
        system.x11 = (p == "X11") || (p.indexOf("Linux") == 0); 
        system.ipad = (navigator.userAgent.match(/iPad/i) != null)?true:false; 
        //跳转语句，如果是手机访问就自动跳转到wap.baidu.com页面 
        if (system.win || system.mac || system.xll||system.ipad) { 
 
                     alert('电脑，mac，ipad');
 
        } else { 
            
                alert('手机');
            //window.location.href = "http://www.jdpatro.com/3g/"; 
        } 
		
	}
	
</script>
</head>

<body>
		<!-- 固定条 -->
   
<!-- JiaThis Button BEGIN -->
<script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_r.js?type=left&amp;move=0" charset="utf-8"></script>
<!-- JiaThis Button END -->

<div class="top">
	<div class="margin">
        <div class="top01">
            <div class="pull-left">
                <a href="javascript:#" class="hrefs" onclick="myhomepage()">设为首页</a>
                <!-- <a href="index.html">登录</a> -->
                <a href="/grid_zz/index.php/Home/Index/register.html">注册</a>
                <a href="/grid_zz/index.php/Home/Index/resetpwd.html">忘记密码</a>
            </div>
            <div class="pull-right">
                <a href="http://cxcxt.com/Public/res/setup.zip">电脑版</a>
                <a href="/grid_zz/index.php/Home/Down/index.html" target="_blank">手机客户端</a>
                <a href="javascript:#">加入我们</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
	
function myhomepage(){ 
	
//this.homepage.style.behavior='url(#default#homepage)';
this.homepage.sethomepage('http://www.webjx.com'); 
} 
	
</script>

<div class="top02">
    <div class="margin">
          <div class="pull-left">
              <img src="/grid_zz/Public/images/logo.jpg" />
          </div>
          <div class="pull-right">
              <!-- <img src="/grid_zz/Public/images/top-banner.jpg" /> -->
              <embed src="/grid_zz/Public/images/top.swf" width="760" height="104"></embed>
          </div>
      </div>
</div>


<div id="container"> 
	<div class="bar">
      <div class="nav">
          <ul>    
              <li><a href="/grid_zz/index.php/Home/Index/index"
                  	<?php if((ACTION_NAME) == "index"): ?>class="active"<?php endif; ?>
                  	>首页</a></li> 
                  <li><a href="/grid_zz/index.php/Home/Index/news?type=热点专案"
                  	<?php if(($type) == "热点专案"): ?>class="active"<?php endif; ?>
                  	>热点专案</a></li>           
                  <li><a href="/grid_zz/index.php/Home/Index/news?type=金融服务"
                  	<?php if(($type) == "金融服务"): ?>class="active"<?php endif; ?>
                  	>金融服务</a></li> 
                  <li><a href="/grid_zz/index.php/Home/Index/news?type=中证投资锦囊"
                  	<?php if(($type) == "中证投资锦囊"): ?>class="active"<?php endif; ?>
                  	>每日金股</a></li>  
                  <li><a href="/grid_zz/index.php/Home/Index/experts" 
                  	<?php if((ACTION_NAME) == "experts"): ?>class="active"<?php endif; ?>
                  	>专家解盘</a></li>  
                  <li style="background-color: #FF8712;line-height:28px; height:28px; margin-top: 16px;">
                  	<a href="http://zhibo.cxcxt.com" style="color: #fff"  target="_blank" >直播间</li>
                  <li><a href="/grid_zz/index.php/Home/Index/product"
                  	<?php if((ACTION_NAME) == "product"): ?>class="active"<?php endif; ?>
                  	>战绩回顾</a></li>
                  <li><a href="/grid_zz/index.php/Home/Index/about"
                  	<?php if((ACTION_NAME) == "about"): ?>class="active"<?php endif; ?>
                  	>关于中证</a></li>
          </ul>  
          <div class="search">
          	<form id="form1" action="/grid_zz/index.php/Home/Index/search" method="get">        		
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td><input type="text" id="keyword" name="keyword" class="inputText" placeholder="请输入关键字"/> </td>
                    <td><input name="search" type="button" class="inputBtn" value="搜索" onclick="doSubmit()" /></td>
                </tr>
            </table>
          	</form>
          </div>
       </div>
      <div class="banner">
      	<div class="focus" id="focus001">
            <ul>       
            	<?php if(is_array($linkList)): foreach($linkList as $key=>$vo): if(($vo["type"]) == "轮播图"): ?><li><a href="<?php echo ($vo["action"]); ?>"><img src="<?php echo ($vo["imgurl"]); ?>" /></a></li><?php endif; endforeach; endif; ?>   
                <!-- <li><a href="#" target="_blank"><img src="/grid_zz/Public/picfile/1.jpg"/></a></li>
                <li><a href="#" target="_blank"><img src="/grid_zz/Public/picfile/2.jpg"/></a></li>
                <li><a href="#" target="_blank"><img src="/grid_zz/Public/picfile/3.jpg"/></a></li> -->
            </ul>
        </div>
      	<!-- <div class="banner-side"><a href="/grid_zz/Public/res/setup.zip" target="_blank"><img src="/grid_zz/Public/images/banner-side.jpg" /></a></div> -->
      	<div class="banner-side">           
              <div class="banner-side-title">
                  <h4>中证财讯通</h4>
                  <span><a target="_blank" href="/grid_zz/Public/res/setup.zip"><img src="/grid_zz/Public/images/index-07.jpg" /></a></span>
              </div>
              <div class="tel">
              	<img src="/grid_zz/Public/images/index-08.jpg" />
                <div class="tel-form">
                    <input type="text" id="sure" name="sure" class="inputText" placeholder="请填写手机号索取"/>
                    <input name="sure" type="button" class="inputBtn" value=" 提交 " onclick="toRegister()" />
                </div>
              </div>
              <ul>
                <li class="first"><span><a  href="/grid_zz/index.php/Home/Index/news?type=股市大视野">[股市大视野]</a></span>
                	<B>
                		<!-- <a target="_blank" href="show.html">团体短期综合意外险，适合短期工作、活动…</a> -->
                		 <?php $num = '1'; ?> 
                          	<?php if(is_array($newsList)): foreach($newsList as $key=>$vo): if(($vo["type"]) == "股市大视野"): if(($num) == "1"): ?><a target="_blank" href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a><?php endif; ?>
                          		 <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
                	</B>
                </li>
                <!-- <li><a target="_blank" href="show.html">一年期综合意外险，365天全方位呵护！</a></li>
                <li><a target="_blank" href="show.html">团体短期综合意外险，适合短期工作、活动…</a></li>
                <li><a target="_blank" href="show.html">平安银行新一贷，本年度降幅已达15%！</a></li> 
                <li class="other"><B><a href="show.html">6月底交易爆量 上半年成交量创六年同期新高</a></B></li>
                <li class="other"><a href="show.html">德佑链家成"顶级国宾，东郊中心"座上宾</a></li>  --> 
                	<?php $num = '1'; ?> 
                          	<?php if(is_array($newsList)): foreach($newsList as $key=>$vo): if(($vo["type"]) == "股市大视野"): $_RANGE_VAR_=explode(',',"2,6");if($num>= $_RANGE_VAR_[0] && $num<= $_RANGE_VAR_[1]):?><li><a target="_blank" href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a></li><?php endif; ?>                        			
                          		  <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
              </ul>
        </div>
      
      
      </div>
   </div>

  <div class="content_01">
        <div class="hot-news">      
             <B><a href="list.html">热点关注</a>：</B>
              <div class="scroll" onMouseOver="stop()" onMouseOut="start()">
                  <table id="scrollimg">
                    <tr>
                      <td id="simg"><table>
                          <tr>
                            
                            <?php if(is_array($newsList)): foreach($newsList as $key=>$vo): if(($vo["type"]) == "热点关注"): ?><td><a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a></td><?php endif; endforeach; endif; ?>
                           
                            <!-- <td><a href="show.html">市卫生局被国家卫计委评为"创建全国示范社区卫生服务中心"优秀集体</a></td>
                            <td><a href="show.html">"服务百姓健康行动"义诊活动系列三 振头中心为老年人讲心理健康</a></td>
                            <td><a href="show.html">全市社区护理岗位培训与练兵活动结束 18名优秀技能标兵脱颖而出</a></td> -->
                          </tr>
                        </table></td>
                      <td id="simg1"></td>
                    </tr>
                  </table>
                  <script type="text/javascript" src="/grid_zz/Public/js/newsScroll.js"></script> 
              </div>
        </div>
 
        <div class="content_01A">
        	 <!--<B>沪指三大指数</B>-->
              <ul>
                <li>上证指数：<a target="_blank" href="javascript:#">
                	<!-- <span>3756.55</span><span>133.64</span><span>3.69%</span> -->
                	<script type="text/javascript" src="http://hq.sinajs.cn/list=sh000001" charset="UTF-8"></script>
                	<span>
                	<script type="text/javascript"> 
                     var elements=hq_str_sh000001.split(",");
                     
                     var s2=parseFloat(elements[2]); //昨日收盘价
                     var s3=parseFloat(elements[3]); //当前价格
                     
                     var h1=(s3-s2).toFixed(2);    //涨跌幅                  
                     var m1=(h1/s2*100).toFixed(2); //涨跌比
                    
                     
                      document.write(s3);  document.write("  ");                                         
                      document.write(h1);document.write("  ");                                           
                      document.write(m1+"%");
                      
                    </script>
                    </span>
                	</a></li>
                <li>深证成指：<a target="_blank" href="javascript:#">
                	<!-- <span>12711.56</span><span>549.98</span><span>4.52%</span> -->
                	<script type="text/javascript" src="http://hq.sinajs.cn/list=s_sz399001" charset="UTF-8"></script>
                	<span>
                	<script type="text/javascript"> 
                     var elements=hq_str_s_sz399001.split(",");             
                     
                      document.write(elements[1]);  document.write("  ");                                         
                      document.write(elements[2]);document.write("  ");                                           
                      document.write(elements[3]+"%");
                      
                    </script>
                	</a></li>
                <li>恒生指数：<a target="_blank" href="javascript:#">
                	<!-- <span>3948.16</span><span>118.92</span><span>3.11%</span> -->
                	<script type="text/javascript" src="http://hq.sinajs.cn/list=int_hangseng" charset="UTF-8"></script>
                	<span>
                	<script type="text/javascript"> 
                     var elements=hq_str_int_hangseng.split(",");             
                     
                      document.write(elements[1]);  document.write("  ");                                         
                      document.write(elements[2]);  document.write("  ");                                           
                      document.write(elements[3]+"%");
                      
                    </script>
                </a></li>
              </ul>
        </div>      
    
   </div>
   
   <!-- 广告1 -->
   <div class="content_05"><a href="<?php echo ($link1["action"]); ?>"><img src="<?php echo ($link1["imgurl"]); ?>"/></a></div>
  <!-- <div class="headline">
  	<div class="title03"><a href="news.html"><img src="/grid_zz/Public/images/headline.jpg" /></a></div>
    <div class="main">
    	<table class="Hotnews">
        	<tr><td class="HotH1">
        		 <a href="show.html">市局出台《关于进一步严明纪律加强作风建设的若干意见</a> 
        		
        		<?php $num = '1'; ?>   			
            	<?php if(is_array($newsList)): foreach($newsList as $k=>$vo): if(($vo["type"]) == "今日市场头条"): if(($num) == "1"): ?><a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?></a><?php endif; ?>
            			 <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
        		
        		</td></tr>
            <tr><td class="Hotlink">
            	<?php $num = '1'; ?>   			
            	<?php if(is_array($newsList)): foreach($newsList as $k=>$vo): if(($vo["type"]) == "今日市场头条"): if(($num) > "1"): ?><a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;<?php endif; ?>
            			 <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
              <a href="show.html">抓学习 抓作风 抓环境 促改革</a>&nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="show.html">省委常委会会议通报全省落实"中</a>&nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="show.html">人民日报评论员：活动善始障</a> 
            </td></tr>
        </table>
    </div>
  </div> -->
  
  <div class="content_02">
  		<!-- <div class="content_top"><h2>金 融 服 务</h2></div> -->
        <div class="content_02A">
            <div class="index" style="border-left:0;">              
                          <h3><a href="/grid_zz/index.php/Home/Index/news?type=今日市场头条">今日市场头条</a></h3>
                          <p>
                          	<!-- <?php if(is_array($keywordList)): foreach($keywordList as $key=>$vo): if(($vo["type"]) == "今日市场头条"): ?><a href="#" target="_blank"><?php echo ($vo["name"]); ?></a>&nbsp;&nbsp;<?php endif; endforeach; endif; ?> -->
                              <!-- <a href="#" target="_blank">车险</a>
                              <a href="#" target="_blank">少儿险</a>
                              <a href="#" target="_blank">老人险</a>
                              <a href="#" target="_blank">万能险</a>
                              <a href="3" target="_blank">分红险</a>
                              <a href="#" target="_blank">企业年金</a> -->
                            <?php $num = '1'; ?> 
                          	<?php if(is_array($newsList)): foreach($newsList as $key=>$vo): if(($vo["type"]) == "今日市场头条"): if(($num) == "1"): ?><a target="_blank" href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (subtext($vo["title"],18)); ?></a><?php endif; ?>
                          		 <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
                          </p>
                          
                          <ul>
                          	
                          	<?php $num = '1'; ?> 
                          	<?php if(is_array($newsList)): foreach($newsList as $key=>$vo): if(($vo["type"]) == "今日市场头条"): $_RANGE_VAR_=explode(',',"2,8");if($num>= $_RANGE_VAR_[0] && $num<= $_RANGE_VAR_[1]):?><li><a target="_blank" href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a></li><?php endif; ?>                        			
                          		  <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
                            <!-- <li><a target="_blank" href="show.html">一年期综合意外险，365天全方位呵护！</a></li>
                            <li><a target="_blank" href="show.html">团体短期综合意外险，适合短期工作、活动…</a></li>
                            <li><a target="_blank" href="show.html">平安银行新一贷，本年度降幅已达15%！</a></li> -->
                          </ul>
              </div>
            <div class="index">
                          <h3><a href="/grid_zz/index.php/Home/Index/news?type=中证独家视点">中证独家视点</a></h3>
                          <p>
                          	 <?php $num = '1'; ?> 
                          	<?php if(is_array($newsList)): foreach($newsList as $key=>$vo): if(($vo["type"]) == "中证独家视点"): if(($num) == "1"): ?><a target="_blank" href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (subtext($vo["title"],18)); ?></a><?php endif; ?>
                          		 <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
                          	<!-- <?php if(is_array($keywordList)): foreach($keywordList as $key=>$vo): if(($vo["type"]) == "中证独家视点"): ?><a href="#" target="_blank"><?php echo ($vo["name"]); ?></a>&nbsp;&nbsp;<?php endif; endforeach; endif; ?> -->
                              <!-- <a href="#" target="_blank">车险</a>
                              <a href="#" target="_blank">少儿险</a>
                              <a href="#" target="_blank">老人险</a>
                              <a href="#" target="_blank">万能险</a>
                              <a href="3" target="_blank">分红险</a>
                              <a href="#" target="_blank">企业年金</a> -->
                          </p>
                          
                          <ul>
                          	
                          	<?php $num = '1'; ?> 
                          	<?php if(is_array($newsList)): foreach($newsList as $key=>$vo): if(($vo["type"]) == "中证独家视点"): $_RANGE_VAR_=explode(',',"2,8");if($num>= $_RANGE_VAR_[0] && $num<= $_RANGE_VAR_[1]):?><li><a target="_blank" href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a></li><?php endif; ?>                        			
                          		  <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
                            <!-- <li><a target="_blank" href="show.html">一年期综合意外险，365天全方位呵护！</a></li>
                            <li><a target="_blank" href="show.html">团体短期综合意外险，适合短期工作、活动和…</a></li>
                            <li><a target="_blank" href="show.html">平安银行新一贷，本年度降幅已达15%！</a></li> -->
                          </ul>
              </div>
            <div class="index">
                          <h3><a href="/grid_zz/index.php/Home/Index/news?type=中证政策前瞻">中证政策前瞻</a></h3>
                          <p>
                          	 <?php $num = '1'; ?> 
                          	<?php if(is_array($newsList)): foreach($newsList as $key=>$vo): if(($vo["type"]) == "中证政策前瞻"): if(($num) == "1"): ?><a target="_blank" href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (subtext($vo["title"],16)); ?></a><?php endif; ?>
                          		 <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
                          	<!-- <?php if(is_array($keywordList)): foreach($keywordList as $key=>$vo): if(($vo["type"]) == "中证政策前瞻"): ?><a href="#" target="_blank"><?php echo ($vo["name"]); ?></a>&nbsp;&nbsp;<?php endif; endforeach; endif; ?> -->
                              <!-- <a href="#" target="_blank">车险</a>
                              <a href="#" target="_blank">少儿险</a>
                              <a href="#" target="_blank">老人险</a>
                              <a href="#" target="_blank">万能险</a>
                              <a href="3" target="_blank">分红险</a>
                              <a href="#" target="_blank">企业年金</a> -->
                          </p>
                          
                          <ul>
                          	<?php $num = '1'; ?> 
                          	<?php if(is_array($newsList)): foreach($newsList as $key=>$vo): if(($vo["type"]) == "中证政策前瞻"): $_RANGE_VAR_=explode(',',"2,8");if($num>= $_RANGE_VAR_[0] && $num<= $_RANGE_VAR_[1]):?><li><a target="_blank" href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a></li><?php endif; ?>                        			
                          		  <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
                            <!-- <li><a target="_blank" href="show.html">一年期综合意外险，365天全方位呵护！</a></li>
                            <li><a target="_blank" href="show.html">团体短期综合意外险，适合短期工作、活动…</a></li>
                            <li><a target="_blank" href="show.html">平安银行新一贷，本年度降幅已达15%！</a></li> -->
                          </ul>
              </div>  
          </div>      
   </div>
   
    <!-- 广告2 -->
   <div class="content_05"><a href="<?php echo ($link2["action"]); ?>"><img src="<?php echo ($link2["imgurl"]); ?>"/></a></div>
  <!-- <div class="headline">
  	<div class="title03"><a href="news.html"><img src="/grid_zz/Public/images/headline.jpg" /></a></div>
    <div class="main">
    	 <table class="Hotnews">
        	<tr><td class="HotH1"><a href="show.html">市局出台《关于进一步严明纪律加强作风建设的若干意见</a></td></tr>
            <tr><td class="Hotlink">
              <a href="show.html">抓学习 抓作风 抓环境 促改革</a>&nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="show.html">省委常委会会议通报全省落实"中</a>&nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="show.html">人民日报评论员：活动善始障</a>
            </td></tr>
        </table>
        <table class="Hotnews">
        	<tr><td class="HotH1">
        		 <a href="show.html">市局出台《关于进一步严明纪律加强作风建设的若干意见</a> 
        		
        		<?php $num = '1'; ?>   			
            	<?php if(is_array($newsList)): foreach($newsList as $k=>$vo): if(($vo["type"]) == "今日市场头条"): if(($num) == "1"): ?><a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?></a><?php endif; ?>
            			 <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
        		
        		</td></tr>
            <tr><td class="Hotlink">
            	<?php $num = '1'; ?>   			
            	<?php if(is_array($newsList)): foreach($newsList as $k=>$vo): if(($vo["type"]) == "今日市场头条"): if(($num) > "1"): ?><a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;<?php endif; ?>
            			 <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
              <a href="show.html">抓学习 抓作风 抓环境 促改革</a>&nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="show.html">省委常委会会议通报全省落实"中</a>&nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="show.html">人民日报评论员：活动善始障</a> 
            </td></tr>
        </table>
    </div>
  </div> -->
  
        
    <div class="content_03">
            <div class="index" style="border-left:0;">              
                <h3><a href="/grid_zz/index.php/Home/Index/news?type=中证行业研究">中证行业研究</a></h3>
                <div class="hot">    	
                <?php $num = '1'; ?>   			
            	<?php if(is_array($newsList)): foreach($newsList as $k=>$vo): if(($vo["type"]) == "中证行业研究"): if(($num) == "1"): ?><li><a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (subtext($vo["title"],12)); ?></a></li><?php endif; ?>
            			 <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
            	
                </div>
                <ul>
                <?php $num = '1'; ?>   			
            	<?php if(is_array($newsList)): foreach($newsList as $k=>$vo): if(($vo["type"]) == "中证行业研究"): $_RANGE_VAR_=explode(',',"2,8");if($num>= $_RANGE_VAR_[0] && $num<= $_RANGE_VAR_[1]):?><li><a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?></a></li><?php endif; ?>
            			 <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
                    <!-- <li><a href="show.html">解读上海楼市直面行业转变——2015德佑链家半</a></li>
                    <li><a href="show.html">触及长三角 布局全上海 德佑链家一二手全面升</a></li>            
                    <li><a href="show.html">德佑链家携手华美世居 打造苏州房产经纪第一</a></li>
                    <li><a href="show.html">德佑链家成"顶级国宾，东郊中心"座上宾</a></li>        
                    <li><a href="show.html">6月底交易爆量 上半年成交量创六年同期新高</a></li> -->
                </ul>
              </div>
            
            <div class="index">              
                <h3><a href="/grid_zz/index.php/Home/Index/news?type=中证个股资讯">中证个股资讯</a></h3>
                <div class="hot">
                	<!-- <a href="show.html">济南二手房交易火得离谱 有经纪人月赚10万元</a> -->
                	 <?php $num = '1'; ?>   			
            	<?php if(is_array($newsList)): foreach($newsList as $k=>$vo): if(($vo["type"]) == "中证个股资讯"): if(($num) == "1"): ?><li><a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (subtext($vo["title"],12)); ?></a></li><?php endif; ?>
            			 <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
                </div>
                <ul>
                	 <?php $num = '1'; ?>   			
            	<?php if(is_array($newsList)): foreach($newsList as $k=>$vo): if(($vo["type"]) == "中证个股资讯"): $_RANGE_VAR_=explode(',',"2,8");if($num>= $_RANGE_VAR_[0] && $num<= $_RANGE_VAR_[1]):?><li><a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?></a></li><?php endif; ?>
            			 <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
                    <!-- <li><a href="show.html">解读上海楼市直面行业转变——2015德佑链家半</a></li>          
                    <li><a href="show.html">德佑链家携手华美世居 打造苏州房产经纪第一</a></li>
                    <li><a href="show.html">德佑链家成"顶级国宾，东郊中心"座上宾</a></li>        
                    <li><a href="show.html">6月底交易爆量 上半年成交量创六年同期新高</a></li>
                    <li><a href="show.html">济源2.4亿垃圾焚烧BOT项目开建在即</a></li> -->
                </ul>
              </div>
            
            <div class="index">              
                <h3><a href="/grid_zz/index.php/Home/Index/news?type=市场数据">市场数据</a></h3>
                <div class="hot">
                	<!-- <a href="show.html">济南二手房交易火得离谱 有经纪人月赚10万元</a> -->
                	<?php $num = '1'; ?>   			
            	<?php if(is_array($newsList)): foreach($newsList as $k=>$vo): if(($vo["type"]) == "市场数据"): if(($num) == "1"): ?><li><a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (subtext($vo["title"],12)); ?></a></li><?php endif; ?>
            			 <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
                </div>
                <ul>
                	<?php $num = '1'; ?>   			
            	<?php if(is_array($newsList)): foreach($newsList as $k=>$vo): if(($vo["type"]) == "市场数据"): $_RANGE_VAR_=explode(',',"2,8");if($num>= $_RANGE_VAR_[0] && $num<= $_RANGE_VAR_[1]):?><li><a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?></a></li><?php endif; ?>
            			 <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
                    <!-- <li><a href="show.html">解读上海楼市直面行业转变——2015德佑链家半</a></li>          
                    <li><a href="show.html">德佑链家携手华美世居 打造苏州房产经纪第一</a></li>
                    <li><a href="show.html">德佑链家成"顶级国宾，东郊中心"座上宾</a></li>        
                    <li><a href="show.html">6月底交易爆量 上半年成交量创六年同期新高</a></li>
                    <li><a href="show.html">济源2.4亿垃圾焚烧BOT项目开建在即</a></li> -->
                </ul>
              </div>
            
            <div class="index">              
                <h3><a href="/grid_zz/index.php/Home/Index/news?type=产品个股回顾">产品个股回顾</a></h3>
                <div class="hot">
                	<!-- <a href="show.html">济南二手房交易火得离谱 有经纪人月赚10万元</a> -->
                	<?php $num = '1'; ?>   			
            	<?php if(is_array($newsList)): foreach($newsList as $k=>$vo): if(($vo["type"]) == "产品个股回顾"): if(($num) == "1"): ?><li><a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (subtext($vo["title"],12)); ?></a></li><?php endif; ?>
            			 <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
                </div>
                <ul>
                	
                	<?php $num = '1'; ?>   			
            	<?php if(is_array($newsList)): foreach($newsList as $k=>$vo): if(($vo["type"]) == "产品个股回顾"): $_RANGE_VAR_=explode(',',"2,8");if($num>= $_RANGE_VAR_[0] && $num<= $_RANGE_VAR_[1]):?><li><a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?></a></li><?php endif; ?>
            			 <span style="display: none"><?php echo ($num++); ?></span><?php endif; endforeach; endif; ?>
                    <!-- <li><a href="show.html">解读上海楼市直面行业转变——2015德佑链家半</a></li>          
                    <li><a href="show.html">德佑链家携手华美世居 打造苏州房产经纪第一</a></li>
                    <li><a href="show.html">德佑链家成"顶级国宾，东郊中心"座上宾</a></li>        
                    <li><a href="show.html">6月底交易爆量 上半年成交量创六年同期新高</a></li>
                    <li><a href="show.html">济源2.4亿垃圾焚烧BOT项目开建在即</a></li> -->
                </ul>
              </div>
      </div>  
   
   <div class="content_05"><a href="<?php echo ($link3["action"]); ?>"><img src="<?php echo ($link3["imgurl"]); ?>"/></a></div>
   
  <div class="content_04">
		  <div class="content_04_left">          		
  			<div class="content_04A">
  				<div class="title02"><h3><a href="/grid_zz/index.php/Home/Index/experts">专家解盘</a></h3></div>
            	<div class="main">
            		
                	<div class="index-experts" style="border-left:0;padding-left:8px;">
                    	<div class="e-01">
                            <div class="e-object">
                                <img src="<?php echo ($experts0["imgurl"]); ?>" />
                               <span><?php echo ($experts0["name"]); ?></span>
                            </div>
                             <div class="e-lable"><?php echo (mb_substr($experts0["introduce"],0,40,'utf-8')); ?><a href="/grid_zz/index.php/Home/Index/experts_introduce?id=<?php echo ($experts0["id"]); ?>">[详细]</a></div>
                        	 <div class="e-star">星级：<span><?php echo ($experts0["star"]); ?></span></div>
                         </div>
                        <ul>
                        	<?php if(is_array($expertsnews0)): foreach($expertsnews0 as $key=>$vo): ?><li><a href="/grid_zz/index.php/Home/Index/video_show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["name"],0,12,'utf-8')); ?></a></li><?php endforeach; endif; ?>
                            <!-- <li><a href="video-show.html">大牛市开启——不容错过</a></li> -->
                        </ul>
                    </div>
                    
                	<div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                                <img src="<?php echo ($experts1["imgurl"]); ?>" />
                               <span><?php echo ($experts1["name"]); ?></span>
                            </div>
                             <div class="e-lable"><?php echo (mb_substr($experts1["introduce"],0,40,'utf-8')); ?><a href="/grid_zz/index.php/Home/Index/experts_introduce?id=<?php echo ($experts1["id"]); ?>">[详细]</a></div>
                        	 <div class="e-star">星级：<span><?php echo ($experts1["star"]); ?></span></div>
                         </div>
                        <ul>
                        	<?php if(is_array($expertsnews1)): foreach($expertsnews1 as $key=>$vo): ?><li><a href="/grid_zz/index.php/Home/Index/video_show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["name"],0,12,'utf-8')); ?></a></li><?php endforeach; endif; ?>
                            <!-- <li><a href="video-show.html">工信部：将出台多项措施支持机器</a></li>          
                            <li><a href="video-show.html">大牛市开启——不容错过</a></li> -->
                        </ul>
                    </div>
                    
                    <div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                                <img src="<?php echo ($experts2["imgurl"]); ?>" />
                               <span><?php echo ($experts2["name"]); ?></span>
                            </div>
                             <div class="e-lable"><?php echo (mb_substr($experts2["introduce"],0,40,'utf-8')); ?><a href="/grid_zz/index.php/Home/Index/experts_introduce?id=<?php echo ($experts2["id"]); ?>">[详细]</a></div>
                        	 <div class="e-star">星级：<span><?php echo ($experts2["star"]); ?></span></div>
                         </div>
                        <ul>
                        	<?php if(is_array($expertsnews2)): foreach($expertsnews2 as $key=>$vo): ?><li><a href="/grid_zz/index.php/Home/Index/video_show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["name"],0,12,'utf-8')); ?></a></li><?php endforeach; endif; ?>
                            <!-- <li><a href="video-show.html">工信部：将出台多项措施支持机器</a></li>          
                            <li><a href="video-show.html">大牛市开启——不容错过</a></li> -->
                        </ul>
                    </div>
                    
                </div>
            </div>
  			<div class="content_04B">
  				<div class="title02"><h5>最新点播</h5></div>
            	<ul class="video">  
            		
         <?php if(is_array($videoList)): foreach($videoList as $key=>$vo): ?><li>
                    <div class="videolable">
                    	<a href="/grid_zz/index.php/Home/Index/video_show?id=<?php echo ($vo["id"]); ?>"><img src="<?php echo ($vo["imgurl"]); ?>" /></a>
                    </div>
                    <div class="videoText"><a href="/grid_zz/index.php/Home/Index/video_show?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a></div>
                </li><?php endforeach; endif; ?>
                <!-- <li>
                    <div class="videolable">
                    	<a href="video-show.html"><img src="/grid_zz/Public/picfile/112.jpg" /></a>
                    </div>
                    <div class="videoText"><a href="video-show.html">2015年7月17日《黑马竞选》</a></div>
                </li>
                <li>
                    <div class="videolable">
                    	<a href="video-show.html"><img src="/grid_zz/Public/picfile/111.jpg" /></a>
                    </div>
                    <div class="videoText"><a href="video-show.html">2015年7月17日《黑马竞选》</a></div>
                </li>
                <li>
                    <div class="videolable">
                    	<a href="video-show.html"><img src="/grid_zz/Public/picfile/112.jpg" /></a>
                    </div>
                    <div class="videoText"><a href="video-show.html">2015年7月17日《黑马竞选》</a></div>
                </li>
                <li>
                    <div class="videolable">
                    	<a href="video-show.html"><img src="/grid_zz/Public/picfile/111.jpg" /></a>
                    </div>
                    <div class="videoText"><a href="video-show.html">0716今日股市：指数"失真" 期指成多空力量突破口</a></div>
                </li>
                <li>
                    <div class="videolable">
                    	<a href="video-show.html"><img src="/grid_zz/Public/picfile/112.jpg" /></a>
                    </div>
                    <div class="videoText"><a href="video-show.html">2015年7月17日《黑马竞选》</a></div>
                </li>
                <li>
                    <div class="videolable">
                    	<a href="video-show.html"><img src="/grid_zz/Public/picfile/111.jpg" /></a>
                    </div>
                    <div class="videoText"><a href="video-show.html">0716今日股市：指数"失真" 期指成多空力量突破口</a></div>
                </li>
                <li>
                    <div class="videolable">
                    	<a href="video-show.html"><img src="/grid_zz/Public/picfile/112.jpg" /></a>
                    </div>
                    <div class="videoText"><a href="video-show.html">2015年7月17日《黑马竞选》</a></div>
                </li> -->
            </ul>
            </div>
          </div>
          
         <div class="content_04_right">
         	<div class="content_04C">
                 <h2>券商研报</h2>
        		<h3 style="text-align:right; line-height:20px;"><a href="/grid_zz/index.php/Home/Index/news?type=券商研报">精华></a></h3>
        	</div>
                
            <div class="focus" id="focus002">
                <ul>          
                	<?php if(is_array($linkList)): foreach($linkList as $key=>$vo): if(($vo["type"]) == "右下脚广告"): ?><li><a href="<?php echo ($vo["action"]); ?>" target="_blank"><img src="<?php echo ($vo["imgurl"]); ?>"/></a></li><?php endif; endforeach; endif; ?>
                    <!-- <li><a href="#" target="_blank"><img src="/grid_zz/Public/picfile/201.jpg"/></a></li>
                    <li><a href="#" target="_blank"><img src="/grid_zz/Public/picfile/202.jpg"/></a></li> -->
                </ul>
            </div>         
         </div>   
            
   </div>
   
  <div class="content_05">
  		<div class="content_05_link">
  			<div class="content_top"><h2>行销支持</h2></div>
              <ul>
              	
              	<?php if(is_array($linkList)): foreach($linkList as $key=>$vo): if(($vo["type"]) == "行销支持"): ?><li><a href="<?php echo ($vo["action"]); ?>" target="_blank"><?php echo ($vo["name"]); ?></a></li><?php endif; endforeach; endif; ?>
              	
                <!-- <li><a href="http://www.pingan.com/homepage/dailikehu.htm" target="_blank">代理客户</a></li>
                <li><a href="https://sales.pa18.com/login" target="_blank">行销支持管理系统</a></li>
                <li><a href="https://sales.pa18.com/login" target="_blank">产险个人行销系统</a></li>
                <li><a href="http://ecss.pingan.com/" target="_blank">平安团体E行销系统ECSS</a></li>
                <li><a href="https://pwm.pingan.com/umlogon.jsp" target="_blank">信托私人财富管理系统</a></li>
                <li><a href="https://icore-pts.pingan.com.cn/ebusiness/login.jsp" target="_blank">产险好伙伴</a></li> -->
              </ul>
        </div>
  		<div class="content_05_link">
  			<div class="content_top"><h2>友情链接</h2></div>
              <ul>
              		<?php if(is_array($linkList)): foreach($linkList as $key=>$vo): if(($vo["type"]) == "友情链接"): ?><li><a href="<?php echo ($vo["action"]); ?>" target="_blank"><?php echo ($vo["name"]); ?></a></li><?php endif; endforeach; endif; ?>
                <!-- <li><a href="http://weibo.com/pingan" target="_blank">平安官方微博</a></li>
                <li><a href="http://www.111.com.cn/" target="_blank">壹药网</a></li>
                <li><a href="http://www.mingyuanfund.com/" target="_blank">明园慈善基金</a></li>
                <li><a href="http://www.yp900.com/" target="_blank">快易捷药品交易网</a></li>
                <li><a href="http://learn.pingan.com.cn/ilearn/" target="_blank">平安学习平台</a></li>
                <li><a href="http://www.yqycloud.com/?src=PASY" target="_blank">壹企业</a></li> -->
              </ul>
        </div>
  </div>
      
    	<!-- 固定条 -->
     <div id="foot">
    	<div class="margin">
        <div class="foot_lable">
            <a href="/grid_zz/index.php/Home/Index/about?type=关于我们" target="_blank">关于我们</a>　|　
            <a href="javascript:#" target="_blank">法律声明</a>　|　
            <a href="javascript:#" target="_blank">网站地图</a>　|　
            <a href="/grid_zz/index.php/Home/Index/about?type=联系我们" target="_blank">联系我们</a>
        </div>
        备案号  粤ICP备15073810号
		版权所有 中证财讯网&nbsp;&nbsp;
<script src="http://s11.cnzz.com/z_stat.php?id=1256670869&web_id=1256670869 " language="JavaScript"></script>
		<p style=" margin:5px 0; line-height:21px;">
        <B style="color:#990000;">股市有风险，入市须谨慎</B><br/>
        中证财讯所有信息内容及所有终端产品内容仅供参考，投资者应根据自身情况，理性投资。投资者如据此操作，风险自担。
    </p>
        </div>
	</div>

   
</div>


<div class="pull-service">
    <div class="service-top"><img src="/grid_zz/Public/images/service-01.gif" /></div>
    <div class="pull-order"><a href="/grid_zz/index.php/Home/Index/order.html"><img src="/grid_zz/Public/images/service-02.gif" /></a></div>
    <ul class="service-center">
    	<li><span class="Cred">在线客服</span></li>
    	<li>
    		<!-- <script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODA0NDMwNl8zNDA2ODVfNDAwNzIzNzk4OF8"></script> -->
    	</li>
    </ul>
    <div class="service-bottom"><img src="/grid_zz/Public/images/service-03.gif" /></div>
     <div style="margin-top:3px;"><img src="/grid_zz/Public/images/qrcode.jpg" width="100%" /></div>
</div>

<!-- 强制QQ 聊天 -->
<!-- <div style="display:none">
<iframe src="tencent://message/?Menu=yes&amp;amp;uin=938044306&amp;amp;Service=58&amp;amp;SigT=A7F6FEA02730C9884376CF566EDBFE7AA4FCE367F0392F3724739F31FEF2090060409A1581B1B84890FBC8D2E898AC49A63E0275CBC33F2D4701CA70B34DEC94190250884D4A4C432ECEC1FB468D6DF0C64786076E7679681DA52AB95477CB7151857AADD368ADC23A6B81532BDB1AC84F24F48F83D1D8D8&amp;amp;SigU=30E5D5233A443AB2D52B887E65C7ECDED5A5763D2BD7F760975007EFA231D717F84B05480BE14A18FAE2E3589F4654B378AB9E3B646620B2D16279C49DCBE02E6289488A4DC0CBE7" style="display: none;"></iframe>
</div> -->

</body>
</html>