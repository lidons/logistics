var submit = {
		check:function(){
			  alert(1);
			  var username = $('input[name="xingming"]').val();
			  var phone = $('input[name="shoujihao"]').val();
			  var deliver = $('input[name="chufa"]').val();
			  var receipt = $('input[name="daoda"]').val();
			  var goods_type = $('input[name="leixing"]').val();
			  var goods_name = $('input[name="mingchengda"]').val();
			  var goods_weight = $('input[name="zhongliang"]').val();
		  	  if(!username){
		  		  dialog.error('用户名不能为空！');
			  }
		}
}