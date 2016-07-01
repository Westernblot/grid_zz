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
   <div class="content_title"><a href="/grid_zz/index.php/Home/Index/index">首页</a>　>　<span><a href="/grid_zz/index.php/Home/Index/wonder">精彩回顾</a></span></div>   
   <div class="sub-banner">
    		<a href="<?php echo ($link["action"]); ?>"><img src="<?php echo ($link["imgurl"]); ?>" width="1024" height="100" /></a>
    </div>
   <div class="content">
   		<div class="content-left border">
        	<div class="table-main">
                <table class="stock">
                    	<tr>
                        	<th>股票</th>
                        	<th>代码</th>
                        	<th>日期</th>
                        	<th>板块内容</th>
                        	<th>涨幅</th>
                        </tr>
                        
                        <?php if(is_array($wonderList)): foreach($wonderList as $key=>$vo): ?><tr>
                        	<td><?php echo ($vo["stock"]); ?></td>
                        	<td><?php echo ($vo["code"]); ?></td>
                        	<td><?php echo ($vo["indate"]); ?></td>
                        	<td><?php echo ($vo["content"]); ?></td>
                        	<td><?php echo ($vo["increase"]); ?></td>
                            </tr><?php endforeach; endif; ?>
                    	<!-- <tr class="even">
                        	<td>中国铁建</td>
                        	<td>601186</td>
                        	<td>2015-7-07</td>
                        	<td>铁路基建</td>
                        	<td>29.79%</td>
                        </tr>
                    	<tr>
                        	<td>伊利股份</td>
                        	<td>600887</td>
                        	<td>2015-7-08</td>
                        	<td>食品饮料</td>
                        	<td>20.87%</td>
                        </tr>
                    	<tr class="even">
                        	<td>中国铁建</td>
                        	<td>601186</td>
                        	<td>2015-7-07</td>
                        	<td>铁路基建</td>
                        	<td>29.79%</td>
                        </tr>
                    	<tr>
                        	<td>伊利股份</td>
                        	<td>600887</td>
                        	<td>2015-7-08</td>
                        	<td>食品饮料</td>
                        	<td>20.87%</td>
                        </tr>
                    	<tr class="even">
                        	<td>中国铁建</td>
                        	<td>601186</td>
                        	<td>2015-7-07</td>
                        	<td>铁路基建</td>
                        	<td>29.79%</td>
                        </tr>
                    	<tr>
                        	<td>伊利股份</td>
                        	<td>600887</td>
                        	<td>2015-7-08</td>
                        	<td>食品饮料</td>
                        	<td>20.87%</td>
                        </tr>
                    	<tr class="even">
                        	<td>中国铁建</td>
                        	<td>601186</td>
                        	<td>2015-7-07</td>
                        	<td>铁路基建</td>
                        	<td>29.79%</td>
                        </tr>
                    	<tr>
                        	<td>伊利股份</td>
                        	<td>600887</td>
                        	<td>2015-7-08</td>
                        	<td>食品饮料</td>
                        	<td>20.87%</td>
                        </tr>
                    	<tr class="even">
                        	<td>中国铁建</td>
                        	<td>601186</td>
                        	<td>2015-7-07</td>
                        	<td>铁路基建</td>
                        	<td>29.79%</td>
                        </tr>

                    	<tr>
                        	<td>伊利股份</td>
                        	<td>600887</td>
                        	<td>2015-7-08</td>
                        	<td>食品饮料</td>
                        	<td>20.87%</td>
                        </tr>
                    	<tr class="even">
                        	<td>中国铁建</td>
                        	<td>601186</td>
                        	<td>2015-7-07</td>
                        	<td>铁路基建</td>
                        	<td>29.79%</td>
                        </tr>
                    	<tr>
                        	<td>伊利股份</td>
                        	<td>600887</td>
                        	<td>2015-7-08</td>
                        	<td>食品饮料</td>
                        	<td>20.87%</td>
                        </tr>
                    	<tr class="even">
                        	<td>中国铁建</td>
                        	<td>601186</td>
                        	<td>2015-7-07</td>
                        	<td>铁路基建</td>
                        	<td>29.79%</td>
                        </tr>

                    	<tr>
                        	<td>伊利股份</td>
                        	<td>600887</td>
                        	<td>2015-7-08</td>
                        	<td>食品饮料</td>
                        	<td>20.87%</td>
                        </tr>
                    	<tr class="even">
                        	<td>中国铁建</td>
                        	<td>601186</td>
                        	<td>2015-7-07</td>
                        	<td>铁路基建</td>
                        	<td>29.79%</td>
                        </tr>
                    	<tr>
                        	<td>伊利股份</td>
                        	<td>600887</td>
                        	<td>2015-7-08</td>
                        	<td>食品饮料</td>
                        	<td>20.87%</td>
                        </tr>
                    	<tr class="even">
                        	<td>中国铁建</td>
                        	<td>601186</td>
                        	<td>2015-7-07</td>
                        	<td>铁路基建</td>
                        	<td>29.79%</td>
                        </tr>

                    	<tr>
                        	<td>伊利股份</td>
                        	<td>600887</td>
                        	<td>2015-7-08</td>
                        	<td>食品饮料</td>
                        	<td>20.87%</td>
                        </tr>
                    	<tr class="even">
                        	<td>中国铁建</td>
                        	<td>601186</td>
                        	<td>2015-7-07</td>
                        	<td>铁路基建</td>
                        	<td>29.79%</td>
                        </tr>
                    	<tr>
                        	<td>伊利股份</td>
                        	<td>600887</td>
                        	<td>2015-7-08</td>
                        	<td>食品饮料</td>
                        	<td>20.87%</td>
                        </tr>
                    	<tr class="even">
                        	<td>中国铁建</td>
                        	<td>601186</td>
                        	<td>2015-7-07</td>
                        	<td>铁路基建</td>
                        	<td>29.79%</td>
                        </tr>

                    	<tr>
                        	<td>伊利股份</td>
                        	<td>600887</td>
                        	<td>2015-7-08</td>
                        	<td>食品饮料</td>
                        	<td>20.87%</td>
                        </tr>
                    	<tr class="even">
                        	<td>中国铁建</td>
                        	<td>601186</td>
                        	<td>2015-7-07</td>
                        	<td>铁路基建</td>
                        	<td>29.79%</td>
                        </tr>
                    	<tr>
                        	<td>伊利股份</td>
                        	<td>600887</td>
                        	<td>2015-7-08</td>
                        	<td>食品饮料</td>
                        	<td>20.87%</td>
                        </tr>
                    	<tr class="even">
                        	<td>中国铁建</td>
                        	<td>601186</td>
                        	<td>2015-7-07</td>
                        	<td>铁路基建</td>
                        	<td>29.79%</td>
                        </tr> -->

                    </table>
                
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
        </div>
   		<div class="content-right">
        	<div class="content-right-atd">
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