<?php 
namespace Admin\Controller;
use Think\Controller;
use Think\Library\Org\Util;
class GoodsController extends Controller {
 	public function index(){
		$User = M('Goods'); // 实例化User对象
		$count= $User->count();// 查询满足要求的总记录数
		$Page= new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show();// 分页显示输出
		$list = $User->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('res',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
		
 	}
 	public function add(){
		if($_POST) {
        if(!isset($_POST['username'])||!trim($_POST['username'])){
 			return  show(0,"请填写正确的用户名");
		}
		if (!isset($_POST['iphone'])||!trim($_POST['iphone'])){
			return show(0,"请填写正确的手机号");
		}
		if(!preg_match("/^1[34578]{1}\d{9}$/",$_POST['iphone'])){  
 			return show(0, '请填写正确的手机号码');
       } 
       if(strlen($_POST['iphone'])!=11){
       		return show(0, "请填写正确的手机号码");
       } 
		if(!isset($_POST['deliver'])||!trim($_POST['deliver'])){
			return show(0, "请填写正确的地址");
		}
		if(!isset($_POST['receipt'])||!trim($_POST["receipt"])){
			return show(0, "请填写正确的地址");
		}
		if(!isset($_POST['goods_type'])||!trim($_POST['goods_type'])){
			return show(0, "请填写正确的货物类型");
		}
		if(!isset($_POST['goods_name']) ||!trim($_POST['goods_name'])){
			return show(0, "请填写正确的货物名字");
		}
		if(!isset($_POST['goods_weight'])||!trim($_POST['goods_weight'])||!is_numeric($_POST["goods_weight"])){
			return show(0,"请填写正确的货物重量");
		}
		if($_POST['id']) {
                return $this->save($_POST);
        }
		$Goods= D("Goods")->insert($_POST);
		if (!$Goods) {
			return show(0,'添加失败');
		}else{
			return show(1, "添加成功",'/admin.php');
		}

        }else {
            $this->display();
        }
 	}
	public function edit()
	{
		$id = $_GET['id'];
		$res = D("Goods")->getId($id);
        $this->assign('res', $res);
		$this->display();
	}	
	
	 public function save($data) {
        $menuId = $data['id'];
        unset($data['id']);
        try {
            $id = D("Goods")->updateGoodsById($menuId, $data);
            if($id === false) {
                return show(0,'更新失败');
            }
            return show(1,'更新成功');
        }catch(Exception $e) {
            return show(0,$e->getMessage());
        }
    }
	public function remove(){
		if($_GET['p']){
		$p = $_GET['p'];
		$data =  D("Goods")->remove($p);
		if($data){
			$this->success('删除成功','/admin.php');
		}else{
			$this->success('删除失败，请重新删除','/admin.php');
		}
		}else{
			$this->display();
		}
	}
	public function user(){
		$this->display();
	}
	
}