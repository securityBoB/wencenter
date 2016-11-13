<?php
namespace front\controller;
use front\controller\CommonController;
use framework\core\Factory;
 class TopicController extends CommonController
 {
	   public function listAction()
       {   
	    $topic_model = Factory::M('Topic');

		$topicInfo = $topic_model->getTopicList();

		$this->view->assign('topicInfo',$topicInfo);

	    $this->view->display('topic/list.html');
      }
	  public function detailAction()
	  {   
          $topic_id = $_GET['id'];

          
          $model_topic = Factory::M('Topic');


		  $topicInfo = $model_topic->getInfoById($topic_id);

//          echo '<pre>';
//		  var_dump($topicInfo);
//		  die;
		  $this->view->assign('topicInfo',$topicInfo);		  
		  $this->view->display('topic/detail.html');
	  }
 }
?>