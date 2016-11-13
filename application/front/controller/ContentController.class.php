<?php
namespace front\controller;
use front\controller\CommonController;
use framework\core\Factory;
class ContentController extends CommonController
{
	 public function publishAction()
	 {
		
		$this->isLogin();
        $topic_model = Factory::M('Topic');         
		$topic_list =  $topic_model->getTopicList();

    	$category_model = Factory::M('Category');
        $category_list = $category_model->getCategoryTree();
		$this->view->assign('category_list',$category_list);
		$this->view->assign('topic_list',$topic_list);

        $this->view->display('content/publish.html');
	 }

	public function publishProcessAction()
	{    
		 $this->isLogin();
		 $data['question_content'] =$_POST['question_content'];
		 $data['category_id'] =$_POST['category_id'];
		 $data['user_id'] =$_SESSION['user']['user_id'];
		 $data['question_detail'] =$_POST['question_detail'];
		 $data['user_id'] = isset($_POST['anonymous'])? 0 :$_POST['user_id'];

         $data['add_time'] = time();
         $data['update_time'] = time();
		 $topic_list = isset($_POST['topic']) ? $_POST['topic']:[];

		 $question_model = Factory::M('Question');

         $lastId = $question_model->insert($data);
//		  var_dump($lastId );
//		  die;
		 if($lastId)//数据插入成功 
		 {    

			  $data_tq['question_id'] = $lastId;
              $tq_model = Factory::M('TopicQuestion');
              foreach($topic_list as $topic_id)
			  {
				 $data_tq['topic_id'] = $topic_id;
				 $tq_model->insert($data_tq);
			  }
//            问题插入成功，关联topic也成功
              $model_question = Factory::M('Question');
              $question =  $model_question->getById($lastId);//二维数组
			  $this->view->assign('question',$question);
			  
			
//              ob_start();		
              
		      $contents = $this->view->fetch('content/detail.html');

//			  $contents = ob_get_contents();
//			  ob_end_clean();
			  $html_path = WEB_PATH.'html/question/';
//     		  var_dump(ROOT_PATH);
//			  die;

			  $sub_path = date('Ym');
              if(!is_dir($html_path.$sub_path))
			  {
				  mkdir($html_path.$sub_path,0755,true); 
			  }
              $basename = 'q_'.$lastId.'.html';
			  $file_name = $html_path.$sub_path.'/'.$basename;
			  $result = file_put_contents($file_name,$contents);

			
			  if($result)
			  {  
                 $data['question_id'] = $lastId;
				 $data['static_url']  ='/web/html/question/'.$sub_path.'/'.$basename;
                 $question_model = Factory::M('Question');
                 $question_model->update($data);
				
				 $this->jumpWait(Factory::U('front/Content/index'),'写入成功');  
			  }
		 }else
		 {
			  $this->jumpWait(Factory::U('front/Content/publish'),'发布失败：'.$question_model->getErrorInfo('<br>'));

		 }
		 
       
	}

	public function indexAction()
	{    
		 
       
          if(!isset($_SESSION['user']))
			  {   
				  
				  if(isset($_COOKIE['id'])&&isset($_COOKIE['pwd']))
					{   
					   $data['md5_id']= $_COOKIE['id'];
					   $data['md5_pwd'] = $_COOKIE['pwd'];
                       $model_user = Factory::M('User');
		               $user = $model_user->getByMd5Id($data['md5_id']);
					   if(md5($user['user_password'].$user['user_salt']) == $data['md5_pwd'])
						{   
						    $_SESSION['user'] = $user;
						    $this->view->assign('user',$_SESSION['user']);
					    }
					}
				
			  }else
			  {
				  $this->view->assign('user',$_SESSION['user']);  
			  }

         $model_category = Factory::M('Category');
		 $category_list = $model_category->getCategoryTree();
         $this->view->assign('category_list',$category_list);




		 $model_question = Factory::M('Question');
		 $data_page['page'] = isset($_GET['page'])?$_GET['page']:1;
		 $data_page['total'] =  $model_question->getTotolNum();
		 $data_page['pagesize']= 3;   
		 $offset = ($data_page['page']-1)* $data_page['pagesize'];
        
		 $question_list = $model_question->getQuestionList($offset, $data_page['pagesize']);
         $this->view->assign('data_page',$data_page);
		 $this->view->assign('question_list',$question_list);
		















		 
		 $model_topic   = Factory::M('Topic');

		 $hot_topic = $model_topic->getHotTopicList();
		 $this->view->assign('hot_topic',$hot_topic);
		 $this->view->display('content/index.html');

	}
	public function detailAction()
	{   

		$question_id = isset($_GET['id']) ? $_GET['id']: null;
      
		
		if(is_null($question_id))
		{
			$this->jumpWait(Factory::U('front/Content/index'),'id不正确');
		}
		
        $model_question = Factory::M('Question');
        $filter['field'] ='*';
        $question =  $model_question->find($question_id);
		$this->view->assign('question',$question);
		$this->view->display('content/detail.html');
	}
   
   public function answerProcessAction()
   {  
	    

         $question_id = $answer_data['question_id'] = $_POST['question_id'];
		 $answer_data['user_id'] = $_POST['answer_user_id'];
		 $answer_data['answer_content'] = $_POST['answer'];
		 $answer_data['add_time'] = time();
  
         $model_question = Factory::M('Question');
         
		 $model_answer = Factory::M('Answer');
		 
         
		 $question = $model_question->find($question_id);

//		 var_dump( $question);
//		 die;

		 if($question)
	     {    

              $res = $model_answer->insert($answer_data);
			  $file_name = ROOT_PATH.$question['static_url'];
              $model_question = Factory::M('Question');
              $question =  $model_question->getById($question_id);
			  $this->view->assign('question',$question);
			  $this->view->assign('answerNum',count($question)-1);
			  $contents = $this->view->fetch('content/detail.html');
			  $result = file_put_contents($file_name,$contents);
			  if($result)
			  {  
				 $this->jumpWait(Factory::U('front/Content/index'),'回复成功');  
			  }else
				 {
				 $this->jumpWait(Factory::U('front/Content/index'),'回复失败');  

			  }

		 }
          
		 

		 
	   
 

//        $data['answer'] = $_POST['answer'];

	
//     var_dump( $data);
        

//        var_dump($_POST);
//	    if(!isset($_SESSION['user']))
//	    {
//		 
//		}


//         $data['user_id'] = $_SESSION['user'];

   }

    

  

   public function testAction()
   {
//	     $model_question = Factory::M('Question');
////         $question_list = $model_question->getQuestionList();
////		 $page = $_GET['page'];//第几页
//		 $totolNum = $model_question->getTotolNum();
//       

          
	    $topic_model = Factory::M('Topic');

		$topicInfo = $topic_model->getTopicList();
         echo '<pre>';
         var_dump($topicInfo);
   }


}
?>