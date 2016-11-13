<?php
 namespace back\controller;
 use back\controller\CommonController;
 use framework\tool\Captcha;
 use framework\core\Factory;
 
 class UserController extends CommonController
 {
	
	   public function captchaAction()
	  {
		  $captcha = new Captcha();

		  $captcha->makeImage();
	  }
	  public  function loginProcessAction()
	  {     
            
		 
            $data['email'] = $_POST['email'];
            $data['captcha'] = $_POST['captcha'];
            $data['password'] = $_POST['password'];
            $captcha = new Captcha();

		    $res = $captcha->checkCaptcha( $data['captcha']);
			
			if(!$res)
		    {
				 $this->jumpWait(Factory::U('back/User/login'),'验证码错误'); 
			}

            $user_model = Factory::M('User');
			$user = $user_model->getByEmail($data['email']); 
			
			if($user&&$user['role_id'] == 1)
		    {
				 if($user['user_password'] == md5($data['password'].$user['user_salt']))
				 {    
					  @session_start();
					  $_SESSION['user'] = $user;
					  $this->jumpNow(Factory::U('back/Category/list'));
				 }else
				 {
					  $this->jumpWait(Factory::U('front/content/index'),'没有权限访问');
				 }
			}
			else
		    {
				      $this->jumpWait(Factory::U('front/content/index'),'没有权限访问');
			}

	  }
	  public function  logoutAction()
	  {
		   
             @session_start();
			 unset($_SESSION['user']);
             $this->jumpNow(Factory::U('back/User/login'));
	  }
	   public function  loginAction()
	  {
		   
           $this->view->display('user/login.html');
          
	  }
 }

?>