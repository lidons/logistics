<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>货物运输</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap/css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="/public/css/theme.css">
    <link rel="stylesheet" href="/public/css/font-awesome/css/font-awesome.css">

    <script src="/public/css/jquery-1.8.1.min.js" type="text/javascript"></script>

    <!-- Demo page code -->
    
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7"> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8"> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9"> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <ul class="nav pull-right">
                    
                    <li id="fat-menu" class="dropdown">
                        <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i><?php echo getLoginUsername()?>
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">详细</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="/admin.php?c=login&a=loginout">退出</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="index.html"><span class="first">利安</span> <span class="second">物流</span></a>
            </div>
        </div>
    </div>
    

    <div class="container-fluid">
        
        <div class="row-fluid">
            <div class="span3">
                <div class="sidebar-nav">
                  <div class="nav-header" data-toggle="collapse" data-target="#dashboard-menu"><i class="icon-dashboard"></i>管理员</div>
                    <ul id="dashboard-menu" class="nav nav-list collapse in">
                    	<li><a href="/admin.php?c=admin">管理员显示</a></li>
                        <li><a href="/admin.php?c=admin&a=add">增加管理员</a></li>
                    </ul>
                <div class="nav-header" data-toggle="collapse" data-target="#accounts-menu"><i class="icon-briefcase"></i>司机详情<span class="label label-info">+10</span></div>
                <ul id="accounts-menu" class="nav nav-list collapse in">
                  <li ><a href="/admin.php?c=driver&a=add">添加司机</a></li>
                  <li ><a href="/admin.php?c=driver">司机显示</a></li>
                </ul>

                <div class="nav-header" data-toggle="collapse" data-target="#settings-menu"><i class="icon-exclamation-sign"></i>货物</div>
                <ul id="settings-menu" class="nav nav-list collapse in">
                  <li ><a href="/admin.php?c=goods">货物详情</a></li>
                  <li ><a href="/admin.php?c=goods&a=add">增加货物</a></li>
                </ul>

                <div class="nav-header" data-toggle="collapse" data-target="#legal-menu"><i class="icon-legal"></i>关于我们</div>
                <ul id="legal-menu" class="nav nav-list collapse in">
                  <li ><a href="privacy-policy.html">公司简介</a></li>
                </ul>
            </div>
        </div>
        <div class="span9">
            <script type="text/javascript" src="lib/jqplot/jquery.jqplot.min.js"></script>
<script type="text/javascript" charset="utf-8" src="javascripts/graphDemo.js"></script>




<h1 class="page-title">修改货物</h1>
<div class="well">
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
<form>
                    <div class="form-group">
				    <label for="xingming"></h1></label>
				    <input type="text" name="xingming" style="width:600px;" class="form-control" id="xingming" value="<?php echo ($res["username"]); ?>"
					placeholder="请输入您的真实姓名">
				</div>
				<div class="form-group">
				    <label for="shoujihao">发货人手机号</label>
				    <input type="text" name="shoujihao" style="width:600px;" class="form-control" id="shoujihao" value="<?php echo ($res["iphone"]); ?>" >
				</div>
				<div class="form-group">
				    <label for="chufa">出发地</label>
				    <input type="text" name="chufa" style="width:600px;" class="form-control" id="chufa" value="<?php echo ($res["deliver"]); ?>">
				</div>
 
				<div class="form-group">
				    <label for="daoda">到达地</label>
				    <input type="text" name="daoda" style="width:600px;" class="form-control" id="daoda"value="<?php echo ($res["receipt"]); ?>" >
				</div>
				<div class="form-group">
				    <label for="leixing">货物类型</label>
				    <input type="text" name="leixing" style="width:600px;"  class="form-control" id="leixing" value="<?php echo ($res["goods_type"]); ?>">
				</div>
				<div class="form-group">
				    <label for="mingcheng">货物名称</label>
				    <input type="text" name="mingcheng" style="width:600px;" class="form-control" id="mingcheng" value="<?php echo ($res["goods_name"]); ?>">
				</div>
				<div class="form-group">
				    <label for="zhongliang">货物重量（千克、公斤）</label>
				    <input type="text" name="zhongliang" style="width:600px;" class="form-control" id="zhongliang" value="<?php echo ($res["goods_weight"]); ?>">
				</div>
					<input type="hidden" name="id" value="<?php echo ($res["id"]); ?>"/>
                    <input onclick="Check()" style="width:60px; margin-right:450px;margin-top:20px;" class="btn btn-primary pull-right" value="修改"/>
                    <div class="clearfix"></div>
                </form>
