<?php
 namespace back\controller;
 use back\controller\CommonController;
 use framework\tool\QuestionClient;
 use framework\core\Factory;

 class QuestionController extends CommonController
 {
	  public function zhihuAction()
	  {    
		   $this->showBar();
		   $t_client = new QuestionClient();//get 生成一个类从服务器上得到数据；		  
           
		   $t_client->setUrl('http://qanda.bob.com/zhihu/php_result.htm');

		   $response =  $t_client->get();
		   $pattern_title =<<<STR
			   #<a[^>]*?class="js-title-link"[>](.*?)</a>#s
STR;
           $result = preg_match_all($pattern_title,$response,$match_result);	
		   $question_list = $match_result[1];

		   $pattern_content =<<<STR
			   #<script type="text" class="content">(.*?)</script>#s
STR;
           $result = preg_match_all($pattern_content,$response,$match_result);	

		   $answer_list = $match_result[1];

           $question_model = Factory::M('Question');
           $answer_model = Factory::M('Answer');
           $data['category_id'] = 1;
		   $data['add_time'] = time();
		   $count = 0;
		   foreach($question_list as $key=>$question)
		   {      
			   
		          $data['question_content'] = str_replace(['<em>','</em>'], ['',''],$question);
				
				  $question_id =  $question_model->insert($data);
				  
				  if($question_id)
			      {
					  $data_answer['question_id'] = $question_id;
					  $data_answer['add_time'] =time();
					  $data_answer['answer_content'] = $answer_list[$key];
					  $answer_model->insert($data_answer);
                      $count++;
				  }	
				  
		   }
		   $this->jumpWait('index.php?m=back&c=Category&a=list','成功添加'.$count.'条数据');
	  }
      
	  public function indexAction()
	  {    $this->showBar();
		   $this->view->display('question/index.html');
	  }
 }
?>