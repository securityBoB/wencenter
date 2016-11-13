<?php
namespace front\model;
use framework\core\Model;
use framework\core\Factory;
class UserModel extends Model
{
	 public function checkByCode($user_id, $active_code)//判断激活链接过来的的id或者active是否正确
	 {
		 $user = $this->find($user_id);
		 if(!$user )
		 {
			 return false;
		 }

		 if($user['active_code']!==$active_code)
		 {
             return false;
		 }
		 return  $user;
	 }

	 public function getByName($user_name)
	 {
		  $sql = "SELECT * FROM $this->table WHERE user_name =".' '.$this->dao->escapeData($user_name);
		  return $this->dao->fetchRow($sql);
	 }
	 public function getByMd5Id($user_id)
	 { 
		  $sql = "SELECT * FROM $this->table WHERE md5(concat(user_id ,user_salt))= ".' '.$this->dao->escapeData($user_id);
		  return $this->dao->fetchRow($sql);
	 }
	 
}
?>