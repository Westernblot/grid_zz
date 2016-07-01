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
    	<a href="#"><img src="/grid_zz/Public/images/1.jpg" width="950" height="100" /></a>
    </div>
   <div class="content">
   		<div class="content-list">
            <ul class="column">    
            	
            	<?php if(is_array($newsList)): foreach($newsList as $key=>$vo): ?><li><a href="/grid_zz/index.php/Client/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a><span><?php echo ($vo["intime"]); ?></span></li><?php endforeach; endif; ?>                                           
                    <!-- <li><a href="show.html">省林业厅办公室关于印发《2015年湖北省林业普法依法…</a><span>2013-04-08</span></li>
                    <li><a href="show.html">省林业厅办公室关于开展 涉林非法集资风险专项排查处…</a><span>2012-04-23</span></li>
                    <li><a href="show.html">黄石市举办首届兰文化艺术展览会</a><span>2012-04-23</span></li>
                    <li><a href="show.html">新华网：和总书记一起守护绿水青山 </a><span>2015-07-06</span></li> 
                    <li><a href="show.html">为项目落地当好"马前卒"</a><span>2013-11-21</span></li>  
                     
                    <li><a href="show.html">保发展 保红线 保民生 为促进黄石经济转型实现跨越发展再作新贡献</a><span>2015-02-25</span></li>   
                    <li><a href="show.html">为项目落地当好"马前卒"———访局长吴风雨</a><span>2015-02-24</span></li>   
                    <li><a href="show.html">黄石部门奋力破解资源枯竭难题</a><span>2015-02-24</span></li>   
                    <li><a href="show.html">黄石"三园一带"开发建设的思考</a><span>2015-01-27</span></li>   
                    <li><a href="show.html">吴风雨局长接受十一五工作回顾访谈</a><span>2015-01-04 </span></li>
                    
                    <li><a href="show.html">部门服务重点项目不遗余力</a><span>2013-04-08</span></li>
                    <li><a href="show.html">推进转型勇为先-在第43个世界地球日来临之际访国土吴风雨局长</a><span>2012-04-23</span></li>
                    <li><a href="show.html">转型跨越当好排头兵</a><span>2012-04-23</span></li>
                    <li><a href="show.html">2011年7月6日访局吴风雨局长 </a><span>2015-07-06</span></li> 
                    <li><a href="show.html">为项目落地当好"马前卒"</a><span>2013-11-21</span></li>  
                     
                    <li><a href="show.html">保发展 保红线 保民生 为促进黄石经济转型实现跨越发展再作新贡献</a><span>2015-02-25</span></li>   
                    <li><a href="show.html">为项目落地当好"马前卒"———访局长吴风雨</a><span>2015-02-24</span></li>   
                    <li><a href="show.html">黄石部门奋力破解资源枯竭难题</a><span>2015-02-24</span></li>   
                    <li><a href="show.html">黄石"三园一带"开发建设的思考</a><span>2015-01-27</span></li>   
                    <li><a href="show.html">吴风雨局长接受十一五工作回顾访谈</a><span>2015-01-04 </span></li>
                     
                    <li><a href="show.html">保发展 保红线 保民生 为促进黄石经济转型实现跨越发展再作新贡献</a><span>2015-02-25</span></li>   
                    <li><a href="show.html">为项目落地当好"马前卒"———访局长吴风雨</a><span>2015-02-24</span></li>   
                    <li><a href="show.html">黄石部门奋力破解资源枯竭难题</a><span>2015-02-24</span></li>   
                    <li><a href="show.html">黄石"三园一带"开发建设的思考</a><span>2015-01-27</span></li>   
                    <li><a href="show.html">吴风雨局长接受十一五工作回顾访谈</a><span>2015-01-04 </span></li> -->
            </ul>
            <div class='Page'>
                <!-- <a href='#' title='首页'>首页</a>
                <a href='#' title='上一页'>上一页</a>
                <a href='#' class='active'>1</a>
                <a href='#'>2</a>
                <a href='#'>3</a>
                <a href='#' title='下一页'>下一页</a>
                <a href='#' title='末页'>末页</a> -->
                <?php echo ($page); ?>
            </div>
        </div>
   		<div class="content-right w233">
        
       		 <div class="title"><h4>中证介绍</h4></div>
             <div class="side-about">
             	<!-- <p>　　中证投资资讯有限公司依托中国证券报的品牌及资源优势，承担中国证券报&ldquo;金牛&rdquo;品牌的专业化开发与推广责任;   公司各项主体业务得到中证报各部门和派驻全国各地机构的全力支持，成为公司重要的核心竞争优势;中证报已与国际知名金融财团组建合资金融服务企业，中证投资资讯有限公司成为合资公司面向中国及海外资本市场最重要的一个业务平台。</p>
              -->
              <?php echo ($document["content"]); ?>
             </div>
             
       		 <div class="title"><h4><a href="/grid_zz/index.php/Client/Index/fxs">中证分析师</a></h4></div>
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
                                <img src="../picfile/111.jpg" />
                            </div>
                            <div class="e-name">曾邵鹏</div>
                             <div class="e-lable">中国证券报市场研究中心服务研究员，曾任晨星中国，主要研究新能源、TMT相关行业…<a href="experts-introduce.html">[详细]</a></div>
                        	 <div class="e-star">星级：<span>★★★★☆</span></div>
                         </div>
                    </div>
   	  				<div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                                <img src="../picfile/2.jpg" />
                            </div>
                            <div class="e-name">项俊波</div>
                             <div class="e-lable">中国证券报市场研究中心服务研究员，曾任晨星中国，主要研究新能源、TMT相关行业…<a href="experts-introduce.html">[详细]</a></div>
                        	 <div class="e-star">星级：<span>★★★★☆</span></div>
                         </div>
                    </div>
      				<div class="index-experts">
                    	<div class="e-01">
                            <div class="e-object">
                                <img src="../picfile/2.jpg" />
                            </div>
                            <div class="e-name">项俊波</div>
                             <div class="e-lable">中国证券报市场研究中心服务研究员，曾任晨星中国，主要研究新能源、TMT相关行业…<a href="experts-introduce.html">[详细]</a></div>
                        	 <div class="e-star">星级：<span>★★★★☆</span></div>
                         </div>
                    </div> -->
          </div>
        
        </div>
   </div>
</div>
</body>
</html>