<?php 
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
 	public function index(){
		$res = D('Admin')->getAdminCount();
		$this->assign('res',$res);
 		$this->display();
 	}	
	public function add(){
		if($_POST){
			if(!isset($_POST['username'])||!trim($_POST['username'])){
				return  show(0,"请填写正确的用户名");
			}
			if (!isset($_POST['password'])||!trim($_POST['password'])){
				return show(0,"请填写正确的密码");
			}
		   if(!isset($_POST['email'])|| !trim($_POST['email'])){
			   return show(0,'请输入正确的邮箱地址');
		   }
		   $username = $_POST['username'];
		   $user = D('Admin')->getUsernameById($username);
		   if($user){
			   return show(0,'用户名已存在');
		   }
		   
		   $_POST['password']= md5($_POST['password']);
		   //var_dump($_POST);exit;
		   $admin = D('Admin')->insert($_POST);
		   if (!$admin) {
			return show(0,'添加失败');
			}else{
			return show(1, "添加成功",'/admin.php');
			} 
		}else{
			$this->display();
		}
	}
	public function remove(){
		if($_GET['p']){
			
		$p = $_GET['p'];
		$data =  D("Admin")->remove($p);
		if($data){
			$this->success('删除成功','/admin.php?c=admin');
		}else{
			$this->success('删除失败，请重新删除','/admin.php?c=admin');
		}
		}else{
			$this->display();
		}
		
	}
}