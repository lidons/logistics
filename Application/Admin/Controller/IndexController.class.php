<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		if(!session('adminUser')) {
           //$this->success('你还没有登录','/admin.php?c=login',1);
		   //$this->redirect('/admin.php?c=login');
		   //$this->redirect('/admin.php?c=login');
		   
		   $this->redirect('/admin/login');
        }
		$User = M('Goods'); // 实例化User对象
		$count= $User->count();// 查询满足要求的总记录数
		$Page= new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show();// 分页显示输出
		$list = $User->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('res',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
    	//$res = D('Goods')->getMenusCount();
    	//$this->assign('res',$res);
		//$this->display();
	}
}