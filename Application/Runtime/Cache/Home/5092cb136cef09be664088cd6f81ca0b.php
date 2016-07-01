<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="/grid_zz/Public/res/favicon.ico" type="image/x-icon">
	<title>专家解盘</title>
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
                  	>战绩回顾</a></li>
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
   <div class="content_title"><a href="/grid_zz/index.php/Home/Index/index">首页</a>　>　<span><a href="/grid_zz/index.php/Home/Index/experts">专家解盘</a></span></div>   
   <div class="sub-banner">
    	<a href="<?php echo ($link["action"]); ?>"><img src="<?php echo ($link["imgurl"]); ?>" width="1024" height="100" /></a>
    </div>
   <div class="content">
   		<div class="content-left border">
             <ul class="column li02">    
             	
             	
             	<?php if(is_array($videoList)): foreach($videoList as $key=>$vo): ?><li><a class="name" href="/grid_zz/index.php/Home/Index/experts_introduce?id=<?php echo ($vo["id"]); ?>">[<?php echo ($vo["experts_name"]); ?>]</a>
   	    <a href="/grid_zz/index.php/Home/Index/video_show?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a><span><?php echo ($vo["intime"]); ?></span>
   	</li><?php endforeach; endif; ?>                                           
                        <!-- <li><a class="name" href="experts-introduce.html">[柳传志]</a><a href="video-show.html">柳传志谈柳青柳甄投奔专车：纯属偶然 跟我没关系</a><span>2015-07-16</span></li>
                        <li><a class="name" href="experts-introduce.html">[柳传志]</a><a href="video-show.html">柳传志：做"老大哥" 不是"带头大哥"</a><span>2015-07-15</span></li>
                        <li><a class="name" href="experts-introduce.html">[李书福]</a><a href="video-show.html">李书福：沃尔沃是与谷歌和特斯拉抗衡的第三股力量</a><span>2015-07-15</span></li>
                        <li><a class="name" href="experts-introduce.html">[李嘉诚]</a><a href="video-show.html">李嘉诚：学会投资 年存1.4万变亿万富翁</a><span>2015-07-15</span></li>
                        
                        <li><a class="name" href="experts-introduce.html">[张近东]</a><a href="video-show.html">张近东：互联网+零售就是O2O</a><span>2015-07-15</span></li>
                        <li><a class="name" href="experts-introduce.html">[张近东]</a><a href="video-show.html">李克强对话张近东：你给我们带来了好消息</a><span>2015-07-15</span></li>
                        <li><a class="name" href="experts-introduce.html">[李彦宏]</a><a href="video-show.html">李彦宏"中国大脑"提案落地 人工智能或成国家战略</a><span>2015-07-14</span></li>
                        <li><a class="name" href="experts-introduce.html">[柳传志]</a><a href="video-show.html">柳传志式谦卑：一代民营企业家的成功之道</a><span>2015-07-14</span></li>
                        <li><a class="name" href="experts-introduce.html">[王石]</a><a href="video-show.html">王石:万科已轻资产化 住宅开发已成现金牛业务</a><span>2015-07-14</span></li>
                        
                        <li><a class="name" href="experts-introduce.html">[李彦宏]</a><a href="video-show.html">李彦宏放"壕"言:有500多亿现金 拿200亿做糯米</a><span>2015-07-14</span></li>
                        <li><a class="name" href="experts-introduce.html">[唐骏]</a><a href="video-show.html">唐骏：牛市没结束 股市应暂缓推出注册制</a><span>2015-07-13</span></li>
                        <li><a class="name" href="experts-introduce.html">[冯仑]</a><a href="video-show.html">万通地产告别冯仑 着力京津冀地产效果未知</a><span>2015-07-13</span></li>
                        <li><a class="name" href="experts-introduce.html">[潘石屹]</a><a href="video-show.html">潘石屹300亿身家背后：成功源自"能折腾"</a><span>2015-07-13</span></li>
                        <li><a class="name" href="experts-introduce.html">[李书福]</a><a href="video-show.html">2.8亿冰岛买甲醇 李书福意在燃料电池？</a><span>2015-07-13</span></li>
                        
                        <li><a class="name" href="experts-introduce.html">[郭广昌]</a><a href="video-show.html">郭广昌：恐慌市场机会更多 有些股票2000点也不能买</a><span>2015-07-13</span></li>
                        <li><a class="name" href="experts-introduce.html">[柳传志]</a><a href="video-show.html">柳传志：做事有小成 感谢命运眷顾</a><span>2015-07-13</span></li>
                        <li><a class="name" href="experts-introduce.html">[王石]</a><a href="video-show.html">王石川：思危已逝，谁来思危？</a><span>2015-07-12</span></li>
                        <li><a class="name" href="experts-introduce.html">[任志强]</a><a href="video-show.html">任志强谈巴菲特模式：当老婆不能当小三</a><span>2015-07-12</span></li>
                        <li><a class="name" href="experts-introduce.html">[任志强]</a><a href="video-show.html">中国房地产业协会副会长任志强</a><span>2015-07-12</span></li>
                        
                        <li><a class="name" href="experts-introduce.html">[郭广昌]</a><a href="video-show.html">郭广昌：恐慌的市场里机会更多</a><span>2015-07-12</span></li>
                        <li><a class="name" href="experts-introduce.html">[郭广昌]</a><a href="video-show.html">郭广昌谈A股：政府若不出手就会出现更恐慌局面</a><span>2015-07-12</span></li>
                        <li><a class="name" href="experts-introduce.html">[任志强]</a><a href="video-show.html">任志强：做股东要有当老婆思想 不能当小三套现就跑</a><span>2015-07-11</span></li>
                        <li><a class="name" href="experts-introduce.html">[张近东]</a><a href="video-show.html">张近东：人才是宝贵财富 苏宁云商再推10亿元员工持股计划</a><span>2015-07-11</span></li>
                        <li><a class="name" href="experts-introduce.html">[项俊波]</a><a href="video-show.html">省林业厅办公室关于印发《2015年湖北省林业普法依法…</a><span>2013-04-08</span></li>
                 -->
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
   		<div class="content-right-side">
              <div class="title"><span>专家</span></div>
              <ul> 
              	
              	<?php if(is_array($expertsList)): foreach($expertsList as $key=>$vo): ?><li><a href="/grid_zz/index.php/Home/Index/experts_introduce?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
              	
                    <!-- <li><a href="famous-introduce.html">史玉柱</a></li>
                    <li><a href="famous-introduce.html">马蔚华</a></li>
                    <li><a href="famous-introduce.html">柳传志</a></li>
                    <li><a href="famous-introduce.html">郭台铭</a></li>
                    <li><a href="famous-introduce.html">冯仑</a></li>
                    <li><a href="famous-introduce.html">唐双宁</a></li>
                    <li><a href="famous-introduce.html">李书福</a></li>
                    <li><a href="famous-introduce.html">张近东</a></li>
                    <li><a href="famous-introduce.html">唐骏</a></li>
                    <li><a href="famous-introduce.html">马化腾</a></li>
                    <li><a href="famous-introduce.html">宗庆后</a></li>
                    <li><a href="famous-introduce.html">陈天桥</a></li>
                    <li><a href="famous-introduce.html">李彦宏</a></li>
                    <li><a href="famous-introduce.html">王传福</a></li>
                    <li><a href="famous-introduce.html">郭广昌</a></li>
                    <li><a href="famous-introduce.html">马明哲</a></li>
                    <li><a href="famous-introduce.html">李嘉诚</a></li>
                    <li><a href="famous-introduce.html">王石</a></li>
                    <li><a href="famous-introduce.html">潘石屹</a></li>
                    <li><a href="famous-introduce.html">任志强</a></li>
                    <li><a href="famous-introduce.html">黄光裕</a></li> -->
              </ul>
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