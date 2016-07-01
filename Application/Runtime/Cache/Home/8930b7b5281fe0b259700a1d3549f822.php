<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>中证财讯网</title>
	<link rel="stylesheet" href="/grid_zz/Public/zzcss/base.css" type="text/css" />
	<link rel="stylesheet" href="/grid_zz/Public/zzcss/columns.css" type="text/css" />
</head>

<body>
 
  <!-- 固定条 -->
   <div class="top">
	<div class="margin">
        <div class="top01">
            <div class="pull-left">
                <a href="javascript:#" class="hrefs" onclick="myhomepage()">设为首页</a>
                <!-- <a href="index.html">登录</a> -->
                <a href="/grid_zz/index.php/Home/Index/register.html">注册</a>
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
                      <img src="/grid_zz/Public/images/logo.jpg" />
                  </div>
                  <div class="pull-right">
                      <!-- <img src="/grid_zz/Public/images/top-banner.jpg" /> -->
                      <embed src="/grid_zz/Public/images/top.swf" width="760" height="104"></embed>
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
    </div>
</div>

<script type="text/javascript">
	
	function doSubmit(){
		
		document.getElementById('form1').submit();
	}
	
</script>


<div id="container"> 
   <div class="content_title"><a href="/grid_zz/index.php/Home/Index/index">首页</a>　>　<span><a href="/grid_zz/index.php/Home/Index/news?type=<?php echo ($type); ?>"><?php echo ($type); ?></a></span></div>   
   <div class="sub-banner">
    	<a href="<?php echo ($link["action"]); ?>"><img src="<?php echo ($link["imgurl"]); ?>" width="1024" height="100" /></a>
    </div>
   <div class="content">
   		<div class="content-left border">
            <ul class="column">             
            	
            <?php if(is_array($newsList)): foreach($newsList as $key=>$vo): ?><li><a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a><span><?php echo ($vo["intime"]); ?></span></li><?php endforeach; endif; ?>
            	                                  
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
   		<div class="content-right">
        	<div class="content-right-atd">
        		<?php if(is_array($linkList)): foreach($linkList as $key=>$vo): if(($vo["type"]) == "右边栏广告"): ?><a href="<?php echo ($vo["action"]); ?>"><img src="<?php echo ($vo["imgurl"]); ?>"/></a><br/><br/><?php endif; endforeach; endif; ?>
                <!-- <a href="#"><img src="/grid_zz/Public/picfile/atd01.jpg"/></a><br/><br/>
                <a href="#"><img src="/grid_zz/Public/picfile/atd02.jpg"/></a><br/><br/>
                <a href="#"><img src="/grid_zz/Public/picfile/atd03.jpg"/></a> -->
            </div>
        
        </div>
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
        增值电信业务经营许可证 粤B2-20050348号 互联网视听节目服务(AVSP):粤备2015002 粤ICP备14046937号<br/>
		版权所有 中证财讯网
        </div>
	</div>

</body>
</html>