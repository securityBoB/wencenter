<?php
 namespace back\controller;
 use framework\core\Controller;
 use framework\core\Factory;
 class CommonController extends Controller
 {
	  public function __construct()
	  {
		   parent::__construct();
		   $this->initSession();
		   $this->checkLogin();
		 
	  }
	  public function checkLogin()
	  {   
		   
		   if(isset($_SESSION['user'])&&$_SESSION['user']['role_id'] == 1)
		   {      
			    
			      $this->view->assign('user',$_SESSION['user']);
		   }else if(CONTROLLER =='User')
		   { 
			    
		   }else
		   {   
			
			   $this->jumpWait(Factory::U('front/content/index'),'sorry没有权限访问');

		   }
	  }
	  public function initSession()
	  {
		   @session_start();
	  }
	  public  function showBar()
	  {
		     
//			  var_dump(CONTROLLER);
//			  die;
              if(CONTROLLER == 'Category'||CONTROLLER == 'Question'||CONTROLLER == 'Topic'||CONTROLLER == 'topic')
			      {
$show="<a class ='icon icon-reply active'  data='icon'>";
	
					   
$con="<ul class='hide' style='display: block;'>";	

				  }else
			      { 
					  
$show="<a class ='icon icon-reply'  data='icon'>";

$con='<ul class="hide" style="display: none;">';
              
				  }
				  $url = Factory::U('back/admin/index');
				  if(CONTROLLER == 'admin')
		          {  
					  $admin = "<a class='icon icon-ul active' href=$url>"; 
				  }else
		          {   
					  $admin = "<a class='icon icon-ul' href=$url>"; 
				  }
                  
				   
                  


				  $this->view->assign('admin',$admin);
				  $this->view->assign('show',$show);
				  $this->view->assign('con',$con);

			
	  }
 }
?>