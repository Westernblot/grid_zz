<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
   <title><?php echo ($type); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link href="/grid_zz/Public/mcss/base.css" rel="stylesheet" type="text/css"/>
  	<link href="/grid_zz/Public/mcss/subPage.css" rel="stylesheet" type="text/css"/>
</head>
<body id="wrap">
<header class="header">    
        <a href="/grid_zz/index.php/Mobile/Index/index.html" class="return_back">返回</a>
        <h2 class="main_title"><?php echo ($type); ?></h2>
        <a href="/grid_zz/index.php/Mobile/Index/guide.html" class="right_aside"><span class="tab_bar_menu"></span></a>
</header>
  
<div class="tj_art_baner"><img src="<?php echo ($link["imgurl"]); ?>"/></div>  

<div class="page-widget"> 
  <!--列表开始-->
    <div class="carditems"  id="j_content">
  
  <?php if(is_array($newsList)): foreach($newsList as $key=>$vo): ?><a href="/grid_zz/index.php/Mobile/Index/show?id=<?php echo ($vo["id"]); ?>">
      <dl class="carditems_list">
        <dt class="carditems_list_dt"> <img src="<?php echo ($vo["imgurl"]); ?>" /> </dt>
        <dd class="carditems_list_dd">
          <h3 class="carditems_list_h3"><?php echo ($vo["subject"]); ?></h3>
          <h4 class="carditems_list_h4"><?php echo (subtext($vo["description"],30)); ?></h4>
          <!-- <p class="carditems_list_op"><span class="op_ico time_num fl">6小时前</span><span class="op_ico num_ico fr">300</span></p> -->
             <p class="carditems_list_op"><span class="op_ico time_num fl"><?php echo ($vo["intime"]); ?></span>
              	<!-- <span class="op_ico num_ico fr">2</span> -->
              	</p>
              </dd>
      </dl>
      </a><?php endforeach; endif; ?> 
     
     </div>
     
          <script id="j_template" type="text/x-dot-template">
				      
				{{ for(var i=0; i < it.length; i++) { }}
				         
				    <a href="/grid_zz/index.php/Mobile/Index/show?id={{=it[i].id}}">
                         <dl class="carditems_list">
                             <dt class="carditems_list_dt"> <img src="{{=it[i].imgurl}}" /> </dt>
                             <dd class="carditems_list_dd">
                             <h3 class="carditems_list_h3">{{=it[i].subject}}</h3>
                             <h4 class="carditems_list_h4">{{=it[i].description}}</h4>
                             <!-- <p class="carditems_list_op"><span class="op_ico time_num fl">6小时前</span><span class="op_ico num_ico fr">300</span></p> -->
                             <p class="carditems_list_op"><span class="op_ico time_num fl">{{=it[i].intime}}</span>
              	               <!-- <span class="op_ico num_ico fr">2</span> -->
              	             </p>
                             </dd>
                         </dl>
                    </a>
				         				         
			    {{ } }}
				        				        
	      </script>
     
      <div class="card_more_list">
				<span class="hIcon more_btn_down" onclick="getMoreData()">展开更多</span>
			</div>
  <!--列表结束--> 
</div>

<!-- 返回顶部 -->
<a title="返回顶部" href="#top" class="backTop" id="toolBackTop">返回顶部</a>
<!-- 页尾 -->
<footer>
		<div class="i-footer">
			<div class="i-footer_nav">
				<a href="/grid_zz/index.php/Mobile/Index/index.html" class="linkico">首页</a>
                <a href="/grid_zz/index.php/Mobile/Index/guide.html" class="linkico">导航</a>
                <a href="/grid_zz/index.php/Mobile/Index/about.html" class="linkico">关于</a>								
			</div>
            <p class="i-footer_copy">
               版权所有 中证财讯网
            </p>
		</div>
	</footer>
 <!-- 固定条 -->
   <nav class="nav_tab">
	<ul class="table">
		<li><a href="/grid_zz/index.php/Mobile/Index/order.html">预约开户</a></li>
		<li class="on"><a href="tel:4007237988">一键拨打</a></li>
		<li><a href="/grid_zz/index.php/Mobile/Index/register.html">注册</a></li>
    </ul>
</nav>
<div class="visible"></div>
   
<script type="text/javascript" src="/grid_zz/Public/js/zepto.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/doT.min.js"></script>
<script type="text/javascript" src="/grid_zz/Public/js/toolBackTop.js"></script>

<script type="text/javascript">
	function getMoreData(){
	
	var type='<?php echo ($type); ?>';
	var start=$('#j_content a').length;	
	
				$.ajax({
					type : 'POST',
					url : '/grid_zz/index.php/Mobile/Index/loadMoreNews',
					data : {
						type : type,
						start : start
					},
					dataType : 'json',
					timeout : 3000,
					context: $('body'),
					success : function(data) {
                         
                           var fn = doT.template($("#j_template").html());
                           $("#j_content").append(fn(data));
					},
					error : function(xhr, type) {
						   alert('数据访问失败！');
					}
				});

		}

	</script>

</body>
</html>