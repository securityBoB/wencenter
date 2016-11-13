<?php
 namespace back\controller;
 use back\controller\CommonController;
 use framework\core\factory;
 use framework\tool\Upload;
 use framework\tool\Image;

 class TopicController extends CommonController
 {
	  public function addAction()
	  {    
		   $this->showBar();
		   $this->view->display('topic/add.html');
	  }
	  public function listAction()
	  {  
		 
		 $this->showBar();
         $topic_model = Factory::M('Topic');
//		 
//
		 $topic_list = $topic_model->getTopicList();
		 $this->view->assign('topic_list',$topic_list);
         $this->view->display('topic/list.html');
	  }

	  public function insertAction()
	  {
         
            $data['topic_title'] = $_POST['topic_title'];
            $data['topic_desc']  = $_POST['topic_desc'];
            $data['topic_img']   = '';
            
			$t_upload  = new Upload();

            $t_upload->setUploadPath(UPLOAD_PATH.'topic/');//增加一个常量
			$upload_result = $t_upload->uploadFile($_FILES['topic_img']);
            
			if($upload_result)//上传成功
		    {   
				
//				
//               echo 'dd';
//                echo UPLOAD_PATH.'topic/'.$upload_result;
                $t_image = new Image(UPLOAD_PATH.'topic/'.$upload_result);
                
				$t_image->setThumbPath(WEB_PATH.'common/thumb/topic/');

				$data['topic_img'] = $t_image->thumb(50,50);
				
                 
			}

			$topic_model = Factory::M('Topic');

            $result = $topic_model->insert($data);
			if($result)
		    {   
                
			    $this->jumpNow(Factory::U('back/topic/list'));
			}
			else
		    {
                $this->jumpWait(Factory::U('back/topic/add'),'添加失败'.$topic_model ->getErrorInfo('<br>'),10);

			}          
            
	  }
	  public function deleteAction()
	  {        
		       echo '<pre>';
               var_dump($_POST['topic_ids']);
			   


	  }
	  public function editAction()
	  {        
//		       echo '<pre>';
              var_dump($_GET['id']);

			 $this->view->display('topic/edit.html');  


	  }
 }
?>