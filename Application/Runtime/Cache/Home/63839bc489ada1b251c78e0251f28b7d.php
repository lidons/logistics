<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>发布货源</title>
<meta name="keywords" content="发布货源">
<meta name="description" content="发布货源">

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
  <a href="/index.php"><div class="i-head mg-auto overflow area border-bom">
     <h1>发布货源</h1>
  </div></a>
  
  
<div class="main container" style="background-color:white;">
<br>
	<div class="panel panel-info">
	  <div class="panel-heading">发布货源</div>
	  <div class="panel-body">
	    	<div id="#singcms-button-submit" class="content" style="border:1px;margin-top:10px;margin-left:20px;margin-right:20px;">
			<form id="singcms-form" method="post" enctype="multipart/form-data" >
				<div class="form-group">
				    <label for="xingming">发货人真实姓名</h1></label>
				    <input type="text" name="xingming" class="form-control" id="xingming" placeholder="请输入您的真实姓名">
				</div>
				<div class="form-group">
				    <label for="shoujihao">发货人手机号</label>
				    <input type="text" name="shoujihao" class="form-control" id="shoujihao" placeholder="请输入您的手机号">
				</div>
				<div class="form-group">
				    <label for="chufa">出发地</label>
				    <input type="text" name="chufa" class="form-control" id="chufa" placeholder="省/市/区(县)/街道">
				</div>
 
				<div class="form-group">
				    <label for="daoda">到达地</label>
				    <input type="text" name="daoda" class="form-control" id="daoda" placeholder="省/市/区(县)/街道">
				</div>
				<div class="form-group">
				    <label for="leixing">货物类型</label>
				    <input type="text" name="leixing" class="form-control" id="leixing" placeholder="如/建材/食品/化工/生鲜等">
				</div>
				<div class="form-group">
				    <label for="mingcheng">货物名称</label>
				    <input type="text" name="mingcheng" class="form-control" id="mingcheng" placeholder="请输入货物名称">
				</div>
				<div class="form-group">
				    <label for="zhongliang">货物重量（千克、公斤）</label>
				    <input type="text" name="zhongliang" class="form-control" id="zhongliang" placeholder="请输入货物重量">
				</div>
				<input type="button" onclick="Check()" class="btn btn-success" value="发布货源" />
				
				<a style="margin-left:10px;" class="btn btn-danger" href="/index.php">返回首页</a>
			</form>
			</div>
	  </div>
	</div>
	
</div>   <!--底部-->
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

		}
	}); 
	cTab("#tab1","#con1");  
	cTab("#tab2","#con2");  
};
</script>
<script src="/Public/dialog/layer.js"></script>
<script src="/Public/dialog.js"></script>
<script>

	  function Check(){
		  var username = $('input[name="xingming"]').val();
		  var iphone = $('input[name="shoujihao"]').val();
		  var deliver = $('input[name="chufa"]').val();
		  var receipt = $('input[name="daoda"]').val();
		  var goods_type = $('input[name="leixing"]').val();
		  var goods_name = $('input[name="mingcheng"]').val();
		  var goods_weight = $('input[name="zhongliang"]').val();
		  var d = new Date();
		  var date = d.toLocaleString();
		  //var date = d.getFullYear()+'-'+d.getMonth()+'-'+d.getDate()+''+d.getHost+':';
		  if(!goods_weight)
			  dialog.error('货物重量不能为空');
	  	  if(!goods_name)
	  		  dialog.error('货物名称不能为空');
	  	  if(!goods_type)
	  		  dialog.error('货物类型不能为空');
	  	  if(!receipt)
	  		  dialog.error('目的地不能为空');
	  	  if(!deliver)
	  		  dialog.error('出发地不能为空');
	  	  if(!iphone)
	  		  dialog.error('手机号不能为空');
	  	  if(!username)
	  		  dialog.error('用户名不能为空！');
		  var url = "/index.php?c=goods&a=check";
		  var data = {'username':username,
				     'iphone':iphone,
				     'deliver':deliver,
				     'receipt':receipt,
				     'goods_type':goods_type,
				     'goods_name':goods_name,
				     'goods_weight':goods_weight,
				     'date':date};
		  $.post(url,data,function(result){
			  	if (result.status == 0){
					return dialog.error(result.message);
				}
				if (result.status == 1){
					return dialog.success(result.message,'/index.php');
				}
		  },'JSON');
  }
</script>


</html>