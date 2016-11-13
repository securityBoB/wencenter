<?php
namespace front\controller;
use framework\core\Controller;
use framework\core\Factory;
class CommonController extends Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->initSession();
		$this->initUser();
	}

	public function initSession()
	{
		 @session_start();
	}
	public function initUser()
	{
		 if(isset($_SESSION['user']))
		 {
			  $this->view->assign('user',$_SESSION['user']);
		 }else
		 {    
			  $this->view->assign('user',null);
		 }
	}

	public function isLogin()
	{
		 if(!isset($_SESSION['user']))
		 {
		   $this->jumpWait(Factory::U('front/Content/index'),'用户未登录');
		 }

	}
}
?>