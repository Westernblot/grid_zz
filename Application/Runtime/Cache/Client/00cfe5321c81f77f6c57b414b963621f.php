<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>中证财讯通</title>
	<link rel="stylesheet" href="/grid_zz/Public/cxtcss/style.css" type="text/css" />
</head>

<body>
<div id="container"> 
   <div class="content_title"><a href="/grid_zz/index.php/Home/Index/index">首页</a>　>　<a href="/grid_zz/index.php/Client/Index/news?type=<?php echo ($news["type"]); ?>"><?php echo ($news["type"]); ?></a>　>　<span>正文</span></div>   
   <div class="content">
               <div class="show02">
                    <div class="show-title">
                        <h3>这是一个主题</h3>
                        <span>来源 -- 作者 -- 时间</span>
                    	<img src="/grid_zz/Public/images/show-tg.png" class="show-tg" />
                    </div>
                    <div class="show02-con">
                    	<div><strong style="color:#000;">影响事件：</strong></div>
                        <?php echo ($news["content"]); ?> 
                    </div>
                    <div class="show02-judge">&ldquo;据此，我们预计，下半年交通运输主要实物量指标将略好于上半年，全年铁路公路水路客运量小幅增长，货运量、港口货物吞吐量稳步增长，交通固定资产投资规模维持高位。&rdquo;张大为说。</div>
                    <div class="show02-stock">
                    	<strong style="color:#666;">影响个股：</strong>
                    	风华高科(000636)
                    </div>
               </div>
               
               <div class="related">
                  <div class="sub_title">相关新闻</div>
                    <ul class="column">          
                    	
                    <?php if(is_array($newsList)): foreach($newsList as $key=>$vo): ?><li><a href="/grid_zz/index.php/Client/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,18,'utf-8')); ?></a></li><?php endforeach; endif; ?>                                                            
                    </ul>
              </div>
            
       </div>
</div>

</body>
</html>