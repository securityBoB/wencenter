<?php
 namespace front\model;
 use framework\core\Model;

 class QuestionModel extends Model
 {

       public function getQuestionList($offset,$pagesize)
	   {
		    $sql = "select res.*,user.user_name from 
			(select t.topic_title,temp.* from topic as t,
            (select tq.topic_id, q.* from question as q ,
            topic_question as tq  where q.question_id = tq.question_id )
            as temp  where t.topic_id = temp.topic_id order by temp.add_time desc limit {$offset}, {$pagesize}) as res left join user on res.user_id = user.user_id";
            return  $this->dao->fetchAll($sql);
	   }
 
	   public function getById($question_id)
	   {
    $sql = "select user.user_name as answer_user_name , inf.* from (select a.answer_content, a.user_id as answer_user_id,a.add_time as answer_time, info.*          from (select i.* , u.user_name from (select t.topic_title , d.* from (select temp.* from           (select q.question_id,q.category_id,q.question_content,q.add_time,q.user_id ,tq.topic_id from       question as q left join topic_question as tq on tq.question_id = q.question_id) as temp            where temp.question_id = {$question_id}) as d left join topic as t on t.topic_id = d.topic_id       ) as i left join user as u on i.user_id = u.user_id) as info left join answer as a on              a.question_id = info.question_id ) as inf left join user on inf.answer_user_id = user.user_id";
     $question = $this->dao->fetchAll($sql);
        if(isset($question['category_id']))
		 {
			$sql = "select category_title  from category where category_id = {$question['category_id']}";
		$res =  $this->dao->fetchRow($sql);
		$question['category_title'] = $res['category_title'];

		 }else
		   {
			 $question['category_title'] ='';
		 }
	  return  $question;		    
	  }


	  public function getTotolNum()
	  {
		   $sql = "select count(*) as num   from $this->table";

		   $res =   $this->dao->fetchRow($sql); 
		   return $res['num'];
	  }
 }
?>