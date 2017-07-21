<?php
function  show($status, $message,$data=array()) {
	$reuslt = array(
			'status' => $status,
			'message' => $message,
			'data' => $data,
	);
	exit(json_encode($reuslt));
}
//c=driver&a=upload&p=9
function Intercept($id){
	$res = substr($id ,20,9);
	return $res;
}
function getMd5Password($password){
	return md5($password);
}
function getLoginUsername() {
    return $_SESSION['adminUser']['username'] ? $_SESSION['adminUser']['username']: '';
}
function getDriver($status){
		//0 => '半挂车',
        //1 => '货车',
        //2 => '集装箱车',
        //3 => '卡车',
	if($status == 1){
		$res =  '半挂车';
	}elseif($status==2){
		$res = '货车';
	}elseif($status==3){
		$res = '集装箱车';
	}elseif($status==4){
		$res = '卡车';
	}
	return $res;
}

	