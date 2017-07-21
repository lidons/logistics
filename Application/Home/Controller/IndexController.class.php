<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$res = D('Goods')->getGoodsCount();
		$Carousel = D("Carousel")->getMenusCount();
		$this->assign('res',$res);
		$this->assign('Carousel',$Carousel);
		$this->display();
	}
}