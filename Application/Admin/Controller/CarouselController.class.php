<?php
namespace Admin\Controller;
use Think\Controller;
class CarouselController extends Controller {
    public function index(){
		$res = D("Carousel")->getMenusCount();
		$this->assign('res',$res);
		$this->display();
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
	   //$id =  $_SERVER["QUERY_STRING"]; 
	   //$driver = Intercept($id);
	   $driver = $_GET['p'];
	   $image = '/upload/'.$file;
	   $Driver= D("Carousel")->insrtDriver($driver,$image);
	  if($Driver){
		  $this->success('上传成功','/admin.php?c=carousel');
	  }else{
		  $this->success('上传失败','/admin.php?c=carousel');
	  }
	}
}