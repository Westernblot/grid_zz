<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>中证财讯网</title>
	<link rel="stylesheet" href="/grid_zz/Public/zzcss/base.css" type="text/css" />
	<link rel="stylesheet" href="/grid_zz/Public/zzcss/columns.css" type="text/css" />
    <link rel="stylesheet" href="/grid_zz/Public/zzcss/swiper.css">
</head>

<body>

  <!-- 固定条 -->
   <div class="top">
	<div class="margin">
        <div class="top01">
            <div class="pull-left">
                <a href="index.html">设为首页</a>
                <a href="index.html">登录</a>
                <a href="index.html">注册</a>
            </div>
            <div class="pull-right">
                <a href="index.html">电脑版</a>
                <a href="index.html">手机客户端</a>
                <a href="index.html">加入我们</a>
            </div>
        </div>
    </div>
</div>

    <!-- 固定条 -->
   <div class="bar">
    <div class="margin">
        <div class="top02">
                  <div class="pull-left">
                      <img src="/grid_zz/Public/images/logo.jpg" />
                  </div>
                  <div class="pull-right">
                      <img src="/grid_zz/Public/images/top-banner.jpg" />
                  </div>
        </div>
        <div class="nav">
              <ul>    
                  <li><a href="/grid_zz/index.php/Home/Index/index"
                  	<?php if((ACTION_NAME) == "index"): ?>class="active"<?php endif; ?>
                  	>首页</a></li>            
                  <li><a href="/grid_zz/index.php/Home/Index/news?type=金融服务"
                  	<?php if(($type) == "金融服务"): ?>class="active"<?php endif; ?>
                  	>金融服务</a></li> 
                  <li><a href="/grid_zz/index.php/Home/Index/news?type=投资锦囊"
                  	<?php if(($type) == "投资锦囊"): ?>class="active"<?php endif; ?>
                  	>投资锦囊</a></li>  
                  <li><a href="/grid_zz/index.php/Home/Index/experts" 
                  	<?php if((ACTION_NAME) == "experts"): ?>class="active"<?php endif; ?>
                  	>专家解盘</a></li>  
                  <li><a href="/grid_zz/index.php/Home/Index/nlist?type=实盘跟踪"
                  	<?php if((ACTION_NAME) == "list"): ?>class="active"<?php endif; ?>
                  	>实盘跟踪</a></li>
                  <li><a href="/grid_zz/index.php/Home/Index/about"
                  	<?php if((ACTION_NAME) == "about"): ?>class="active"<?php endif; ?>
                  	>关于中证</a></li>
              </ul>  
              <div class="search">
                <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><input type="text" id="search" name="search" class="inputText" placeholder="请输入关键字"/> </td>
                        <td><input name="search" type="button" class="inputBtn" value="搜索" /></td>
                    </tr>
                </table>
              </div>
           </div>
    </div>
</div>

<div id="container"> 
   <div class="content_title"><a href="/grid_zz/index.php/Home/Index/index">首页</a>　>　<a href="/grid_zz/index.php/Home/Index/experts">专家解盘</a>　>　<a href="/grid_zz/index.php/Home/Index/experts_introduce?id=<?php echo ($video["experts_id"]); ?>"><?php echo ($video["experts_name"]); ?></a>　>　<span>正文</span></div>   
   <div class="content video-show">
   		<div class="video-show-left">
                 <h1><?php echo ($video["name"]); ?></h1>
                 <div class="video-show-main">
                 	<!-- <img src="<?php echo ($video["imgurl"]); ?>" width="754" height="544"/> -->
          <iframe width="754" height="544" src="<?php echo ($video["action"]); ?>" frameborder="0" allowfullscreen="">
          </iframe>
                 
                 </div>
                 <div class="show-foot">播出时间：<?php echo ($video["intime"]); ?></div>
                 
                 <div class="related">
                      <div class="sub_title"><h4>相关视频</h4></div>
                        <ul class="column">          
                        	
                        	<?php if(is_array($videoList)): foreach($videoList as $key=>$vo): ?><li><a href="/grid_zz/index.php/Home/Index/video_show?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>                                                          
                                <!-- <li><a href="video-show.html">保发展 保红线 保民生 为促进黄石经济……</a></li>   
                                <li><a href="video-show.html">为项目落地当好"马前卒"———访局长吴风雨</a></li>   
                                <li><a href="video-show.html">黄石部门奋力破解资源枯竭难题</a></li>   
                                <li><a href="video-show.html">黄石"三园一带"开发建设的思考</a></li>   
                                <li><a href="video-show.html">吴风雨局长接受十一五工作回顾访谈</a></li>
                             
                                <li><a href="video-show.html">为项目落地当好"马前卒"———访局长吴风雨</a></li>   
                                <li><a href="video-show.html">黄石部门奋力破解资源枯竭难题</a></li>   
                                <li><a href="video-show.html">黄石"三园一带"开发建设的思考</a></li>   
                                <li><a href="video-show.html">吴风雨局长接受十一五工作回顾访谈</a></li>
                                <li><a href="video-show.html">吴风雨局长接受十一五工作回顾访谈</a></li> -->
                        </ul>
                  </div>
        </div>
   		<div class="video-show-right">
        	<div class="block"></div>
            
            <div class="recommend">
                <div class="video-title">相关推荐</div>
