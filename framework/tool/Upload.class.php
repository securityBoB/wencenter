<?php
namespace framework\tool;
use \Finfo;
class Upload
 {
   private $ext2mime = array(
					  '.jpeg'=>'image/jpeg',
					  '.jpg'=>'image/jpeg',
					  '.png'=>'image/png',
					  '.gif'=>'image/gif',
					  '.html'=>'text/html'
					  );

   private $allow_ext_list =array('.jpeg','.jpg','.gif','.png');
   private $allow_max_size =1048576;
   private $upload_path ='./';
   private $prefix ='';
   
   public function setAllowExtList($ext_list)
	{
		$this->allow_ext_list = $ext_list;
	}
   	public function setAllowMaxSize($max_size)
	{
		// 判断是否是大于零，
		if ($max_size > 0) {
			// 强制转整型后再赋值
			$this->max_size = (int) $max_size;
		}
	}
	// 设置上传路径
	public function setUploadPath($path)
	{
		// 如果上传目录存在，并可写，才允许设置
		if (is_dir($path) && is_writable($path)) {
			$this->upload_path = $path;
		}
	}
	// 设置前缀
	public function setPrefix($prefix)
	{
		$this->prefix = $prefix;
	}


    public function uploadFile($file)
	{



			if($file['error'])
			{
				trigger_error('文件上传错误');
				return false;
			}


//			$allow_ext_list = array('.jpeg','.jpg','gif','.png');
			$allow_mime_list = $this->getMIME($this->allow_ext_list);

			$ext = Strrchr($file['name'],'.');




			if(!in_array($ext,$this->allow_ext_list))
			{
				 trigger_error('文件后缀有问题');
				 return false;
			}



			$finfo = new Finfo(FILEINFO_MIME_TYPE);
			$mime  = $finfo->file($file['tmp_name']);
			



			if(!in_array($mime,$allow_mime_list))
			 {
				 trigger_error('mime真实类型有问题');
					 return false;
			 }


			 




			 if($file['size'] > $this->allow_max_size)
			 {    
				  trigger_error('文件大小有问题');
				  return false;
			 }

			 $subdir = date('Ymd').'/';

              if(!is_dir($this->upload_path.$subdir))
              {
              	mkdir($this->upload_path.$subdir);

              }


////			 $upload_path = './'; 
//
//     		 $thisprefix = 'kang_';



			 $basename = uniqid($this->prefix,true).$ext;



			 //移动
$result_move = move_uploaded_file($file['tmp_name'],$this->upload_path. $subdir.$basename);
			 if(!$result_move)
			 {
				  trigger_error('出现错误');
				  return false;
			 }

			 return $subdir.$basename;

 }
 
  private function getMIME($ext_list)
  {    
	   foreach($ext_list as $value)
	   {
		 $mime_list[]=$this->ext2mime[$value];
	   }
	   
	   return $mime_list;
  }




 }
?>