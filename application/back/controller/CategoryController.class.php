<?php
 namespace back\controller;
 use back\controller\CommonController;
 use framework\core\Factory;
 class CategoryController extends CommonController
 {    
	  //控制调度，
	  //显示数据
	  public function  listAction()
	  {    
		   $this->showBar();
		   $category_model = Factory::M('Category');
           $category_tree = $category_model->getCategoryTree();

		   $this->view->assign('category_tree',$category_tree);
		   $this->view->display('category/list.html');
	  }
	  public function  insertAction()
	  {    
		   $data['category_title'] = $_POST['category_title'];
		   $data['sort'] = $_POST['sort'];
		   $data['parent_id'] = $_POST['parent_id'];
		
		   $category_model = Factory::M('Category');
		   $result = $category_model->insertCategory($data);

		  if($result){
			  $this->jumpNow('index.php?m=back&c=Category&a=list');
		  }
		  else
		  {
			  $this->jumpWait('index.php?m=back&c=Category&a=list','插入失败：'.$category_model->getErrorInfo('<br>'),600);

		  }
	  }


	 public function deleteAction()
	 {

		   $category_id = isset($_GET['id'])?$_GET['id']:null;
		   if($category_id === null)
		   {   
			   $this->jumpWait('index.php?m=back&c=Category&a=list','错误的分类ID');
			
		   }
		   $category_model = Factory::M('Category');

           $result = $category_model->deleteCategory($category_id);
           if($result)
		   {   

               $question_model = Factory::M('Question'); 
                
               $res = $question_model->update(['category_id'=>1],'category_id ='.$category_id);
               
			   $this->jumpNow('index.php?m=back&c=Category&a=list');
		   }else
		   {   
			   $this->jumpWait('index.php?m=back&c=Category&a=list','删除失败：'.$category_model->getErrorInfo('<br>'),600);
		   }
	 }
	public function editAction()
	 {     
		   
		   $category_id = isset($_GET['id'])?$_GET['id']:null;
           if($category_id === null)
		   {   
			   $this->jumpWait('index.php?m=back&c=Category&a=list','错误的分类ID');
			
		   }

           $category_model = Factory::M('Category'); 
		   $this->view->assign('category',$category_model->getDataById($category_id));

           $category_model = Factory::M('Category');
           $this->view->assign('category_tree',$category_model->getCategoryTree());


           $this->view->display('category/edit.html');

	 }

	 public function updateAction()
	 {
		   $data['category_title'] = $_POST['category_title'];
		   $data['category_id'] = $_POST['category_id'];
		   $data['sort'] = $_POST['sort'];
		   $data['parent_id'] = $_POST['parent_id'];

		   $category_model = Factory::M('Category');
		   $result = $category_model->updateCategory($data);
          
		  if($result){
			  $this->jumpNow('index.php?m=back&c=Category&a=list');
		  }
		  else
		  {
			  $this->jumpWait('index.php?m=back&c=Category&a=list','更新失败：'.$category_model->getErrorInfo('<br>'),600);

		  }

	 }
 }
?>