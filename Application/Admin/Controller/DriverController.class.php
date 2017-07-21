<?php 
namespace Admin\Controller;
use Think\Controller;
class DriverController extends Controller {
    public function index(){
		$res = D('Driver')->getDriverCount();
		$this->assign('res',$res);
 		$this->display();
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
		if(!isset($_POST['driver_type'])||!trim($_POST["driver_type"])){
			return show(0, "请选择正确的车型");
		}
		if($_POST['id']) {
                return $this->save($_POST);
        }
		$Driver= D("Driver")->insert($_POST);
		if (!$Driver) {
			return show(0,'添加失败');
		}else{
			return show(1, "添加成功",'/admin.php?c=driver');
		}
        }else {

            $DriveFrom = C("DRIVER_TYPENAME");
			//var_dump($copyFrom);exit();
            $this->assign('drive', $DriveFrom);
            $this->display();
        }
	}
	public function edit(){
		$id = $_GET['id'];
		$res = D("Driver")->getId($id);
		$DriveFrom = C("DRIVER_TYPENAME");
        $this->assign('drive', $DriveFrom);
        $this->assign('res', $res);
		$this->display();
	}
	public function remove(){
		if($_GET['p']){
		$p = $_GET['p'];
		$data =  D("Driver")->remove($p);
		if($data){
			$this->success('删除成功','/admin.php?c=driver');
		}else{
			$this->success('删除失败，请重新删除','/admin.php?c=driver');
		}
		}else{
			$this->display();
		}
	}
	public function save($data) {
        $menuId = $data['id'];
        unset($data['id']);
        try {
            $id = D("Driver")->UpdateDriverById($menuId, $data);
            if($id === false) {
                return show(0,'更新失败');
            }
            return show(1,'更新成功','/admin.php?c=driver');
        }catch(Exception $e) {
            return show(0,$e->getMessage());
        }
    }
	public function upload(){
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  =     './Upload/'; // 设置附件上传根目录
    // 上传文件 
    $info   =   $upload->upload();
    if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
    }else{// 上传成功
         foreach($info as $file){
          $file = $file['savepath'].$file['savename'];
		}
    }  
	   $id =  $_SERVER["QUERY_STRING"]; 
	   $driver = Intercept($id);
	   $image = '/upload/'.$file;
	   
	  $Driver= D("Driver")->insrtDriver($driver,$image);
	  if($Driver){
		  $this->success('上传成功','/admin.php?c=driver');
	  }else{
		  $this->success('上传失败','/admin.php?c=driver');
	  }
	}
}