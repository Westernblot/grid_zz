<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="/grid_zz/Public/res/favicon.ico" type="image/x-icon">
	<title><?php echo ($news["title"]); ?></title>
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
   <div class="content_title"><a href="/grid_zz/index.php/Home/Index/index">首页</a>　>　<a href="/grid_zz/index.php/Home/Index/news?type=<?php echo ($news["type"]); ?>"><?php echo ($news["type"]); ?></a>　>　<span>正文</span></div>   
   <div class="content">
            <div class="content-left">
                <div class="show">
                    <div class="show-title">
                         <h2><?php echo ($news["title"]); ?></h2>
                         <h5><?php echo ($news["source"]); ?> <?php echo ($news["author"]); ?> <?php echo ($news["intime"]); ?></h5>
                    </div>
                    
                    <?php echo ($news["content"]); ?>                   
                    
                    <!-- <p align="center"><img src="/grid_zz/Public/picfile/3.jpg"/></p>
                    <p>第一财经日报》记者7月16日从交通运输部了解到，上半年，我国交通固定资产投资高位运行，稳增长作用凸显。</p>
                    <p>交通运输部综合规划司副司长张大为在当日召开的例行新闻发布会上介绍，上半年，全国公路水路完成固定资产投资7188亿元，同比增长9.5%，略高于去年同期，公路投资中新开工项目投资额占比由去年同期的18.9%提高至23.6%，水运占比由12.6%提高至27.3%。</p>
                    <p>&ldquo;尤其需要指出的是，在全社会固定资产投资增速放缓的情况下，交通投资增速不降反升，发挥了重要的稳增长作用，成绩来之不易。&rdquo;张大为说。</p>
                    <p>交通运输部统计数据显示，分行业看，上半年我国公路建设完成投资6469亿元，同比增长10.2%，其中高速公路、普通国省道、农村公路分别完成投资3260亿元、2015亿元和1195亿元，分别增长9.2%、6.5%和20.0%。水运建设完成投资648亿元，增长1.9%。</p>
                    <p>分区域看，东、中、西部地区分别完成公路水路固定资产投资2315亿元、1698亿元和3175亿元，分别增长5.3%、16.9%和9.0%。</p>
                    <p>张大为介绍，从上半年运行情况看，我国运输生产增速放缓，结构分化加深。</p>
                    <p>客运方面，上半年，铁路公路水路完成客运量108.5亿人，同比增长0.5%，增速较去年同期放缓1.8个百分点。客运结构调整不断深化。便捷、舒适、高效出行方式客运量持续较快增长，铁路旅客发送量增长9.1%，其中前5个月高铁、动车分别增长37.9%和30.2%。民航旅客运输量增长12.7%(1-5月)。公路客运持续下降，客运量降幅为0.5%，其中一季度下降0.1%，4、5、6月份分别下降0.4%、1.2%和1.4%，降幅有所扩大。旅游消费带动水路客运保持旺盛需求，客运量增长5.2%。</p>
                    <p>货运方面：铁路公路水路完成货运量209.1亿吨，同比增长4.2%，增速较去年同期放缓3.0个百分点。货运结构持续分化。铁路货运呈下降趋势，但降幅趋稳，货物发送量下降10.2%，其中二季度下降11.0%。公路货运仍保持稳定增长，货运量增长6.2%。水路货运增速明显放缓，货运量仅增长3.3%，较一季度、去年同期分别放缓1.9和2.7个百分点。快递业持续高速增长，完成快递业务量84.6亿件、增长43.3%，快递业务收入1196亿元、增长33.2%。</p>
                    <p>港口方面，张大为介绍，我国规模以上港口完成货物吞吐量56.7亿吨，同比增长2.6%，增速较去年同期放缓2.6个百分点，其中内、外贸吞吐量分别增长4.2%和下降0.6%。完成集装箱吞吐量10273万TEU，增长6.1%。港口外贸生产呈现&ldquo;进口下降、出口增长&rdquo;的运行特点，前5个月外贸进港量下降4.5%、外贸出港量增长9.4%。</p>
                    <p>在谈到&ldquo;一带一路&rdquo;交通建设方面，张大为介绍，交通运输部已完成《落实&ldquo;一带一路&rdquo;战略规划实施方案》，新开通了昆明、大连、哈尔滨至欧洲的货运班列，推动&ldquo;一带一路&rdquo;战略政策效果逐步显现。</p>
                    <p>今年前5个月，东盟、印度、中东、非洲等&ldquo;一带一路&rdquo;沿线国家航线集装箱吞吐量占总吞吐量的25.0%，较去年同期提高2.3个百分点。</p>
                    <p>张大为介绍，已在京津冀区域交通一体化方面率先取得突破。交通运输部会同国家发展改革委编制上报《京津冀协同发展交通一体化规划》，组织拟订实施方案，重大项目建设等工作正在有序推进。</p>
                    <p>在长江经济带交通运输建设方面，已取得突破性进展。交通运输部配合国家发展改革委完成《长江经济带发展规划纲要》，并同步编制了交通运输实施方案。长江南京以下12.5米深水航道一期主体工程完工，二期工程已正式开工建设。</p>
                    <p>对于下半年交通运输经济运行的走势问题，张大为对记者表示，综合相关部门的判断，交通运输部认为，虽然当前世界经济仍处于深度调整之中，复苏进程艰难曲折、复杂多变，但下半年我国外贸进出口形势将有所回暖，因此将对外贸运输产生积极影响。</p>
                    <p>张大为分析说，在国内方面，随着打造大众创业、万众创新和增加公共产品、公共服务&ldquo;双引擎&rdquo;的不断驱动，&ldquo;互联网+&rdquo;行动的实施，以及去年下半年以来持续推出的定向调控措施逐步发力见效，宏观经济运行缓中趋稳，处于合理区间，与交通运输相关联的产业发展也趋于改善，这些都将为交通运输行业创造良好的发展环境。</p>
                    <p>&ldquo;据此，我们预计，下半年交通运输主要实物量指标将略好于上半年，全年铁路公路水路客运量小幅增长，货运量、港口货物吞吐量稳步增长，交通固定资产投资规模维持高位。&rdquo;张大为说。</p>
                    
                    <div class="show-foot">编辑：汪时锋</div> -->
                    
               </div>
               
      <div id="div_attachment">
		附件：			
		 <!-- 如果有附件就显示 -->	     
	<?php if(!empty($news["attachmenturl"])): if(is_array($attachmenturlArr)): foreach($attachmenturlArr as $k=>$vo): ?><div>	      
		       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		       <a href="/grid_zz/index.php/Home/File/download?file_name=<?php echo ($attachmentArr[$k]); ?>&file_path=<?php echo C("LOCAL_UPLOAD"); echo ($vo); ?>" ><?php echo ($attachmentArr[$k]); ?></a>
		       
		     </div><?php endforeach; endif; endif; ?>
		    		  
</div>  	
               
               <div class="related">
                  <div class="sub_title"><h4>相关新闻</h4></div>
                    <ul class="column">                              
                    	
                     <?php if(is_array($newsList)): foreach($newsList as $key=>$vo): ?><li><a href="/grid_zz/index.php/Home/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,18,'utf-8')); ?></a></li><?php endforeach; endif; ?>                                        
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