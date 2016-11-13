<?php
  namespace back\model;
 use framework\core\Model;

 class TopicModel extends Model
 {
	  protected $logic_table = 'topic';
      public function getTopicList()
	 {
		  
		 $sql = "SELECT * From `$this->table`";

		 $topic_list = $this->dao->fetchAll($sql);

		 return $topic_list;
	 }


 }
?>