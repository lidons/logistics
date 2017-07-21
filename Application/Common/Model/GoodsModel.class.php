<?php
namespace Common\Model;
use Think\Model;
class GoodsModel extends Model{
	private $_db ='';
	public function __construct(){
		$this->_db = M('Goods');
	}
	/*插入*/
	public function insert($data=array()){
		if(!$data ||!is_array($data)){
			return 0;
		}
		return $this->_db->add($data);
	}
	/*获取数据库的值*/
	public function getMenusCount(){
		return $this->_db->order('id desc')->select();
	}

	public function getId($id){
		return $this->_db->where('id='.$id)->find();
	}
	/*删除操作*/
	public function remove($d){
		return $this->_db->where('id='.$d)->delete();
	}
	/*首页的显示*/
	public function getGoodsCount(){
		return $this->_db->order('id desc')->limit(10)->select();
	}
	
	/*更新操作*/
	public function updateGoodsById($id, $data) {
        if(!$id || !is_numeric($id)) {
            throw_exception('ID不合法');
        }

        if(!$data || !is_array($data)) {
            throw_exception('更新的数据不合法');
        }

        return $this->_db->where('id='.$id)->save($data);

    }
	 public function getGoodsByCount() {
        $data['status'] = array('neq',-1);
        return $this->_db->where($data)->count();
    }


}