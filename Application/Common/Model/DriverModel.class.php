<?php
namespace  Common\Model;
use Think\Model;
class DriverModel extends Model{
	private $_db ='';
	public function __construct(){
		$this->_db = M('Driver');
	}
	public function insert($data=array()){
	if(!$data ||!is_array($data)){
		return 0;
	}
	return $this->_db->add($data);
	}
	public function getDriverCount(){
		return $this->_db->order('id desc')->select();
	}
	public function getId($id){
		return $this->_db->where('id='.$id)->find();
	}
	/*删除操作*/
	public function remove($d){
		return $this->_db->where('id='.$d)->delete();
	}
	/*更新操作*/
	public function UpdateDriverById($id, $data) {
        if(!$id || !is_numeric($id)) {
            throw_exception('ID不合法');
        }
        if(!$data || !is_array($data)) {
            throw_exception('更新的数据不合法');
        }
        return $this->_db->where('id='.$id)->save($data);

    }
	/*图片上传*/
	public function insrtDriver($id,$data){
		$data2['thumb'] = $data;
		return $this->_db->where('id='.$id)->save($data2);
	}
}
