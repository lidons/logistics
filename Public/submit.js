var submit = {
	check:function(){
		//获取登录页面的用户名和密码
		var username = $('input[name="xingming"]').val();
		var password = $('input[name="password"]').val();
	
		if(!username){
			dialog.error('用户名不能为空');
		}
		
		//执行异步请求 $.post
		var url ="/index.php?c=goods&a=check";
		var data = {'username':username,'password':password};
		$.post(url,data,function(result){
			if (result.status == 0){
				return dialog.error(result.message);
			}
			if (result.status == 1){
				return dialog.success(result.message,'/admin.php');
			}
		},"json");
	}
}