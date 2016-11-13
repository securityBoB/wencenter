<?php
namespace back\controller;
use back\controller\CommonController;
class AdminController extends CommonController
{     
	  public function indexAction()
	  {    	 
		   $this->showBar();
		   $this->view->display('admin/index.html');
	  }
}
?>