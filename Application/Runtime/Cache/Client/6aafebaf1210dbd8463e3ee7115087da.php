<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>中证财讯通</title>
	<link rel="stylesheet" href="/grid_zz/Public/cxtcss/style.css" type="text/css" />
<script type="text/javascript" src="/grid_zz/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/demo.js"></script>
</head>

<body>
<div id="container"> 
   <div class="sub-banner">
    	<a href="#"><img src="/grid_zz/Public/images/2.jpg" width="950" height="100" /></a>
    </div>
     <div class="studio"> 
            <div class="studio-left">
            	<!-- <img src="/grid_zz/Public/picfile/111.jpg" width="678" height="543" /> -->
            	 <iframe width="678" height="543" src="<?php echo ($video["action"]); ?>" frameborder="0" allowfullscreen=""></iframe>
            </div>
            <div class="studio-right">
            	<div class="studio-title">视频解盘</div>
                <ul class="studio-list"> 
                	
                	<?php if(is_array($videoList)): foreach($videoList as $key=>$vo): ?><li 
                	     <?php if(($id) == $vo["id"]): ?>class="live-in"
                	     	<?php else: ?>
                	     	class="even"<?php endif; ?>
                		 ><span><a href="/grid_zz/index.php/Client/Index/video?id=<?php echo ($vo["id"]); ?>"><?php echo (substr($vo["intime"],5,10)); ?></span><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
                	
                    <!-- <li><span>07-28</span>精彩节目</li>
                    <li class="even"><span>07-25</span>精彩节目</li>
                    <li><span>07-24</span>精彩节目</li>
                    <li class="even"><span>07-24</span>精彩节目</li>
                    <li><span>07-18</span>今日股市</li>
                    <li class="even"><span>07-17</span>直播：财经早班车</li>
                    <li class="live-in"><span>07-16</span>直播：市场零距离直播中</li>
                    <li class="even"><span>07-16</span>直播：财经中间站</li>
                    <li><span>07-14</span>首席评论</li>
                    <li class="even"><span>07-14</span>直播：市场零距离</li>
                    <li><span>07:12</span>健康大财富</li>
                    <li class="even"><span>07-06</span>第一地产日播</li>
                    <li><span>07:01</span>解码财商</li> -->
               </ul>
               
                <!-- <div class='L-page'>
                    <a href='#' class='active'>1</a>
                    <a href='#'>2</a>
                    <a href='#'>3</a>
                    <a href='#'>4</a>
                    <a href='#'>5</a>
                    <a href='#'>6</a>
                    <a href='#'>7</a>
                    <a href='#'>8</a>
                </div> -->
                <?php echo ($page); ?>
            </div>
    </div>
    
    <div class="content">
   			<div class="sub_title">视频简介</div>
            <div class="video_main">
            	
            	<?php echo ($video["introduce"]); ?>
            	
              <!-- <p>　　对于下半年交通运输经济运行的走势问题，张大为对记者表示，综合相关部门的判断，交通运输部认为，虽然当前世界经济仍处于深度调整之中，复苏进程艰难曲折、复杂多变，但下半年我国外贸进出口形势将有所回暖，因此将对外贸运输产生积极影响。</p>
    
               <p>　　张大为分析说，在国内方面，随着打造大众创业、万众创新和增加公共产品、公共服务"双引擎"的不断驱动，"互联网+"行动的实施，以及去年下半年以来持续推出的定向调控措施逐步发力见效，宏观经济运行缓中趋稳，处于合理区间，与交通运输相关联的产业发展也趋于改善，这些都将为交通运输行业创造良好的发展环境。</p>
            -->
            </div>
   			<div class="sub_title">推荐视频</div>
            
