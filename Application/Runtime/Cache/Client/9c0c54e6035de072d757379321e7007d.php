<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>中证财讯通</title>
	<link rel="stylesheet" href="/grid_zz/Public/cxtcss/style.css" type="text/css" />
</head>

<body>
<div id="container"> 
   <div class="sub-banner">
    	<img src="/grid_zz/Public/images/1.jpg" width="950" height="100" />
    </div>
   <div class="content">
   		<div class="content-experts">
            <div class="experts">
            	
            	
            	<?php if(is_array($expertsList)): foreach($expertsList as $key=>$vo): ?><div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                                <img src="<?php echo ($vo["imgurl"]); ?>" />
                            </div>
                            <div class="e-name"><?php echo ($vo["name"]); ?></div>
                             <div class="e-lable"><?php echo ($vo["introduce"]); ?><a href="/grid_zz/index.php/Client/Index/experts_introduce?id=<?php echo ($vo["id"]); ?>">[详细]</a></div>
                        	 <div class="e-star">星级：<span><?php echo ($vo["star"]); ?></span></div>
                         </div>
                    </div><?php endforeach; endif; ?>
   	  				<!-- <div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                                <a href="show.html"><img src="/grid_zz/Public/picfile/111.jpg" /></a>
                            </div>
                            <div class="e-name"><a href="show.html">曾邵鹏</a></div>
                             <div class="e-lable">中国证券报市场研究中心服务研究员，曾任主要研究新能源主要研究新能晨星中国，主要研研究新研究新究新能源主要研究新能源主要研究新能源、TMT相关行业…<a href="show.html">[详细]</a></div>
                        	 <div class="e-star">星级：<span>★★★★☆</span></div>
                         </div>
                    </div>
   	  				<div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                                <a href="show.html"><img src="/grid_zz/Public/picfile/2.jpg" /></a>
                            </div>
                            <div class="e-name"><a href="show.html">项俊波</a></div>
                             <div class="e-lable">中国证券报市场研究中心服务研究员，曾主要研究新能源主要中国证券报市场研究中心服务研究员新能任晨星中国研究新，主要研究新能源、T主要研究新能源MT相关行业…<a href="show.html">[详细]</a></div>
                        	 <div class="e-star">星级：<span>★★★★☆</span></div>
                         </div>
                    </div>
      				<div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                               <a href="show.html"><img src="/grid_zz/Public/picfile/2.jpg" /></a>
                            </div>
                            <div class="e-name"><a href="show.html">项俊波</a></div>
                             <div class="e-lable">中国证券报市场研究中心服务研究员，曾主要研究新能源主要研究新能中国证券报市场研究中心服务研究员中国，研究新研究新主要研究新能源、TMT相关行业主要研究新能源…<a href="show.html">[详细]</a></div>
                        	 <div class="e-star">星级：<span>★★★★☆</span></div>
                         </div>
                    </div>
   	  				<div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                                <a href="show.html"><img src="/grid_zz/Public/picfile/111.jpg" /></a>
                            </div>
                            <div class="e-name"><a href="show.html">曾邵鹏</a></div>
                             <div class="e-lable">中国证券报市场研究中心服务研究员，曾研究新研究新中国证券报市场研究中心服务研究员，主要研究新能源主要研究新能源主要研究新能源、TMT相关行业…<a href="show.html">[详细]</a></div>
                        	 <div class="e-star">星级：<span>★★★★☆</span></div>
                         </div>
                    </div>
   	  				<div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                                <a href="show.html"><img src="/grid_zz/Public/picfile/2.jpg" /></a>
                            </div>
                            <div class="e-name"><a href="show.html">项俊波</a></div>
                             <div class="e-lable">中国证券报市场研究中心服务研究员，曾研究新研究新研究新任晨星中国，主要研究新能源中国证券报市场研究务研究员务研究员要研究新能源MT相关行业…<a href="show.html">[详细]</a></div>
                        	 <div class="e-star">星级：<span>★★★★☆</span></div>
                         </div>
                    </div>
      				<div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                               <a href="show.html"><img src="/grid_zz/Public/picfile/2.jpg" /></a>
                            </div>
                            <div class="e-name"><a href="show.html">项俊波</a></div>
                             <div class="e-lable">中国证券报市场研究中心服务研究员，曾任晨星中国，主要研究新能源、TMT相关行务研究员务研究员务研究员务研究员务研究员务研究员务研究员业主要研究新能源…<a href="show.html">[详细]</a></div>
                        	 <div class="e-star">星级：<span>★★★★☆</span></div>
                         </div>
                    </div>
   	  				<div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                                <a href="show.html"><img src="/grid_zz/Public/picfile/111.jpg" /></a>
                            </div>
                            <div class="e-name"><a href="show.html">曾邵鹏</a></div>
                             <div class="e-lable">中国证券报市场研究中心服务研究员，曾任晨星中国，主要研究新能源主要研究新能源主务研究员务研究员务研究员务研究员务研究员务研究员务研究员要研究新能源、TMT相关行业…<a href="show.html">[详细]</a></div>
                        	 <div class="e-star">星级：<span>★★★★☆</span></div>
                         </div>
                    </div>
   	  				<div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                                <a href="show.html"><img src="/grid_zz/Public/picfile/2.jpg" /></a>
                            </div>
                            <div class="e-name"><a href="show.html">项俊波</a></div>
                             <div class="e-lable">中国证券报市场研究中心服务研究员，曾任晨星中国，主要研究新能源、T主要研究务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员新能源MT相关行业…<a href="show.html">[详细]</a></div>
                        	 <div class="e-star">星级：<span>★★★★☆</span></div>
                         </div>
                    </div>
      				<div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                               <a href="show.html"><img src="/grid_zz/Public/picfile/2.jpg" /></a>
                            </div>
                            <div class="e-name"><a href="show.html">项俊波</a></div>
                             <div class="e-lable">中国证券报市场研究中心服务研究员，曾任晨星中国，主要研究新能源、TMT主要研究务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员新能源…<a href="show.html">[详细]</a></div>
                        	 <div class="e-star">星级：<span>★★★★☆</span></div>
                         </div>
                    </div>
   	  				<div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                                <a href="show.html"><img src="/grid_zz/Public/picfile/111.jpg" /></a>
                            </div>
                            <div class="e-name"><a href="show.html">曾邵鹏</a></div>
                             <div class="e-lable">中国证券报市场研究中心服务研究员，曾任晨星中国，主要研究务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员新能源、TMT相关行业…<a href="show.html">[详细]</a></div>
                        	 <div class="e-star">星级：<span>★★★★☆</span></div>
                         </div>
                    </div>
   	  				<div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                                <a href="show.html"><img src="/grid_zz/Public/picfile/2.jpg" /></a>
                            </div>
                            <div class="e-name"><a href="show.html">项俊波</a></div>
                             <div class="e-lable">中国证券报市场研究中心服务研究员，曾任晨星中国，主要研究务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员新能源、T主要研究新能源MT相关行业…<a href="show.html">[详细]</a></div>
                        	 <div class="e-star">星级：<span>★★★★☆</span></div>
                         </div>
                    </div>
      				<div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                               <a href="show.html"><img src="/grid_zz/Public/picfile/2.jpg" /></a>
                            </div>
                            <div class="e-name"><a href="show.html">项俊波</a></div>
                             <div class="e-lable">中国证券报市场研究中心服务研究员，曾任晨星中国，主要研究务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员新能源、TMT相关行业主要研究新能源…<a href="show.html">[详细]</a></div>
                        	 <div class="e-star">星级：<span>★★★★☆</span></div>
                         </div>
                    </div>
   	  				<div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                                <a href="show.html"><img src="/grid_zz/Public/picfile/2.jpg" /></a>
                            </div>
                            <div class="e-name"><a href="show.html">项俊波</a></div>
                             <div class="e-lable">中国证券报市场研究中心服务研究员主要研究务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员新能源，主要研究新能源、T主要研究新能源MT相关行业…<a href="show.html">[详细]</a></div>
                        	 <div class="e-star">星级：<span>★★★★☆</span></div>
                         </div>
                    </div>
      				<div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                               <a href="show.html"><img src="/grid_zz/Public/picfile/2.jpg" /></a>
                            </div>
                            <div class="e-name"><a href="show.html">项俊波</a></div>
                             <div class="e-lable">中国证券报市场研究中心服务研究员，主要研究务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员务研究员新能源，主要研究新能源、TMT相关行业主要研究新能源…<a href="show.html">[详细]</a></div>
                        	 <div class="e-star">星级：<span>★★★★☆</span></div>
                         </div>
                    </div> -->
          </div>
            <div class='Page'>
            	<?php echo ($page); ?>
                <!-- <a href='#' title='首页'>首页</a>
                <a href='#' title='上一页'>上一页</a>
                <a href='#' class='active'>1</a>
                <a href='#'>2</a>
                <a href='#'>3</a>
                <a href='#' title='下一页'>下一页</a>
                <a href='#' title='末页'>末页</a> -->
            </div>
         </div>
   </div>
</div>
</body>
</html>