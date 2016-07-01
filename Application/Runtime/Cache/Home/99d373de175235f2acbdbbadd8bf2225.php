<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>笑看风云投资管理有限公司</title>
    <link rel="stylesheet" href="/grid_zz/Public/fycss/style.css" type="text/css" />
</head>

<body>
	<!-- 顶部固定条 -->
   <div id="head">
    	<div class="top"><div class="margin"><img src="/grid_zz/Public/images/logo.gif" /></div></div>
        <ul class="nav">    
           	<li 
           	    <?php if((ACTION_NAME) == "index"): ?>class="color01 active"<?php else: ?>class="color01"<?php endif; ?>
           	><a href="/grid_zz/index.php/Home/Index/index">首页</a></li>           
           	  
           	<li 
           		<?php if(($type) == "宏观"): ?>class="color02 active"<?php else: ?>class="color02"<?php endif; ?>
           	><a href="/grid_zz/index.php/Home/Index/news?type=宏观">宏观</a></li>
           	
           	<li 
           	    <?php if(($type) == "时政"): ?>class="color03 active"<?php else: ?>class="color03"<?php endif; ?>
           	><a href="/grid_zz/index.php/Home/Index/news?type=时政">时政</a></li>  
           	
           	<li 
           	    <?php if(($type) == "科技"): ?>class="color04 active"<?php else: ?>class="color04"<?php endif; ?>
           	><a href="/grid_zz/index.php/Home/Index/news?type=科技">科技</a></li>  
           	
           	<li 
           	    <?php if(($type) == "产品"): ?>class="color05 active"<?php else: ?>class="color05"<?php endif; ?>
           	><a href="/grid_zz/index.php/Home/Index/news?type=产品">产品</a></li>
           	
           	<li 
           	    <?php if(($type) == "交易指南"): ?>class="color06 active"<?php else: ?>class="color06"<?php endif; ?>
           	><a href="/grid_zz/index.php/Home/Index/news?type=交易指南">交易指南</a></li>  
           	
           	<li 
           		<?php if(($type) == "名家"): ?>class="color07 active"<?php else: ?>class="color07"<?php endif; ?>
           	><a href="/grid_zz/index.php/Home/Index/famous?type=名家">名家</a></li>  
           	
           	<li            	
           	   <?php if(($type) == "团队"): ?>class="color08 active"<?php else: ?>class="color08"<?php endif; ?>
           	><a href="/grid_zz/index.php/Home/Index/famous?type=团队">团队</a></li>  
           	
           	<li 
           	   <?php if((ACTION_NAME) == "video"): ?>class="color09 active"<?php else: ?>class="color09"<?php endif; ?>
           	><a href="/grid_zz/index.php/Home/Index/video">直播间</a></li>  
           	
           	<li 
           	   <?php if(($type) == "关于我们"): ?>class="color10 active"<?php else: ?>class="color10"<?php endif; ?>
           	><a href="/grid_zz/index.php/Home/Index/about?type=关于我们">笑看风云</a></li>  
           	
           	<li 
               <?php if(($type) == "联系我们"): ?>class="color11 active"<?php else: ?>class="color11"<?php endif; ?>
           	 ><a href="/grid_zz/index.php/Home/Index/about?type=联系我们">联系我们</a></li>      
           	
        </ul>
    </div>

