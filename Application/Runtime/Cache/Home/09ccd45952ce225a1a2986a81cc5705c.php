<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="shortcut icon" href="/GRID_ZZ/Public/res/favicon.ico" type="image/x-icon">
	<title><?php echo ($type); ?></title>
	<link rel="stylesheet" href="/GRID_ZZ/Public/zzcss/base.css" type="text/css" />
	<link rel="stylesheet" href="/GRID_ZZ/Public/zzcss/columns.css" type="text/css" />
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
                <a href="/GRID_ZZ/index.php/Home/Index/register.html">注册</a>
            </div>
            <div class="pull-right">
                <a href="javascript:#">电脑版</a>
                <a href="javascript:#">手机客户端</a>
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

    <!-- 固定条 -->
   <div class="bar">
    <div class="margin">
        <div class="top02">
                  <div class="pull-left">
                      <img src="/GRID_ZZ/Public/images/logo.jpg" />
                  </div>
                  <div class="pull-right">
                      <!-- <img src="/GRID_ZZ/Public/images/top-banner.jpg" /> -->
                      <embed src="/GRID_ZZ/Public/images/top.swf" width="760" height="104"></embed>
                  </div>
        </div>
        <div class="nav">
              <ul>    
                  <li><a href="/GRID_ZZ/index.php/Home/Index/index"
                  	<?php if((ACTION_NAME) == "index"): ?>class="active"<?php endif; ?>
                  	>首页</a></li>            
                  <li><a href="/GRID_ZZ/index.php/Home/Index/news?type=金融服务"
                  	<?php if(($type) == "金融服务"): ?>class="active"<?php endif; ?>
                  	>金融服务</a></li> 
                  <li><a href="/GRID_ZZ/index.php/Home/Index/news?type=投资锦囊"
                  	<?php if(($type) == "投资锦囊"): ?>class="active"<?php endif; ?>
                  	>投资锦囊</a></li>  
                  <li><a href="/GRID_ZZ/index.php/Home/Index/experts" 
                  	<?php if((ACTION_NAME) == "experts"): ?>class="active"<?php endif; ?>
                  	>专家解盘</a></li>  
                  <li><a href="/GRID_ZZ/index.php/Home/Index/nlist?type=实盘跟踪"
                  	<?php if((ACTION_NAME) == "list"): ?>class="active"<?php endif; ?>
                  	>实盘跟踪</a></li>
                  <li><a href="/GRID_ZZ/index.php/Home/Index/product"
                  	<?php if((ACTION_NAME) == "product"): ?>class="active"<?php endif; ?>
                  	>产品</a></li>
                  <li><a href="/GRID_ZZ/index.php/Home/Index/about"
                  	<?php if((ACTION_NAME) == "about"): ?>class="active"<?php endif; ?>
                  	>关于中证</a></li>
              </ul>  
              <div class="search">
             <form id="form1" action="/GRID_ZZ/index.php/Home/Index/search" method="get">     
                <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><input type="text" id="keyword" name="keyword" class="inputText" placeholder="请输入关键字"/> </td>
                        <td><input name="search" type="button" class="inputBtn" value="搜索" onclick="doSubmit()" /></td>
                    </tr>
                </table>
             </form>
              </div>
           </div>
    </div>
</div>

<script type="text/javascript">
	
	function doSubmit(){
		
		document.getElementById('form1').submit();
	}
	
</script>


