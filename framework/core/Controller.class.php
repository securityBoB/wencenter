<?php
namespace framework\core;
  class Controller
  {    

	   protected  $view; 
	   public function __construct()
	   {
		    $this->ContenType();
			$this->initView();
	   }
	   protected function ContenType()
       {
		   header('Content-type: text/html;charset=utf-8');
	   }

       protected function  initView()
	   {

			$this->view = new \Smarty();
			$this->view->template_dir = MODULE_PATH.'view/';
			$this->view->compile_dir = MODULE_PATH.'runtime/compile/';

	   }

	   protected function jumpNow($url)
	   {
		   header('Location:'.$url);
		   die;
	   }
	   protected function jumpWait($url,$message,$wait =2)
	   {
		   header("Refresh:$wait;URL=$url");
		   echo $message;
		   die;
	   }


   }
?>