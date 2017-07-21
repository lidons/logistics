<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
		if(session('adminUser')) {
           $this->success('请你先登录','/admin.php?c=login');
        }
		$this->display();
	}
   public function check() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(!trim($username)) {
            return show(0,'用户名不能为空');
        }
        if(!trim($password)) {
            return show(0,'密码不能为空');
        }
        $ret = D('Admin')->getUsernameById($username);
		if(!$ret){
			return show(0,'用户名不存在');
		}
        if($ret['password'] != getMd5Password($password)) {
            return show(0,'密码错误');
        }
		session('adminUser', $ret);
		return show(1,'登录成功','admin.php');


    }
	public function loginout() {
        session('adminUser', null);
        $this->success('正在退出','/admin.php?c=login');
    }
}