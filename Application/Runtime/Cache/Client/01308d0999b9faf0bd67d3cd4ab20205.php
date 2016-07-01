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
   	
   	       <?php if(!in_array(($news["type"]), explode(',',"中证投资内参,中证投资锦囊,中证独家调研"))): ?><div class="show">
                    <div class="show-title">
                       <h1><?php echo (mb_substr($news["title"],0,20,'utf-8')); ?></h1>
                       <h5><?php echo ($news["source"]); ?> <?php echo ($news["author"]); ?> <?php echo ($news["intime"]); ?></h5>
                    </div>
                    
                      <?php echo ($news["content"]); ?>              
               </div><?php endif; ?>
               
           <?php if(in_array(($news["type"]), explode(',',"中证投资内参,中证投资锦囊,中证独家调研"))): ?><div class="show02">
                    <div class="show-title">
                        <h3><?php echo ($news["subject"]); ?></h3>
                        <span><?php echo ($news["intime"]); ?></span>
                    	<img src="/grid_zz/Public/images/show-tg.png" class="show-tg" />
                    </div>
                    <div class="show02-con">
                    	<div><strong style="color:#000;">影响事件：</strong></div>
                        <?php echo ($news["content"]); ?> 
                    </div>
                    <div class="show02-judge"><?php echo ($news["pingduan"]); ?></div>
                    <div class="show02-stock">
                    	<strong style="color:#666;">影响个股：</strong>
                    	<?php echo ($news["gegu"]); ?>
                    </div>
               </div><?php endif; ?> 
               
 <div id="div_attachment">
					
		 <!-- 如果有附件就显示 -->	     
	<?php if(!empty($news["attachmenturl"])): ?>附件：
		  <?php if(is_array($attachmenturlArr)): foreach($attachmenturlArr as $k=>$vo): ?><div>	      
		       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		       <a href="/grid_zz/index.php/Home/File/download?file_name=<?php echo ($attachmentArr[$k]); ?>&file_path=<?php echo C("LOCAL_UPLOAD"); echo ($vo); ?>" ><?php echo ($attachmentArr[$k]); ?></a>
		       
		     </div><?php endforeach; endif; endif; ?>
		    		  
</div>  
               
               <div class="related">
                  <div class="sub_title">相关新闻</div>
                    <ul class="column">          
                    	
                    <?php if(is_array($newsList)): foreach($newsList as $key=>$vo): ?><li><a href="/grid_zz/index.php/Client/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,18,'utf-8')); ?></a></li><?php endforeach; endif; ?>                                                            
                            <!-- <li><a href="show.html">保发展 保红线 保民生 为促进黄石经济……</a></li>   
                            <li><a href="show.html">为项目落地当好"马前卒"———访局长吴风雨</a></li>   
                            <li><a href="show.html">黄石部门奋力破解资源枯竭难题</a></li>   
                            <li><a href="show.html">黄石"三园一带"开发建设的思考</a></li>   
                            <li><a href="show.html">吴风雨局长接受十一五工作回顾访谈</a></li>
                         
                            <li><a href="show.html">为项目落地当好"马前卒"———访局长吴风雨</a></li>   
                            <li><a href="show.html">黄石部门奋力破解资源枯竭难题</a></li>   
                            <li><a href="show.html">黄石"三园一带"开发建设的思考</a></li>   
                            <li><a href="show.html">吴风雨局长接受十一五工作回顾访谈</a></li>
                            <li><a href="show.html">吴风雨局长接受十一五工作回顾访谈</a></li> -->
                    </ul>
              </div>
            
       </div>
</div>

</body>
</html>