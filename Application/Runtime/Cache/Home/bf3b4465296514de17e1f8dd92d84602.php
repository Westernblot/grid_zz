<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="/grid_zz/Public/res/favicon.ico" type="image/x-icon">
	<title>搜索结果</title>
	<link rel="stylesheet" href="/grid_zz/Public/zzcss/base.css" type="text/css" />
	<link rel="stylesheet" href="/grid_zz/Public/zzcss/columns.css" type="text/css" />
</head>

<body>
<!-- 固定条 -->
   <script src="http://s11.cnzz.com/z_stat.php?id=1256670869&web_id=1256670869 " language="JavaScript"></script>
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
                  <li><a href="/grid_zz/index.php/Home/Index/news?type=中证投资锦囊"
                  	<?php if(($type) == "投资锦囊"): ?>class="active"<?php endif; ?>
                  	>投资锦囊</a></li>  
                  <li><a href="/grid_zz/index.php/Home/Index/experts" 
                  	<?php if((ACTION_NAME) == "experts"): ?>class="active"<?php endif; ?>
                  	>专家解盘</a></li>  
                  <li><a href="http://zhibo.cxcxt.com" target="_blank">直播间</a></li>
                  <li><a href="/grid_zz/index.php/Home/Index/product"
                  	<?php if((ACTION_NAME) == "product"): ?>class="active"<?php endif; ?>
                  	>产品</a></li>
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
   <div class="content_title"><a href="/grid_zz/index.php/Home/Index/index">首页</a>　>　<span>搜索结果</span></div>   
   <div class="content">
            <!-- <div class="contentbox_b">搜索 null  每页显示7条记录    共搜索到100个结果   耗时0.0070秒</div> -->
            <ul class="contentbox_c">
            	
            	<?php if(is_array($newsList)): foreach($newsList as $key=>$vo): ?><li>
                   <div class="medium"><a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a><em>-<?php echo ($vo["type"]); ?></em></div>
                    <div class="c-abstract"><?php echo ($vo["title"]); ?>　　<br>&nbsp;<?php echo ($vo["description"]); ?>　</div>
                    <div class="g"><!-- http://www.hsgtj.gov.cn/wzlm/zwdt/tzgg/32138.htm -->&nbsp;<?php echo ($vo["intime"]); ?>&nbsp;</div>
                    </li><?php endforeach; endif; ?>
            	
                <!-- <li>
                   <div class="medium"><a href="show.html">黄石国土资源局</a><em>-首页</em></div>
                    <div class="c-abstract">欢迎<em>黄石市国土资源局</em>信息网!综合信息 图片新闻 本地新闻 黄石市建立"三多三少"节地管理模式 黄石人均耕地0.68亩,仅占全省人均水平的52%,人口资源环境承载力567...</div>
                    <div class="g">http://www.hsgtj.gov.cn/&nbsp;2014-07-31&nbsp;</div>
                </li>
                <li>
                   <div class="medium"><a href="show.html">关于召开矿产资源储量报告评审会的公告</a><em>-通知公告</em></div>
                    <div class="c-abstract">关于召开矿产资源储量报告评审会的公告　　&nbsp;　　根据《矿产资源储量评审认定办法》（国土资发[1999]205号）有关规定，我中心决定召开矿产资源储量报告评审会议，现将有关事项公告如下：　　</div>
                    <div class="g">http://www.hsgtj.gov.cn/wzlm/zwdt/tzgg/32138.htm&nbsp;2014-08-07&nbsp;</div>
                </li>
                <li>
                   <div class="medium"><a href="show.html">黄石国土资源局</a><em>-首页</em></div>
                    <div class="c-abstract">欢迎<em>黄石市国土资源局</em>信息网!综合信息 图片新闻 本地新闻 黄石市建立"三多三少"节地管理模式 黄石人均耕地0.68亩,仅占全省人均水平的52%,人口资源环境承载力567...</div>
                    <div class="g">http://www.hsgtj.gov.cn/&nbsp;2014-07-31&nbsp;</div>
                </li>
                <li>
                   <div class="medium"><a href="show.html">关于召开矿产资源储量报告评审会的公告</a><em>-通知公告</em></div>
                    <div class="c-abstract">关于召开矿产资源储量报告评审会的公告　　&nbsp;　　根据《矿产资源储量评审认定办法》（国土资发[1999]205号）有关规定，我中心决定召开矿产资源储量报告评审会议，现将有关事项公告如下：　　</div>
                    <div class="g">http://www.hsgtj.gov.cn/wzlm/zwdt/tzgg/32138.htm&nbsp;2014-08-07&nbsp;</div>
                </li>
                <li>
                   <div class="medium"><a href="show.html">黄石国土资源局</a><em>-首页</em></div>
                    <div class="c-abstract">欢迎<em>黄石市国土资源局</em>信息网!综合信息 图片新闻 本地新闻 黄石市建立"三多三少"节地管理模式 黄石人均耕地0.68亩,仅占全省人均水平的52%,人口资源环境承载力567...</div>
                    <div class="g">http://www.hsgtj.gov.cn/&nbsp;2014-07-31&nbsp;</div>
                </li>
                <li>
                   <div class="medium"><a href="show.html">关于召开矿产资源储量报告评审会的公告</a><em>-通知公告</em></div>
                    <div class="c-abstract">...</div>
                    <div class="g">http://www.hsgtj.gov.cn/wzlm/zwdt/tzgg/32138.htm&nbsp;2014-08-07&nbsp;</div>
                </li>
                <li>
                   <div class="medium"><a href="show.html">关于召开矿产资源储量报告评审会的公告</a><em>-通知公告</em></div>
                    <div class="c-abstract">关于召开矿产资源储量报告评审会的公告　　&nbsp;　　根据《矿产资源储量评审认定办法》（国土资发[1999]205号）有关规定，我中心决定召开矿产资源储量报告评审会议，现将有关事项公告如下：　　</div>
                    <div class="g">http://www.hsgtj.gov.cn/wzlm/zwdt/tzgg/32138.htm&nbsp;2014-08-07&nbsp;</div>
                </li> -->
            </ul>   
            
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


  <!-- 固定条 -->
     <div id="foot">
    	<div class="margin">
        <div class="foot_lable">
            <a href="/grid_zz/index.php/Home/Index/about?type=关于我们" target="_blank">关于我们</a>　|　
            <a href="javascript:#" target="_blank">法律声明</a>　|　
            <a href="javascript:#" target="_blank">网站地图</a>　|　
            <a href="/grid_zz/index.php/Home/Index/about?type=联系我们" target="_blank">联系我们</a>
        </div>
        备案号  粤ICP备15073810号<br/>
		版权所有 中证财讯网
        </div>
	</div>

</body>
</html>