<div class="swiper-container" style="height:472px;">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
            <ul class="video">  
                
                <?php if(is_array($videoList)): foreach($videoList as $key=>$vo): ?><li>
                        <div class="videolable">
                            <a href="/grid_zz/index.php/Home/Index/video_show?id=<?php echo ($vo["id"]); ?>"><img src="<?php echo ($vo["imgurl"]); ?>" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="/grid_zz/index.php/Home/Index/video_show?id=<?php echo ($vo["id"]); ?>" class="play"></a>
                        </div>
                        <div class="videoText"><a href="/grid_zz/index.php/Home/Index/video_show?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a></div>
                    </li><?php endforeach; endif; ?>
                    <!-- <li>
                        <div class="videolable">
                            <a href="video-show.html"><img src="/grid_zz/Public/picfile/3.jpg" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="video-show.html" class="play"></a>
                        </div>
                        <div class="videoText"><a href="video-show.html">2015年7月17日《黑马竞选》</a></div>
                    </li>
                    <li>
                        <div class="videolable">
                            <a href="video-show.html"><img src="/grid_zz/Public/picfile/3.jpg" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="video-show.html" class="play"></a>
                        </div>
                        <div class="videoText"><a href="video-show.html">2015年7月17日《黑马竞选》</a></div>
                    </li>
                    <li>
                        <div class="videolable">
                            <a href="video-show.html"><img src="/grid_zz/Public/picfile/3.jpg" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="video-show.html" class="play"></a>
                        </div>
                        <div class="videoText"><a href="video-show.html">2015年7月17日《黑马竞选》</a></div>
                    </li>
                    <li>
                        <div class="videolable">
                            <a href="video-show.html"><img src="/grid_zz/Public/picfile/3.jpg" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="video-show.html" class="play"></a>
                        </div>
                        <div class="videoText"><a href="video-show.html">0716今日股市：指数"失真" 期指成多空力量突破口</a></div>
                    </li>
                    <li>
                        <div class="videolable">
                            <a href="video-show.html"><img src="/grid_zz/Public/picfile/3.jpg" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="video-show.html" class="play"></a>
                        </div>
                        <div class="videoText"><a href="video-show.html">2015年7月17日《黑马竞选》</a></div>
                    </li>
                    <li>
                        <div class="videolable">
                            <a href="video-show.html"><img src="/grid_zz/Public/picfile/3.jpg" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="video-show.html" class="play"></a>
                        </div>
                        <div class="videoText"><a href="video-show.html">0716今日股市：指数"失真" 期指成多空力量突破口</a></div>
                    </li> -->
            </ul>
    </div>
    <!-- <div class="swiper-slide">
            <ul class="video">  
                
                    <li>
                        <div class="videolable">
                            <a href="video-show.html"><img src="/grid_zz/Public/picfile/3.jpg" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="video-show.html" class="play"></a>
                        </div>
                        <div class="videoText"><a href="video-show.html">2015年7月17日《黑马竞选》</a></div>
                    </li>
                    <li>
                        <div class="videolable">
                            <a href="video-show.html"><img src="/grid_zz/Public/picfile/3.jpg" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="video-show.html" class="play"></a>
                        </div>
                        <div class="videoText"><a href="video-show.html">2015年7月17日《黑马竞选》</a></div>
                    </li>
                    <li>
                        <div class="videolable">
                            <a href="video-show.html"><img src="/grid_zz/Public/picfile/3.jpg" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="video-show.html" class="play"></a>
                        </div>
                        <div class="videoText"><a href="video-show.html">2015年7月17日《黑马竞选》</a></div>
                    </li>
                    <li>
                        <div class="videolable">
                            <a href="video-show.html"><img src="/grid_zz/Public/picfile/3.jpg" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="video-show.html" class="play"></a>
                        </div>
                        <div class="videoText"><a href="video-show.html">0716今日股市：指数"失真" 期指成多空力量突破口</a></div>
                    </li>
                    <li>
                        <div class="videolable">
                            <a href="video-show.html"><img src="/grid_zz/Public/picfile/3.jpg" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="video-show.html" class="play"></a>
                        </div>
                        <div class="videoText"><a href="video-show.html">2015年7月17日《黑马竞选》</a></div>
                    </li>
                    <li>
                        <div class="videolable">
                            <a href="video-show.html"><img src="/grid_zz/Public/picfile/3.jpg" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="video-show.html" class="play"></a>
                        </div>
                        <div class="videoText"><a href="video-show.html">0716今日股市：指数"失真" 期指成多空力量突破口</a></div>
                    </li>
            </ul>
    </div>
    <div class="swiper-slide">
            <ul class="video">  
                
                    <li>
                        <div class="videolable">
                            <a href="video-show.html"><img src="/grid_zz/Public/picfile/3.jpg" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="video-show.html" class="play"></a>
                        </div>
                        <div class="videoText"><a href="video-show.html">2015年7月17日《黑马竞选》</a></div>
                    </li>
                    <li>
                        <div class="videolable">
                            <a href="video-show.html"><img src="/grid_zz/Public/picfile/3.jpg" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="video-show.html" class="play"></a>
                        </div>
                        <div class="videoText"><a href="video-show.html">2015年7月17日《黑马竞选》</a></div>
                    </li>
                    <li>
                        <div class="videolable">
                            <a href="video-show.html"><img src="/grid_zz/Public/picfile/3.jpg" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="video-show.html" class="play"></a>
                        </div>
                        <div class="videoText"><a href="video-show.html">2015年7月17日《黑马竞选》</a></div>
                    </li>
                    <li>
                        <div class="videolable">
                            <a href="video-show.html"><img src="/grid_zz/Public/picfile/3.jpg" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="video-show.html" class="play"></a>
                        </div>
                        <div class="videoText"><a href="video-show.html">0716今日股市：指数"失真" 期指成多空力量突破口</a></div>
                    </li>
                    <li>
                        <div class="videolable">
                            <a href="video-show.html"><img src="/grid_zz/Public/picfile/3.jpg" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="video-show.html" class="play"></a>
                        </div>
                        <div class="videoText"><a href="video-show.html">2015年7月17日《黑马竞选》</a></div>
                    </li>
                    <li>
                        <div class="videolable">
                            <a href="video-show.html"><img src="/grid_zz/Public/picfile/3.jpg" /></a>
                            <div class="tab-bg">00:23:33</div>
                        <a href="video-show.html" class="play"></a>
                        </div>
                        <div class="videoText"><a href="video-show.html">0716今日股市：指数"失真" 期指成多空力量突破口</a></div>
                    </li>
            </ul>
    </div> -->
  </div>
  <div class="swiper-pagination"></div>
</div>
<script src="js/swiper.js"></script> 
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 0,
		autoplay: 6000,
    });
	
</script>
            </div>
            
            <div class="content-right-atd">
                <a href="#"><img src="/grid_zz/Public/picfile/atd02.jpg"/></a>
            </div>
            
        </div>
   </div>
</div>


   <!-- 固定条 -->
     <div id="foot">
    	<div class="margin">
        <div class="foot_lable">
            <a href="/grid_zz/index.php/Home/Index/about?type=关于我们" target="_blank">关于我们</a>　|　
            <a href="#" target="_blank">法律声明</a>　|　
            <a href="#" target="_blank">网站地图</a>　|　
            <a href="/grid_zz/index.php/Home/Index/about?type=联系我们" target="_blank">联系我们</a>
        </div>
        增值电信业务经营许可证 粤B2-20050348号 互联网视听节目服务(AVSP):粤备2015002 粤ICP备14046937号<br/>
		版权所有 中证财讯网
        </div>
	</div>

</body>
</html>