</div>
      <div class="tab-pane fade" id="profile">
      </div>
  </div>

</div>


        </div>
    </div>
    <footer>
        <hr>
        <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
        <p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
        <p>&copy; 2012 <a href="http://www.portnine.com">Portnine</a></p>
    </footer>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/public/css/bootstrap/js/bootstrap.js"></script>
	<script src="/Public/dialog/layer.js"></script>
	<script src="/Public/jump.js"></script>
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
		  var id  = $('input[name="id"]').val();
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
		  var url = "/admin.php?c=goods&a=add";
		  var data = {'username':username,
				     'iphone':iphone,
				     'deliver':deliver,
				     'receipt':receipt,
				     'goods_type':goods_type,
				     'goods_name':goods_name,
				     'goods_weight':goods_weight,
				     'date':date,
					 'id':id};
		  $.post(url,data,function(result){
			  	if (result.status == 0){
					return dialog.error(result.message);
				}
				if (result.status == 1){
					return dialog.success(result.message,'/admin.php');
				}
		  },'JSON'); 
  }
  
  
	$(".showId").click(function(){
		var id = $(this).attr('attr-id');
		dialog.confirm('是否确认删除','/admin.php?c=goods&a=remove&p='+id);
	});
	$(".obgId").click(function(){
		var id = $(this).attr('attr-id');
		dialog.confirm('是否确认删除','/admin.php?c=driver&a=remove&p='+id);
	});
	$(".adminId").click(function(){
		var id = $(this).attr('attr-id');
		dialog.confirm('是否确认删除','/admin.php?c=admin&a=remove&p='+id);
	});
	  function Submit(){
		  var username = $('input[name="xingming"]').val();
		  var iphone = $('input[name="shoujihao"]').val();
		  var deliver = $('input[name="zhuzhi"]').val();
		  var driver_type = $('input[name="chexing"]').val();
		  var d = new Date();
		  var date = d.toLocaleString();
		  var id  = $('input[name="id"]').val();
		  //var date = d.getFullYear()+'-'+d.getMonth()+'-'+d.getDate()+''+d.getHost+':';
	  	  if(!iphone)
	  		  dialog.error('手机号不能为空');
	  	  if(!deliver)
	  	   dialog.error('地址不能为空');
		 if(!driver_type)
	  		  dialog.error('车型不能为空');
		 if(!iphone)
	  		  dialog.error('手机号不能为空');
		 if(!username)
			  dialog.error('姓名不能为空');
		  var url = "/admin.php?c=driver&a=add";
		  var data = {'username':username,
				     'iphone':iphone,
				     'deliver':deliver,
				     'driver_type':driver_type,
				     'date':date,
					 'id':id};
		  $.post(url,data,function(result){
			  	if (result.status == 0){
					return dialog.error(result.message);
				}
				if (result.status == 1){
					return dialog.success(result.message,'/admin.php?c=driver');
				}
		  },'JSON'); 
  }
  function Login(){
	 	var username = $('input[name="username"]').val();
		var password = $('input[name="password"]').val();
		if(!password){
			dialog.error('密码不能为空');
		}
		if(!username){
			dialog.error('用户名不能为空');
		}
		var url ='/admin.php?c=login&a=check';
		var data={'username':username,'password':password};
		$.post(url,data,function(result){
			if(result.status == 0){
				return dialog.error(result.message);
			}
			if (result.status == 1){
					return dialog.success(result.message,'/admin.php');
				}
		},'json');
  }
  function Admin(){
	 	var username = $('input[name="username"]').val();
		var password = $('input[name="password"]').val();
		var newpassword = $('input[name="newpassword"]').val();
		var email = $('input[name="email"]').val();
		if(!email){
			dialog.error("邮箱不能为空");
		}
		if(password != newpassword){
			dialog.error('两次输入密码不一致');
		}
		if(!password){
			dialog.error('密码不能为空');
		}
		if(!username){
			dialog.error('用户名不能为空');
		}
		var url ='/admin.php?c=admin&a=add';
		var data={'username':username,'password':password,'email':email};
		$.post(url,data,function(result){
			if(result.status == 0){
				return dialog.error(result.message);
			}
			if (result.status == 1){
					return dialog.success(result.message,'/admin.php?c=admin');
				}
		},'json');
  }
  </script>
  </body>
</html>