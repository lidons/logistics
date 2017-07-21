<?php
namespace  Common\Model;
use Think\Model;
class CarouselModel extends Model{
	private $_db ='';
	public function __construct(){
		$this->_db = M('Carousel');
	}
	public function getMenusCount(){
		return $this->_db->select();
	}

	/*图片上传*/
	public function insrtDriver($id,$data){
		$data2['thumb'] = $data;
		return $this->_db->where('id='.$id)->save($data2);
	}
}
