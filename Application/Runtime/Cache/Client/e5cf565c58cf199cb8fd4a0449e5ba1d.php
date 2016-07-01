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
    	<a href="javascript:#"><img src="/grid_zz/Public/images/1.jpg" width="950" height="100" /></a>
    </div>
   <div class="content">
   		<div class="content-left">
            <ul class="info">
            	
            	<?php if(is_array($newsList)): foreach($newsList as $key=>$vo): ?><li>
                	<a href="/grid_zz/index.php/Client/Index/show?id=<?php echo ($vo["id"]); ?>"><img src="<?php echo ($vo["imgurl"]); ?>" class="object"/></a>
                    <div class="lable">
                        <h3><a href="/grid_zz/index.php/Client/Index/show?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["subject"]); ?></a></h3>
                        <h5><?php echo ($vo["author"]); ?></h5>
                        <h6><?php echo ($vo["description"]); ?></h6>
                        <span>[<?php echo ($vo["intime"]); ?>]</span>
                    </div>
                    </li><?php endforeach; endif; ?>
            
            </ul>
            <div class='Page'>
                <?php echo ($page); ?>
            </div>
        </div>
   		<div class="content-right">
   			 <!--搜索模块开始-->
       		 <div class="title"><h4 style="text-indent:0em;"><img src="/grid_zz/Public/images/search.png" /> 文章搜索</h4></div>
             <div class="search">
          <form action="/grid_zz/index.php/Client/Index/news" >
          	<input type="hidden" name="type" value="<?php echo ($type); ?>" />
             <table>
                <tr>
                    <td class="text-right">关键字</td>
                    <td><input id="keyword" name="keyword" type="text" class="infoInput" value="<?php echo ($keyword); ?>" /></td>
                </tr>
                <!-- <tr>
                    <td class="text-right">分类</td>
                    <td>
                        <select size="1" name="tid" class="select" id="tid">
                            <option value="product1.html"> 标题</option>
                            <option value="product2.html"> 文章内容</option>
                        </select>
                    </td>
                </tr> -->
               <tr>
                    <td></td>
                    <td><input type="submit" class="buttonface" value="开始搜索" /></td>
                </tr>
            </table>
          </form>
             </div>
        <!--搜索模块结束-->
        
        	<ul class="side-list">  
        		
        		<?php if(is_array($linkList)): foreach($linkList as $key=>$vo): ?><li>
                    <a href="<?php echo ($vo["action"]); ?>" class="listlable"><img src="<?php echo ($vo["imgurl"]); ?>" /></a>
                    <div class="listText">
                        <div class="focus-on"><a href="<?php echo ($vo["action"]); ?>">关注</a></div>
                        <div class="t"><a href="<?php echo ($vo["action"]); ?>"><?php echo ($vo["name"]); ?></a></div>
                        <div class="tab-bg"></div>
                    </div>
                   </li><?php endforeach; endif; ?>
            </ul>
        
        </div>
   </div>
</div>

</body>
</html>