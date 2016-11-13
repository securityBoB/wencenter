<?php
  namespace front\model;
  use framework\core\Model;

 class TopicModel extends Model
 {
//	 protected $logic_table = 'topic';
     
     public function getTopicList()
	 {
		  
		 $sql = "SELECT * From `$this->table`";

		 $topic_list = $this->dao->fetchAll($sql);

		 return $topic_list;
	 }

	 public function getHotTopicList()
	 {
		  $sql = "select count(t.topic_id) as question_count,t.* from topic as t  , topic_question as tq  where t.topic_id = tq.topic_id group by t.topic_title order by question_count desc limit 4";

		  return $this->dao->fetchAll($sql);

	 }

	 public function getInfoById($topic_id)
	 { 
			$sql ="select info.*,u.user_nickname as nickname from(select i.*,q.question_content ,q.user_id ,q.add_time,q.static_url from (select tq.question_id ,t.* from topic_question as tq  right join topic as t  on tq.topic_id = t.topic_id and t.topic_id = {$topic_id}) as i left join question as q on i.question_id = q.question_id) as info  left join  user as u on info.user_id = u.user_id order by  add_time desc";
            $result_list =  $this->dao->fetchAll($sql);
            $array = [];
			foreach( $result_list as $list)
		    {
				 if($list['topic_id'] == $topic_id)
				 {
					 $array[] = $list; 
				 }
			}
			return $array;
	 }

 }
?>