<div id="container"> 
   <div class="ordinary">
   		<div class="ordinary-side">
        	<ul class="side-menu">
        	  <li><a href="/GRID_ZZ/index.php/Home/Index/about?type=关于我们"
        	  	<?php if(($type) == "关于我们"): ?>class="active"<?php endif; ?>
        	  	>关于我们</a></li>
        	  	     	
              <li><a href="/GRID_ZZ/index.php/Home/Index/about?type=荣誉资质"
              	<?php if(($type) == "荣誉资质"): ?>class="active"<?php endif; ?>
              	>荣誉资质</a></li>
              
              <li><a href="/GRID_ZZ/index.php/Home/Index/about?type=明星团队"
              	<?php if(($type) == "明星团队"): ?>class="active"<?php endif; ?>
              	>明星团队</a></li>
              
              <li><a href="/GRID_ZZ/index.php/Home/Index/order"
              	<?php if((ACTION_NAME) == "order"): ?>class="active"<?php endif; ?>
              	>预约开户</a></li>
              
              <li><a href="/GRID_ZZ/index.php/Home/Index/about?type=联系我们"
              	<?php if(($type) == "联系我们"): ?>class="active"<?php endif; ?>
              	>联系我们</a></li>
              <!-- <li><a href="about.html">关于我们</a></li>
              <li><a href="about.html">新华大宗</a></li>
              <li><a href="about.html">荣誉资质</a></li>
              <li><a href="about.html">明星团队</a></li>
              <li><a href="about.html">预约开户</a></li>
              <li><a href="about.html" class="active">联系我们</a></li> -->
            </ul>
        </div>
   		<div class="ordinary-main">
            <div class="title"><h3><?php echo ($type); ?></h3></div>
        	<div class="main">
        		
        			<?php echo ($document["content"]); ?>
            <!-- <p>
           		        中证网是由新华社主办的中国证券报社倾力打造的金融证券网站，创办于1996年1月。经过十多年的发展，中证网已成为我国最具影响力的金融证券网站之一。 2009年中证网被中国证监会指定为创业板信息披露网站。</p>
           		        <p>    中证网每天24小时滚动发布大量的国内外财经资讯，并在第一时间提供全面准确的上市公司新闻、信息、公告及证券市场的最新动态和评述。   </p>
           		        <p>    中证网内容涵盖国内宏观经济金融形势、产业动态、港澳台消息、国际财经等，新闻报道涉及证券、期货、基金、银行、货币、保险、外汇、黄金、房地产、收藏、产权等诸多领域。</p>
           		        <p>依托新华通讯社的整体新闻采集能力与中国证券报社在金融证券领域的权威地位，中证网已成为国内首选的专业权威的财经新闻发布平台。每天，国内外众多的大型门户网站、各类财经/投资类网站、证券公司/基金公司网站从中证网转发大量新闻报道。 </p>
           		        <p>    作为国内最为著名的蓝筹路演网，中证网几乎囊括了所有大型蓝筹上市公司的网上路演，并为众多拟上市公司及基金管理公司提供网上推介、路演及直播服务。</p>
           		        <p>    我们的目标是：建成具有国际领先影响力的金融证券资讯平台，树立网上金融证券信息发布的权威地位，开展专业实用的网上金融社区服务，为金融证券界人士提供一个全面即时的政策观象、市场评析、资料检索、观点交流和上市公司投资者关系管理平台。</p>
           		        <p>    网络合作咨询电话：（010）63070250<br />
           		              路演推介咨询电话：（010）63070551<br />
           		              传真号码：（010）63070491<br />
           		              电子信箱：market@cs.com.cn </p> -->
        	</div>
        </div>
   </div>
</div>


  	<!-- 固定条 -->
     <div id="foot">
    	<div class="margin">
        <div class="foot_lable">
            <a href="/GRID_ZZ/index.php/Home/Index/about?type=关于我们" target="_blank">关于我们</a>　|　
            <a href="javascript:#" target="_blank">法律声明</a>　|　
            <a href="javascript:#" target="_blank">网站地图</a>　|　
            <a href="/GRID_ZZ/index.php/Home/Index/about?type=联系我们" target="_blank">联系我们</a>
        </div>
        增值电信业务经营许可证 粤B2-20050348号 互联网视听节目服务(AVSP):粤备2015002 粤ICP备14046937号<br/>
		版权所有 中证财讯网
        </div>
	</div>

</body>
</html>