<?php
 namespace framework\tool;
 
 class Image 
 {    
	  //$thumb_w 缩略图的宽
	  //$thumb_h 缩略图的高

	  private $src_file;
	  private $thumb_path = './';

      //构造一个函数在初始化传入一个参数
	  public  function  __construct($src_file)
	  {
		   if(!is_file($src_file))
		   {
			    trigger_error('文件不存在',E_USER_WARNING);
				
		   }else
		   {
			   $this->src_file = $src_file;
		   }
	  }

	 public function setThumbPath($path)
	  {
		// 如果上传目录存在，并可写，才允许设置
		if (is_dir($path) && is_writable($path)) {
			$this->thumb_path = $path;
		}
	 }
	  private $create_list = array(
		  'image/gif'=>'imagecreatefromgif',
		  'image/png'=>'imagecreatefrompng',
		  'image/jpeg'=>'imagecreatefromjpeg',

		  );

	  private $output_list = array(
		 'image/jpeg'=>'imagejpeg',
		 'image/gif'=>'imagegif',
		 'image/png'=>'imagepng',
		 );
	  public function thumb($thumb_w,$thumb_h)
	  {   
		  $create_function = $this->getCreateFun($this->src_file);

          $src_image = $create_function($this->src_file);

		  $thumb_image = imagecreatetruecolor($thumb_w,$thumb_h);//缩略图画布的大小

		  $bg_color = imagecolorallocate($thumb_image,255,255,255);
		  imagefill($thumb_image,0,0,$bg_color);

          $src_x = 0;
          $src_y = 0;
          $src_w= imagesx($src_image);
          $src_h= imagesy($src_image);
          //----------------------处理居中-----------
		  if($src_w/$thumb_w > $src_h/$thumb_h)
		  {
		      $chang_ratio = $src_w/$thumb_w;   
		  }else
		  { 
			  $chang_ratio = $src_h/$thumb_h;
		  }
          
		  $thumb_area_w = $src_w / $chang_ratio;
		  $thumb_area_h = $src_h / $chang_ratio;
		  
          $thumb_area_x = ($thumb_w - $thumb_area_w)/2 ;
          $thumb_area_y = ($thumb_h - $thumb_area_h)/2 ;

		  imagecopyresampled($thumb_image,$src_image,
			                          $thumb_area_x,$thumb_area_y,$src_x,$src_y,
			                          $thumb_area_w,$thumb_area_h,$src_w,$src_h);
          
		  
		  $sub_dir = date('Ymd').'/';    

		  if(!is_dir($this->thumb_path.$sub_dir))
		  { 
			  mkdir($this->thumb_path.$sub_dir,0755,true);
		  }
		  $ext = strrchr($this->src_file,'.');
		  $basename = uniqid('',true).'-'.$thumb_w.'x'.$thumb_h.$ext;
          
          $full_path =$this->thumb_path.$sub_dir.$basename; 

          $outputfun = $this->getOutputFun($this->src_file);
           
          $outputfun($thumb_image,$full_path);
           
          imagedestroy($thumb_image);
		  imagedestroy($src_image);

		
		  return $sub_dir . $basename;		   

	  }
	  public function getCreateFun($file)
	  {   
		   $mime = $this->getMIME($file);
        
		   $imagefun = $this->create_list[$mime];
		   return  $imagefun;
		  
	  }


      public function getOutputFun($file)
	  {   
		   $mime = $this->getMIME($file);
		   $imagefun = $this->output_list[$mime];
		   return $imagefun;
	  }


     // 得到图片mime
	  public function getMIME($file)
	  {
		   $imageinfo = getimagesize($file);
		   $image_mime = $imageinfo['mime'];
		   return  $image_mime;
	  }
 }
?>