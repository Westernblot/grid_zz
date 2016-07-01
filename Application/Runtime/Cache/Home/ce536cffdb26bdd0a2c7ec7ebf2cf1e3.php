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
                <a href="index.html">设为首页</a>
                <a href="index.html">登录</a>
                <a href="index.html">注册</a>
            </div>
            <div class="pull-right">
                <a href="index.html">电脑版</a>
                <a href="index.html">手机客户端</a>
                <a href="index.html">加入我们</a>
            </div>
        </div>
    </div>
</div>

    <!-- 固定条 -->
   <div class="bar">
    <div class="margin">
        <div class="top02">
                  <div class="pull-left">
                      <img src="/grid_zz/Public/images/logo.jpg" />
                  </div>
                  <div class="pull-right">
                      <img src="/grid_zz/Public/images/top-banner.jpg" />
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
                <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><input type="text" id="search" name="search" class="inputText" placeholder="请输入关键字"/> </td>
                        <td><input name="search" type="button" class="inputBtn" value="搜索" /></td>
                    </tr>
                </table>
              </div>
           </div>
    </div>
</div>

<div id="container"> 
   <div class="content_title"><a href="/grid_zz/index.php/Home/Index/index">首页</a>　>　<span><a href="/grid_zz/index.php/Home/Index/smph">私募排行</a></span></div>   
   <div class="sub-banner">
    	<a href="<?php echo ($link["action"]); ?>"><img src="<?php echo ($link["imgurl"]); ?>" width="1024" height="100" /></a>
    </div>
   <div class="content">
   		<div class="content-left border">
        	<div class="table-main">
                <ul class="r-title">   
                    <!-- <li class="active">近三月</li>
                    <li>近六月</li>
                    <li>近一年</li>
                    <li>近两年</li> -->
                        <li <?php if(($type) == "近三月"): ?>class="active"<?php endif; ?> ><a href="/grid_zz/index.php/Home/Index/smph?type=近三月">近三月</a></li>
                    	<li <?php if(($type) == "近六月"): ?>class="active"<?php endif; ?> ><a href="/grid_zz/index.php/Home/Index/smph?type=近六月">近六月</a></li>
                    	<li <?php if(($type) == "近一年"): ?>class="active"<?php endif; ?> ><a href="/grid_zz/index.php/Home/Index/smph?type=近一年">近一年</a></li>
                    	<li <?php if(($type) == "近两年"): ?>class="active"<?php endif; ?> ><a href="/grid_zz/index.php/Home/Index/smph?type=近两年">近两年</a></li>
                </ul>
                <table class="ranking">
                    <tr>
                        <th>排行</th>
                        <th>产品名称</th>
                        <th>基金经理</th>
                        <th>收益率</th>
                    </tr>
                    
                      <?php if(is_array($privateList)): foreach($privateList as $key=>$vo): ?><tr>
                        	<td><?php echo ($vo["rank"]); ?></td>
                        	<td><?php echo ($vo["name"]); ?></td>
                        	<td><?php echo ($vo["manager"]); ?></td>
                        	<td><?php echo ($vo["rate"]); ?></td>
                            </tr><?php endforeach; endif; ?>
                    <!-- <tr>
                        <td>1</td>
                        <td>创世翔1号</td>
                        <td>黄平</td>
                        <td>90.00%</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>汇吉证券投资</td>
                        <td>&nbsp;</td>
                        <td>79.00%</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>泰石1期</td>
                        <td>车克</td>
                        <td>78.00%</td>
                    </tr>   
                    <tr>
                        <td>4</td>
                        <td>平安证大一期</td>
                        <td>朱南松</td>
                        <td>69.00%</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>融裕5号</td>
                        <td>张一凡</td>
                        <td>67.00%</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>创世翔1号</td>
                        <td>黄平</td>
                        <td>90.00%</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>汇吉证券投资</td>
                        <td>&nbsp;</td>
                        <td>79.00%</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>泰石1期</td>
                        <td>车克</td>
                        <td>78.00%</td>
                    </tr>   
                    <tr>
                        <td>9</td>
                        <td>平安证大一期</td>
                        <td>朱南松</td>
                        <td>69.00%</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>融裕5号</td>
                        <td>张一凡</td>
                        <td>67.00%</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>创世翔1号</td>
                        <td>黄平</td>
                        <td>90.00%</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>汇吉证券投资</td>
                        <td>&nbsp;</td>
                        <td>79.00%</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>泰石1期</td>
                        <td>车克</td>
                        <td>78.00%</td>
                    </tr>   
                    <tr>
                        <td>14</td>
                        <td>平安证大一期</td>
                        <td>朱南松</td>
                        <td>69.00%</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>融裕5号</td>
                        <td>张一凡</td>
                        <td>67.00%</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>创世翔1号</td>
                        <td>黄平</td>
                        <td>90.00%</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>汇吉证券投资</td>
                        <td>&nbsp;</td>
                        <td>79.00%</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>泰石1期</td>
                        <td>车克</td>
                        <td>78.00%</td>
                    </tr>   
                    <tr>
                        <td>19</td>
                        <td>平安证大一期</td>
                        <td>朱南松</td>
                        <td>69.00%</td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>融裕5号</td>
                        <td>张一凡</td>
                        <td>67.00%</td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>创世翔1号</td>
                        <td>黄平</td>
                        <td>90.00%</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>汇吉证券投资</td>
                        <td>&nbsp;</td>
                        <td>79.00%</td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>泰石1期</td>
                        <td>车克</td>
                        <td>78.00%</td>
                    </tr>   
                    <tr>
                        <td>24</td>
                        <td>平安证大一期</td>
                        <td>朱南松</td>
                        <td>69.00%</td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>融裕5号</td>
                        <td>张一凡</td>
                        <td>67.00%</td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>创世翔1号</td>
                        <td>黄平</td>
                        <td>90.00%</td>
                    </tr>
                    <tr>
                        <td>27</td>
                        <td>汇吉证券投资</td>
                        <td>&nbsp;</td>
                        <td>79.00%</td>
                    </tr>
                    <tr>
                        <td>28</td>
                        <td>泰石1期</td>
                        <td>车克</td>
                        <td>78.00%</td>
                    </tr>   
                    <tr>
                        <td>29</td>
                        <td>平安证大一期</td>
                        <td>朱南松</td>
                        <td>69.00%</td>
                    </tr>
                    <tr>
                        <td>30</td>
                        <td>融裕5号</td>
                        <td>张一凡</td>
                        <td>67.00%</td>
                    </tr> -->
                </table>
                
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
   		<div class="content-right">
        	<div class="content-right-atd">
        		<?php if(is_array($linkList)): foreach($linkList as $key=>$vo): if(($vo["type"]) == "右边栏广告"): ?><a href="<?php echo ($vo["action"]); ?>"><img src="<?php echo ($vo["imgurl"]); ?>"/></a><br/><br/><?php endif; endforeach; endif; ?>
                <!-- <a href="#"><img src="picfile/atd01.jpg"/></a><br/><br/>
                <a href="#"><img src="picfile/atd02.jpg"/></a><br/><br/>
                <a href="#"><img src="picfile/atd03.jpg"/></a> -->
            </div>
        
        </div>
   </div>
</div>


     <!-- 固定条 -->
     <div id="foot">
    	<div class="margin">
        <div class="foot_lable">
            <a href="/grid_zz/index.php/Home/Index/about?type=关于我们" target="_blank">关于我们</a>　|　
            <a href="#" target="_blank">法律声明</a>　|　
            <a href="#" target="_blank">网站地图</a>　|　
            <a href="/grid_zz/index.php/Home/Index/about?type=联系我们" target="_blank">联系我们</a>
        </div>
        增值电信业务经营许可证 粤B2-20050348号 互联网视听节目服务(AVSP):粤备2015002 粤ICP备14046937号<br/>
		版权所有 中证财讯网
        </div>
	</div>

</body>
</html>