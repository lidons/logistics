<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>货源列表</title>
<meta name="keywords" content="货源列表">
<meta name="description" content="货源列表">

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0 , maximum-scale=1.0, user-scalable=0">
<link rel="stylesheet" type="text/css" href="/Public/Css/apply.css">
<link rel="stylesheet" type="text/css" href="/Public/Css/share.css">
<link rel="stylesheet" type="text/css" href="/Public/Css/public.css">
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
     <h1>货源详情</h1>
  </div></a>  <!--列表开始-->
    <div class="i-tab mg-auto overflow area clearfix">
      <div class="i-tab-title">
          <h2>货源详情</h2>
      </div>
      <div class="tab-content clearfix overflow" id="con1">
        <div class="clearfix tab-con2 tab-con-info" style="padding-top:10px;padding-left:10px;padding-right:10px;margin-top:20px;background-color:white;"> 
           <span>货品名称：<?php echo ($data["goods_name"]); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
           <span>货品重量：<?php echo ($data["goods_weight"]); ?></span>千克&nbsp;&nbsp;&nbsp;&nbsp;
           <span>货品类型：<?php echo ($data["goods_type"]); ?></span><br><br>
           <span>出发地：<?php echo ($data["deliver"]); ?></span><br><br>
           <span>目的地：<?php echo ($data["receipt"]); ?></span><br><br>
           <span>发货人：<?php echo ($data["username"]); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span>手机号：<?php echo ($data["iphone"]); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span>发布时间：<?php echo ($data["date"]); ?></span><br><br>
         </div>
      </div>
    </div>
  <!--列表结束-->   <!--底部-->
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