<?php
namespace back\model;
use framework\core\Model;
class UserModel extends Model
{
	 public function getByEmail($email)
	 {
		  $sql = "select * from $this->table  where user_email = ". ' '.$this->dao->escapeData($email);
		  return  $this->dao->fetchRow($sql);
	 }
}
?>