<div class="carousel"> <a href="javascript:void(0);" class="prev disabled" id="prev-03">&nbsp; </a>
  <div class="jCarouselLite" id="demo-03">
    <ul class="video">  
    	
    	      <?php if(is_array($relateList)): foreach($relateList as $key=>$vo): ?><li>
                    <div class="videolable">
                    	<a href="/grid_zz/index.php/Client/Index/video?id=<?php echo ($vo["id"]); ?>"><img src="<?php echo ($vo["imgurl"]); ?>" /></a>
                        <!-- <div class="tab-bg">00:23:33</div> -->
                    </div>
                    <div class="videoText"><a href="/grid_zz/index.php/Client/Index/video?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a></div>
                </li><?php endforeach; endif; ?>
                <!-- <li>
                    <div class="videolable">
                    	<a href="#"><img src="/grid_zz/Public/picfile/1.jpg" /></a>
                        <div class="tab-bg">00:23:33</div>
                    </div>
                    <div class="videoText"><a href="#">2015年7月17日《黑马竞选》</a></div>
                </li>
                <li>
                    <div class="videolable">
                    	<a href="#"><img src="/grid_zz/Public/picfile/01.jpg" /></a>
                        <div class="tab-bg">00:23:33</div>
                    </div>
                    <div class="videoText"><a href="#">2015年7月17日《黑马竞选》</a></div>
                </li>
                <li>
                    <div class="videolable">
                    	<a href="#"><img src="/grid_zz/Public/picfile/03.jpg" /></a>
                        <div class="tab-bg">00:23:33</div>
                    </div>
                    <div class="videoText"><a href="#">2015年7月17日《黑马竞选》</a></div>
                </li>
                <li>
                    <div class="videolable">
                    	<a href="#"><img src="/grid_zz/Public/picfile/03.jpg" /></a>
                        <div class="tab-bg">00:23:33</div>
                    </div>
                    <div class="videoText"><a href="#">0716今日股市：指数"失真" 期指成多空力量突破口</a></div>
                </li>
                <li>
                    <div class="videolable">
                    	<a href="#"><img src="/grid_zz/Public/picfile/111.jpg" /></a>
                        <div class="tab-bg">00:23:33</div>
                    </div>
                    <div class="videoText"><a href="#">2015年7月17日《黑马竞选》</a></div>
                </li>
                <li>
                    <div class="videolable">
                    	<a href="#"><img src="/grid_zz/Public/picfile/111.jpg" /></a>
                        <div class="tab-bg">00:23:33</div>
                    </div>
                    <div class="videoText"><a href="#">0716今日股市：指数"失真" 期指成多空力量突破口</a></div>
                </li>
                <li>
                    <div class="videolable">
                    	<a href="#"><img src="/grid_zz/Public/picfile/01.jpg" /></a>
                        <div class="tab-bg">00:23:33</div>
                    </div>
                    <div class="videoText"><a href="#">2015年7月17日《黑马竞选》</a></div>
                </li>
                <li>
                    <div class="videolable">
                    	<a href="#"><img src="/grid_zz/Public/picfile/02.jpg" /></a>
                        <div class="tab-bg">00:23:33</div>
                    </div>
                    <div class="videoText"><a href="#">0716今日股市：指数"失真" 期指成多空力量突破口</a></div>
                </li><li>
                    <div class="videolable">
                    	<a href="#"><img src="/grid_zz/Public/picfile/13.jpg" /></a>
                        <div class="tab-bg">00:23:33</div>
                    </div>
                    <div class="videoText"><a href="#">2015年7月17日《黑马竞选》</a></div>
                </li>
                <li>
                    <div class="videolable">
                    	<a href="#"><img src="/grid_zz/Public/picfile/03.jpg" /></a>
                        <div class="tab-bg">00:23:33</div>
                    </div>
                    <div class="videoText"><a href="#">2015年7月17日《黑马竞选》</a></div>
                </li>
                <li>
                    <div class="videolable">
                    	<a href="#"><img src="/grid_zz/Public/picfile/01.jpg" /></a>
                        <div class="tab-bg">00:23:33</div>
                    </div>
                    <div class="videoText"><a href="#">2015年7月17日《黑马竞选》</a></div>
                </li>
                <li>
                    <div class="videolable">
                    	<a href="#"><img src="/grid_zz/Public/picfile/03.jpg" /></a>
                        <div class="tab-bg">00:23:33</div>
                    </div>
                    <div class="videoText"><a href="#">0716今日股市：指数"失真" 期指成多空力量突破口</a></div>
                </li> -->
            </ul>
  </div>
  <a href="javascript:void(0);" class="next" id="next-03">&nbsp; </a>
  <div class="clear"></div>
</div>
<!--carousel end--> 
<script type="text/javascript">
	$(document).ready(function(){
		$('#demo-03').jCarouselLite({
			btnPrev: '#prev-03',
			btnNext: '#next-03',
			circular: false,
			visible: 5
		});		
	});
	</script>
    
   </div>
</div>

</body>
</html>