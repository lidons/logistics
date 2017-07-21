<?php 
namespace Home\Controller;
use Think\Controller;
class DriverController extends Controller {
    public function index(){
		$res = D('Driver')->getDriverCount();
		$this->assign('res',$res);
		$this->display();
	}
}