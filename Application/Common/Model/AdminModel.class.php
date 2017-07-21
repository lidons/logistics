<?php
namespace Common\Model;
use Think\Model;
class AdminModel extends Model{
	private $_db ='';
	public function __construct(){
		$this->_db = M('Admin');
	}
	public function getAdminCount(){
		return $this->_db->order('id desc')->select();
	}
	public function getUsernameById($username){
        $res = $this->_db->where('username="'.$username.'"')->find();
        return $res;
	}
	public function insert($data=array()){
		if(!$data ||!is_array($data)){
			return 0;
		}
		
		return $this->_db->add($data);
	}
	public function insetBy($username,$password,$email){
		$un['username'] = $username;
		$pwd['passwprd'] = $password;
		$em['email'] = $email;
		return $this->_db->add($un,$pwd,$em);
	}
	public function remove($d){
		return $this->_db->where('id='.$d)->delete();
	}
}