<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="/grid_zz/Public/res/favicon.ico" type="image/x-icon">
	<title><?php echo ($type); ?></title>
	<link rel="stylesheet" href="/grid_zz/Public/zzcss/base.css" type="text/css" />
	<link rel="stylesheet" href="/grid_zz/Public/zzcss/columns.css" type="text/css" />
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
   <div class="content_title"><a href="/grid_zz/index.php/Home/Index/index">首页</a>　>　<span>
   	<a href="/grid_zz/index.php/Home/Index/news?type=<?php echo ($type); ?>">
  
   		<?php if(($type) == "中证投资锦囊"): ?>每日金股<?php endif; ?>
   		<?php if(($type) != "中证投资锦囊"): echo ($type); endif; ?>
   		
   	</a></span></div>   
   <div class="sub-banner">
    	<a href="<?php echo ($link["action"]); ?>"><img src="<?php echo ($link["imgurl"]); ?>" width="1024" height="100" /></a>
    </div>
   <div class="content">
   		<div class="content-left">
            <ul class="info">
            	
            <?php if(is_array($newsList)): foreach($newsList as $key=>$vo): ?><li>
                	<a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><img src="<?php echo ($vo["imgurl"]); ?>" class="object"/></a>
                   <div class="lable">
                    <h3><a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["subject"]); ?></a></h3>
                    <h5><?php echo ($vo["author"]); ?></h5>
                    <h6><?php echo (mb_substr($vo["description"],0,60,'utf-8')); ?></h6>
                     </div>
                 </li><?php endforeach; endif; ?>
            	
                <!-- <li>
                	<a href="show.html"><img src="/grid_zz/Public/picfile/011.jpg" class="object"/></a>
                    <div class="lable">
                        <h3><a href="show.html">聚焦国有林场：京津冀协同发展中的"加减</a></h3>
                        <h5>章轲</h5>
                        <h6>国有林场和国有林区是国家最重要的生态安全屏障和维护国家生态安全最重要的基础设施，在经济社会发展和生态文明建设中发挥着不可替代的重要作用…</h6>
                    </div>
                </li>
                <li>
                	<a href="show.html"><img src="/grid_zz/Public/picfile/012.jpg" class="object"/></a>
                    <div class="lable">
                        <h3><a href="show.html">星美覃辉逆势回归A股 计划五年开千家影院</a></h3>
                        <h5>陈汉辞</h5>
                        <h6>A股剧烈震荡之时，仍有机构无惧"乱世"，在市场低位布局二级市场股权收购，星美集团便是其中之一。星美集团创始人覃辉近期重回资本市场的视野…</h6>
                    </div>
                </li>
                <li>
                	<a href="show.html"><img src="/grid_zz/Public/picfile/2.jpg" class="object"/></a>
                    <div class="lable">
                        <h3><a href="show.html">铜掌柜是国内首家专注跨境电商金融业务的互联网金融平台</a></h3>
                        <h5>陈周锡</h5>
                        <h6>铜掌柜是国内首家专注跨境电商金融业务的互联网金融平台，已和杭州近百家跨境电商商家签订了合作协议。据机构预测，到2017年，我国跨境电商进…</h6>
                    </div>
                </li>
                <li>
                	<a href="show.html"><img src="/grid_zz/Public/picfile/3.jpg" class="object"/></a>
                    <div class="lable">
                        <h3><a href="show.html">聚焦国有林场：京津冀协同发展中的"加减</a></h3>
                        <h5>章轲</h5>
                        <h6>国有林场和国有林区是国家最重要的生态安全屏障和维护国家生态安全最重要的基础设施，在经济社会发展和生态文明建设中发挥着不可替代的重要作用…</h6>
                    </div>
                </li>
                <li>
                	<a href="show.html"><img src="/grid_zz/Public/picfile/011.jpg" class="object"/></a>
                    <div class="lable">
                        <h3><a href="show.html">聚焦国有林场：京津冀协同发展中的"加减</a></h3>
                        <h5>章轲</h5>
                        <h6>国有林场和国有林区是国家最重要的生态安全屏障和维护国家生态安全最重要的基础设施，在经济社会发展和生态文明建设中发挥着不可替代的重要作用…</h6>
                    </div>
                </li>
                <li>
                	<a href="show.html"><img src="/grid_zz/Public/picfile/012.jpg" class="object"/></a>
                    <div class="lable">
                        <h3><a href="show.html">聚焦国有林场：京津冀协同发展中的"加减</a></h3>
                        <h5>章轲</h5>
                        <h6>国有林场和国有林区是国家最重要的生态安全屏障和维护国家生态安全最重要的基础设施，在经济社会发展和生态文明建设中发挥着不可替代的重要作用…</h6>
                    </div>
                </li>
                <li>
                	<a href="show.html"><img src="/grid_zz/Public/picfile/013.jpg" class="object"/></a>
                    <div class="lable">
                        <h3><a href="show.html">聚焦国有林场：京津冀协同发展中的"加减</a></h3>
                        <h5>章轲</h5>
                        <h6>国有林场和国有林区是国家最重要的生态安全屏障和维护国家生态安全最重要的基础设施，在经济社会发展和生态文明建设中发挥着不可替代的重要作用…</h6>
                    </div>
                </li> -->
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
        备案号  粤ICP备15073810号
		版权所有 中证财讯网&nbsp;&nbsp;
<script src="http://s11.cnzz.com/z_stat.php?id=1256670869&web_id=1256670869 " language="JavaScript"></script>
		<p style=" margin:5px 0; line-height:21px;">
        <B style="color:#990000;">股市有风险，入市须谨慎</B><br/>
        中证财讯所有信息内容及所有终端产品内容仅供参考，投资者应根据自身情况，理性投资。投资者如据此操作，风险自担。
    </p>
        </div>
	</div>


</body>
</html>