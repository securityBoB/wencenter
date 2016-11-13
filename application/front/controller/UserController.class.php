<?php
namespace front\controller;
use front\controller\CommonController;
use framework\core\Factory;
use framework\tool\Captcha;
 class UserController extends CommonController
 {
	 public function registerAction()
	  {   
		  
		  $this->view->display('user/register.html');
	  }
	   public function captchaAction()
	  {   
		  $captcha = new Captcha();
		  
		  $captcha->makeImage();
	  }

	 public function registerProcessAction()
	  {
           $data['user_name'] = $_POST['user_name'];
		   $data['user_nickname'] =  $_POST['user_nickname'];
           $data['user_email'] = $_POST['user_email'];
           $data['user_password'] = $user_password =$_POST['user_password'];		   
//		   var_dump($post_code);
		   // 用户名 必须是
		   //字母数字下划线，不以数字开头，长度{4，20}，可以包含中文
		   //Email地址：xxxx@yyy.com
		   //长度6-12，至少要由大小写数字组成，允许包含特殊字符

		   $name_pattern = '/^[a-zA-Z_\x{4e00}-\x{9fa5}][\w\x{4e00}-\x{9fa5}]{3,19}$/u';
		  
		   if(0 == preg_match($name_pattern,$data['user_name']))
		   {    
//			    echo 'd';
			    $errorInfo['user_name'] = '用户名不匹配';
		   }
           
		   if(0 == preg_match('/^[\w-]+@([\w-]+\.)+[\w-]+$/',$data['user_email']))
		   {
               $errorInfo['user_email'] = '邮箱地址不正确';
		   }
		   if(0 == preg_match('/^\S{6,12}$/',$data['user_password']))
		   {
               $errorInfo['user_password'] = '密码不正确';
		   }else
		   {
			    $upper = preg_match('/[A-Z]/',$data['user_password']);
			    $lower = preg_match('/[a-z]/',$data['user_password']);
			    $number = preg_match('/\d/',$data['user_password']);
				if($upper+$lower+$number<3)
			    {
					$errorInfo['user_password'] = '密码强度不够';
				}
		   }
		    $captcha = new Captcha();
		  
		    $result = $captcha->checkCaptcha($_POST['captcha']);
			if(!$result)
		    {
				$errorInfo['captcha'] = '验证码有问题'; 
			}

		   if(isset($errorInfo))
		   {   
 		       var_dump($errorInfo);
		       $this->jumpWait(Factory::U('front/User/register'),"请重新注册数据不正确");
             
		   }
           $data['user_salt'] = substr(md5(mt_rand(0,99999)),10,5); 	   
		   $data['user_password'] = md5($data['user_password'].$data['user_salt']);
           $data['active_code'] = md5(mt_rand(10000,99999).time());
           $data['active_code_time'] = time();
		   $data['is_active'] = 0;
		   $data['role_id'] = 0;
           $model_user = Factory::M('User');
           $user_id =$model_user->insert($data);//插入数据 生成邮件
		   $res = $this->sendEmail($user_id,$user_password);
           if($res)
		   {
			   echo '邮件发送成功,请在5分钟之内完成验证';
		   }

	  }
   public function activeAction()
	 {    
	     
          $user_id = $_GET['id'];
          $active_code = $_GET['code'];
//		  校验激活码是否和数据库中的一样 而且判断激活码过期没有？
          
          $model_user = Factory::M('User');
          
		  $user = $model_user->checkByCode($user_id, $active_code);//校验激活码是否和数据库中的一样
//		   $r =  time()-$user['active_code_time'];
//		 echo $user['active_code_time'];
//		 die;
		  if(!$user)
		  {    
			   $url = Factory::U('front/Content/index');
			   $this->jumpWait('$url','激活码存在问题');
		  }
		
		  if(time()-$user['active_code_time'] > 5*60)//5分钟激活码过期重写生成激活码
		  {   

			  $data['user_salt'] = $salt =  substr(md5(mt_rand(0,99999)),10,5); 
			  
              $user_password ='N'.substr(md5(mt_rand(0,99999)),0,10);  
              
              $data['user_password'] = md5($user_password.$data['user_salt']);

              $data['active_code'] = md5(mt_rand(10000,99999).time());
              $data['active_code_time'] = time();
	          $data['is_active'] = 0;
		      $data['role_id'] = $user['role_id'];
              $data['user_id'] = $user_id;             
			  $model_user = Factory::M('User');
			  $model_user->update($data);
			  $this->sendEmail($data['user_id'],$user_password);
		  }

		  if($user['is_active'] == 1)
		  {
              $this->jumpWait(Factory::U('front/User/login'),'已经激活成功!不需要再次激活');
		  }
           // 校验激活码是和数据库中的一样 激活码且没有过期
              $user['user_id'] = $user_id;			  
              $user['is_active'] = 1;
              $model_user = Factory::M('User');
			  $model_user->update($user);
              $url = Factory::U('front/User/login');
              $this->jumpWait($url,'激活成功!');

	 }
   
    public function sendEmail($user_id,$user_password)
	{
		 $model_user = Factory::M('User');
		 $user = $model_user->find($user_id);
		 $email_address = "F:/amp/temp/email/".$user['user_email'].'-email.html';
         $active_url = "http://qanda.bob.com".Factory::U('front/User/active',['id'=> $user_id,'code'=>$user['active_code']]);
		 $subject="有问必答网站激活邮件";
         $to = $user['user_email'];
		 $body=<<<STR
			 dear:{$user['user_nickname']}<br>
      thank  for you to register  our websit please click follow link to active <br>
	  <a href="$active_url">激活:$active_url</a><br>
	  your password is:{$user_password}
STR;
       
$content="
<!DOCTYPE html>
<html>
    <head>
      <meta charset='utf-8'>
      <title>{$to}</title>   
    </head>
    <body>
标题： {$subject}<br>
收件人：{$to}<br>
发件人：有问必答
正文:<br>
		{$body}
    </body>
</html>";
	$res = file_put_contents($email_address,$content);
    return $res;
   }

		 public function  loginAction()
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
                            $this->jumpNow(Factory::U('front/content/index'));  
					    }
					}
			      $this->view->display('user/login.html');
				
			  }else
			  {
				  $this->jumpNow(Factory::U('front/content/index'));   
			  }
			   
			
		 }
		 
		 public function loginProcessAction()
	     {    
			  
			  $user_name = $_POST['user_name'];
			  $user_password = $_POST['user_password'];
              $model_user = Factory::M('User');
			  $user = $model_user->getByName($user_name);
			  if(!$user)
			  {  		
				  $this->jumpWait(Factory::U('front/User/login'),'用户数据非法');
			  }

			  if($user['user_password'] != md5($user_password.$user['user_salt']))
			  {
				
				  $this->jumpWait(Factory::U('front/User/login'),'用户数据非法'); 
			  }
			  if($user['is_active'] == 0)
			  {
				
				  $this->jumpWait(Factory::U('front/User/login'),'用户没激活');
			  }
			  @session_start();
			  $_SESSION['user'] = $user;
			  if(isset($_POST['remember_me']))
			   {   
                  setcookie('id',md5($user['user_id'].$user['user_salt']),time()+24*3600,'/');//
                  setcookie('pwd',md5($user['user_password'].$user['user_salt']),time()+24*3600,'/');
			   }
              $this->jumpWait(Factory::U('front/content/index'),'登录成功'); 
		 }

    public function logoutAction()
	 {
		 unset($_SESSION['user']);
		 setcookie('id','',time()-1,'/');
         setcookie('pwd','',time()-1,'/');
         $this->jumpNow(Factory::U('front/content/index')); 
	}


		
}
?>