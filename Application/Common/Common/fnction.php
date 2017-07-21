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
	$res = substr($id , 0,-20);
	return $res
}
function getMd5Password($password){
	return md5($password);
}
function getLoginUsername() {
    return $_SESSION['adminUser']['username'] ? $_SESSION['adminUser']['username']: '';
}