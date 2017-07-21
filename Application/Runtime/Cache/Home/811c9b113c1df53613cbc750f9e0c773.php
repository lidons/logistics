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
     <h1>司机列表</h1>
  </div></a>  <!--列表开始-->
    <div class="i-tab mg-auto overflow area clearfix">
      <div class="i-tab-title">
          <h2>司机列表</h2>
          	
      </div>
      <div class="tab-content clearfix overflow" id="con1">
        <div class="clearfix tab-con2 " >
             <ul class="clearfix">
				<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="background-color:white;">
                   <a href="#" class="tab-con-href2 clearfix">
                     <div class="img2" style="margin-left:8px;margin-right:8px;">
                     <img style="height:80px;width:80px;" src="<?php echo ($vo["thumb"]); ?>" alt="" title="">
                     </div>
                     
                     <p style="height:16px;font-size:12px;"><i><span style="font-size:16px;color:black;"><?php echo ($vo["username"]); ?></span><span style="font-size:12px;color:gray;">&nbsp;&nbsp;&nbsp;手机号：&nbsp;<?php echo ($vo["iphone"]); ?></span></i></p>
                     
                     <p style="font-size:12px;"><i>地址：<span style="color:red"><?php echo ($vo["deliver"]); ?></span></i></p> 
                     <p style="font-size:12px;"><i>车型：<span style="color:red"><?php echo ($vo["driver_type"]); ?></span></i></p>                    
                     
                   </a>                       
                </li><?php endforeach; endif; else: echo "" ;endif; ?>        
           </ul>        
         </div>
      </div>
    </div>
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