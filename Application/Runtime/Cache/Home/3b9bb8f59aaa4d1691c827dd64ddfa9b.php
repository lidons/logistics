<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>关于我们</title>
<meta name="keywords" content="关于我们">
<meta name="description" content="关于我们">

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0 , maximum-scale=1.0, user-scalable=0">
<link rel="stylesheet" type="text/css" href="/Public/Css/apply.css">
<link rel="stylesheet" type="text/css" href="/Public/Css/bootstrap.min.css">
<script type="text/javascript" src="/Public/Scripts/jquery.js"></script>
<script type="text/javascript" src="/Public/Scripts/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="/Public/Scripts/swiper-2.1.min.js"></script>
<script type="text/javascript" src="/Public/Scripts/lazyload.js"></script>

<script type="text/javascript" charset="utf-8">   
        $(function() {   
            $("img").lazyload({
				effect      : "fadeIn"
			});
        });   
    </script>
</head>

<body>

<div id="wrap" class="clearfix overflow mg-auto">    
  <a href="index.php"><div class="i-head mg-auto overflow area border-bom">
     <h1>关于我们</h1>
  </div></a>
<div class="main container" style="background-color:white;">
<br>
	<div class="panel panel-info">
	  <div class="panel-heading">关于我们</div>
	  <div class="panel-body">
	    	<div class="content" style="border:1px;margin-top:10px;margin-left:20px;margin-right:20px;">
			<p style="color:gray;font-size:14px;">
				利安集团成立于2001年8月，总部位于陕西西安，是一家专门从事信息化产业的高科技公司，注册资金5600万，目前在全国拥有12家省级分公司。2004年7月8日首个“利安生活电超市”在西安诞生，目前在西安市区已发展1016家门店，最高月服务人次达230万人次。利安集团在西安家喻户晓，已成为西安市民心中便民服务领域的第一品牌！
利安集团以其十余年的实力和经验，成立了渭南利安网络科技有限公司，于2015年强势进驻富平。目前公司已与中国联合网络通信有限公司陕西省分公司成功签约，将在农业信息化领域积极探索，通过陕西智慧三农平台、中国联合网络通信有限公司陕西省分公司、深圳妈妈资本和富平骐进生态农业有限公司联合发力，进一步推进农业信息化建设，用现代发展理念去引领农业。我们心怀远大梦想，要将以双向流通为基础的“利安模式”推广到全省，扎根富平，立足渭南，服务陕西！

			</p>
			</div>
	  </div>
	</div>
	
</div>
   <!--底部-->
  <div style="margin-top:15px;display: block;border-bottom: solid 1px #FFF;border-top: solid 1px #cacaca;text-indent: -9999px;height: 0px;">line</div>
  <div style="width: 100%; height: 3.8em; line-height: 3.8em; text-align: center; color:#666">利安助农 | 物流</div> 
  
</div>



<!--<div class="info-nr">
    <div id="info-nr-phone" class="info-nr-phone">
      <section id="toMenu"></section>
      <div class="menu_01"> <a href="bibei/default.htm"></a> </div>
      <div class="menu_02"> <a href="search/default.htm"></a> </div>
      <div class="menu_03"> <a href="topic/list_1000.html"></a> </div>
      <div class="menu_04"> <a href="wallpaper/default.htm"></a> </div>    
      <div class="menu_05"> <a href="biwan/default.htm"></a> </div>    
    </div>
</div>-->


</body> 
<script type="text/javascript" src="/Public/Scripts/com.js"></script> 
<script type="text/javascript">
window.onload = function(){
	var mySwiper = new Swiper('.swiper-container',{   
		pagination: '.pagination',
		loop:true,
		autoplay:3000,	
		paginationClickable: true,
		onSlideChangeStart: function(){
		   //回调函数
		}
	}); 
	cTab("#tab1","#con1");  
	cTab("#tab2","#con2");  
};
</script>
</html>