<div id="container"> 
   <div class="content_title"><a href="index.html">首页</a>　>　名家</div>   
    <div class="sub-banner">
    	 <a href="<?php echo ($link["action"]); ?>"><img src="<?php echo ($link["imgurl"]); ?>" width="1024" height="100" /></a>
    </div>
   <div class="content">
   		<div class="content-left">
                <ul class="column">     
                	
                	<?php if(is_array($newsList)): foreach($newsList as $key=>$vo): ?><li><a class="name" href="/grid_zz/index.php/Home/Index/famous_introduce?id=<?php echo ($vo["id"]); ?>">[<?php echo ($vo["famous_name"]); ?>]</a>
   	    <a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a><span><?php echo ($vo["intime"]); ?></span>
   	</li><?php endforeach; endif; ?>
                	
                	                                          
					<!-- <li><a class="name" href="famous-introduce.html">[柳传志]</a><a href="show.html">柳传志谈柳青柳甄投奔专车：纯属偶然 跟我没关系</a><span>2015-07-16</span></li>
                    <li><a class="name" href="famous-introduce.html">[柳传志]</a><a href="show.html">柳传志：做"老大哥" 不是"带头大哥"</a><span>2015-07-15</span></li>
                    <li><a class="name" href="famous-introduce.html">[李书福]</a><a href="show.html">李书福：沃尔沃是与谷歌和特斯拉抗衡的第三股力量</a><span>2015-07-15</span></li>
                    <li><a class="name" href="famous-introduce.html">[李嘉诚]</a><a href="show.html">李嘉诚：学会投资 年存1.4万变亿万富翁</a><span>2015-07-15</span></li>
                    
                    <li><a class="name" href="famous-introduce.html">[张近东]</a><a href="show.html">张近东：互联网+零售就是O2O</a><span>2015-07-15</span></li>
                    <li><a class="name" href="famous-introduce.html">[张近东]</a><a href="show.html">李克强对话张近东：你给我们带来了好消息</a><span>2015-07-15</span></li>
                    <li><a class="name" href="famous-introduce.html">[李彦宏]</a><a href="show.html">李彦宏"中国大脑"提案落地 人工智能或成国家战略</a><span>2015-07-14</span></li>
                    <li><a class="name" href="famous-introduce.html">[柳传志]</a><a href="show.html">柳传志式谦卑：一代民营企业家的成功之道</a><span>2015-07-14</span></li>
                    <li><a class="name" href="famous-introduce.html">[王石]</a><a href="show.html">王石:万科已轻资产化 住宅开发已成现金牛业务</a><span>2015-07-14</span></li>
                    
                    <li><a class="name" href="famous-introduce.html">[李彦宏]</a><a href="show.html">李彦宏放"壕"言:有500多亿现金 拿200亿做糯米</a><span>2015-07-14</span></li>
                    <li><a class="name" href="famous-introduce.html">[唐骏]</a><a href="show.html">唐骏：牛市没结束 股市应暂缓推出注册制</a><span>2015-07-13</span></li>
                    <li><a class="name" href="famous-introduce.html">[冯仑]</a><a href="show.html">万通地产告别冯仑 着力京津冀地产效果未知</a><span>2015-07-13</span></li>
                    <li><a class="name" href="famous-introduce.html">[潘石屹]</a><a href="show.html">潘石屹300亿身家背后：成功源自"能折腾"</a><span>2015-07-13</span></li>
                    <li><a class="name" href="famous-introduce.html">[李书福]</a><a href="show.html">2.8亿冰岛买甲醇 李书福意在燃料电池？</a><span>2015-07-13</span></li>
                    
                    <li><a class="name" href="famous-introduce.html">[郭广昌]</a><a href="show.html">郭广昌：恐慌市场机会更多 有些股票2000点也不能买</a><span>2015-07-13</span></li>
                    <li><a class="name" href="famous-introduce.html">[柳传志]</a><a href="show.html">柳传志：做事有小成 感谢命运眷顾</a><span>2015-07-13</span></li>
                    <li><a class="name" href="famous-introduce.html">[王石]</a><a href="show.html">王石川：思危已逝，谁来思危？</a><span>2015-07-12</span></li>
                    <li><a class="name" href="famous-introduce.html">[任志强]</a><a href="show.html">任志强谈巴菲特模式：当老婆不能当小三</a><span>2015-07-12</span></li>
                    <li><a class="name" href="famous-introduce.html">[任志强]</a><a href="show.html">中国房地产业协会副会长任志强</a><span>2015-07-12</span></li>
                    
                    <li><a class="name" href="famous-introduce.html">[郭广昌]</a><a href="show.html">郭广昌：恐慌的市场里机会更多</a><span>2015-07-12</span></li>
                    <li><a class="name" href="famous-introduce.html">[郭广昌]</a><a href="show.html">郭广昌谈A股：政府若不出手就会出现更恐慌局面</a><span>2015-07-12</span></li>
                    <li><a class="name" href="famous-introduce.html">[任志强]</a><a href="show.html">任志强：做股东要有当老婆思想 不能当小三套现就跑</a><span>2015-07-11</span></li>
                    <li><a class="name" href="famous-introduce.html">[张近东]</a><a href="show.html">张近东：人才是宝贵财富 苏宁云商再推10亿元员工持股计划</a><span>2015-07-11</span></li>
                    <li><a class="name" href="famous-introduce.html">[项俊波]</a><a href="show.html">省林业厅办公室关于印发《2015年湖北省林业普法依法…</a><span>2013-04-08</span></li>
           -->
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
            
        	<div class="content-right-side">
              <div class="title other"><h4>人物列表</h4></div>
              <div class="title"><span>名家</span></div>
              <ul> 
              	<?php if(is_array($famousList)): foreach($famousList as $key=>$vo): if(($vo["type"]) == "名家"): ?><li><a href="/grid_zz/index.php/Home/Index/famous_introduce?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endif; endforeach; endif; ?>
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
              <div class="title"><span>团队</span></div>
              <ul> 
              	 	<?php if(is_array($famousList)): foreach($famousList as $key=>$vo): if(($vo["type"]) == "团队"): ?><li><a href="/grid_zz/index.php/Home/Index/famous_introduce?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endif; endforeach; endif; ?>
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
   
         
</div>
 
 <!-- 顶部固定条 -->
   
 
</body>
</html>