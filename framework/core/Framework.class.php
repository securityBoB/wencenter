<?php
namespace framework\core;
class Framework
{
    
   public function __construct()
	{
	    $this->initBasePath();
		$GLOBALS['config'] =  $this->loadConfigFramework();
		$GLOBALS['config'] = array_merge($GLOBALS['config'],$this->loadConfigCommon());
		$this->initPathInfo();
	    $this->initModule();
		$GLOBALS['config'] = array_merge($GLOBALS['config'],$this->loadConfigModule());
	    $this->initAutoUpload();
	    $this->initCA();
		$this->dispatch();
    }
   private function initBasePath()
   {
	   define('ROOT_PATH',getcwd());
       defined('FRAMEWORK_PATH')|| define('FRAMEWORK_PATH',ROOT_PATH.'/framework/');
	   defined('APPLICATION_PATH')|| define('APPLICATION_PATH',ROOT_PATH.'/application/');
	   define('UPLOAD_PATH',ROOT_PATH.'/upload/');
	   define('WEB_PATH',ROOT_PATH.'/web/');

	   define('ROOT',str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']));  
      
   }
   private function initModule()
   {
	   $default_module = $GLOBALS['config']['default_module'];
       define('MODULE',isset($_GET['m'])? $_GET['m'] :$default_module);
       define('MODULE_PATH',APPLICATION_PATH.MODULE.'/'); 
   }
   private function initPathInfo()
   {      
		$pathInfo_str = isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:'';

		if('' ==$pathInfo_str)
	    {
		  return ;
		}
      
        $pathInfo = substr($pathInfo_str,1);
        $profix = $GLOBALS['config']['url_profix'];
        if( $profix == strrchr($pathInfo,'.'))
	    {   			
            $pathInfo = substr($pathInfo,0,-strlen($profix));
		}
        

		$pathInfo_list = explode('/',$pathInfo);
        
		$count = count($pathInfo_list);


		if(1 == $count )
	    {
			 $_GET['m'] = $pathInfo_list[0];
		}else if(2 == $count )
	    {    
			 $_GET['m'] = $pathInfo_list[0];
			 $_GET['c'] = $pathInfo_list[1];
		}else if(3 == $count)
	    {
			 $_GET['m'] = $pathInfo_list[0];
			 $_GET['c'] = $pathInfo_list[1];
			 $_GET['a'] = $pathInfo_list[2];
			 if(substr($_GET['a'],0,7)=='captcha')
		     {
			   $_GET['a']='captcha';
		     }
		}else 
	    {
			 $_GET['m'] = $pathInfo_list[0];
			 $_GET['c'] = $pathInfo_list[1];
			 $_GET['a'] = $pathInfo_list[2];
			 for($i = 3 ;$i< $count;$i=$i+2)
			 {
				   $_GET[$pathInfo_list[$i]] = $pathInfo_list[$i+1];
			 }
			
		}
	
			
   }
   private function initAutoUpload()
   {
	     spl_autoload_register(array($this,'userAutoLoad'));

   }
   public function userAutoLoad($name)
   {
            		
		 $special_list['Smarty'] = FRAMEWORK_PATH.'/vendor/smarty/Smarty.class.php';
		 if(isset($special_list[$name]))
		 {
			  require $special_list[$name];
			  return true;
		 }

		 $name_split = explode('\\',$name);
		 $prefix = $name_split[0];
		 if('framework' == $prefix )
		 {
			 $base_path = FRAMEWORK_PATH; 
		 }else
		 { 
			 $base_path =APPLICATION_PATH.$prefix.'/'; 
		 }
		 
		 unset($name_split[0]);


		 $sub_path =  implode('/',$name_split); 

		 $temp = basename($sub_path);
		 if(false !== strpos($temp,'I_'))
		 {    
			  
			  $suffix = '.interface.php';
		 }
		 else
		 {
			  $suffix = '.class.php';
		 }
		
		$filename = $base_path.$sub_path.$suffix;

		if(file_exists($filename))
		{
				require $filename;
		}
   }
   private function initCA()
	{
	        $default_controller = $GLOBALS['config']['default_controller'];
			define('CONTROLLER',isset($_GET['c'])? $_GET['c'] :$default_controller);
			$default_action = $GLOBALS['config']['default_action'];
			define('ACTION',isset($_GET['a'])? $_GET['a'] :$default_action);
    }
   private function dispatch()
	{
	    $contr_name = CONTROLLER;
		if(!stripos($contr_name,'Controller'))
		{
			 $contr_name.='Controller';
		}
		$action_name = ACTION;
		if(!stripos($action_name,'Action'))
		{
			 $action_name .='Action';
		}
        $contr_name = '\\' . MODULE . '\\controller\\' . $contr_name;
		$controller = new $contr_name();
		$controller->$action_name();
    }

    private function loadConfigFramework()//framework config
	{
	   $config_file = FRAMEWORK_PATH.'config/config.php';

	   $config = require $config_file;
	   return  $config;
	}

	private function loadConfigCommon()//common config
	{
	   $config_file = APPLICATION_PATH.'common/config/config.php';
       
	   if(file_exists($config_file))
		{
            $config = require $config_file;
	        return  $config;
	    }
		else
	    {
			 return [];
		}
	  
	}

	private function loadConfigModule()//module config
	{
	   $config_file = MODULE_PATH.'config/config.php';
	   if(file_exists($config_file))
		{
            $config = require $config_file;
	        return  $config;
	    }
		else
	    {
			 return [];
		}
	}



}
?>