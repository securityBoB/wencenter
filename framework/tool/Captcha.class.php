<?php

namespace framework\tool;

class Captcha 
{  
	   public function makeImage()
	   {
			$code_list = ['需','要','计','算', '文','字','的','位','置','时','获','取','该','数','据','即','可'];

			$length = count($code_list);
			$require_length = 4;
			$index_list = [];
			$require_list = [];

			for($i = 0 ; $i< $require_length ;$i++)
			{ 
				$index = mt_rand(0,$length-1);
				if(in_array($index,$index_list))
				{
					 $i--;
					 continue;
				}

				$index_list[] =$index;
				
				$require_list[] = $code_list[$index]; 
			}
			$convert_length = 2;

			$convert_number = array_rand($require_list , $convert_length);


			$convert_list = [] ;

			foreach($convert_number as $num)
			{
				$convert_list[] =  $require_list[$num];
			}
			@session_start();
			$_SESSION['captcha'] = $convert_list;
			$width = 100;
			$height = 40;

			$image = imagecreatetruecolor($width,$height);

			$bg_color = imagecolorallocate ($image,255,255,255);

			imagefill($image,0,0,$bg_color);

			$fontfile = FRAMEWORK_PATH."tool/SIMLI.ttf";
			$codeInfo = [];
			$width_totle = 0;

			foreach($require_list as $key=>$code)
			{
				$codeInfo[$key]['size'] =mt_rand(10,16); 
				$codeInfo[$key]['angle'] =0; 
				$codeInfo[$key]['color'] =imagecolorallocate($image,mt_rand(10,100),mt_rand(10,100),mt_rand(10,100));  
				$codeInfo[$key]['code'] =$code; 
				if(in_array($code,$convert_list))
				{
				   $codeInfo[$key]['angle'] =180; 
				}  
				$bbox = imagettfbbox($codeInfo[$key]['size'],$codeInfo[$key]['angle'],$fontfile,$codeInfo[$key]['code']);
				$codeInfo[$key]['code_w'] = abs($bbox[2]-$bbox[0]);
				$codeInfo[$key]['code_h'] = abs($bbox[7]-$bbox[1]);
				$width_totle += $codeInfo[$key]['code_w'];
			}
			  $start_x = ($width-$width_totle)/2;
			  foreach($codeInfo as $key => $info )
			  {
				
					if($info['angle'] == 180 )
					{
						 $x =  $start_x + $info['code_w'];
						 $y =  $height/2-$info['code_h']/2;
					}
					else
					{ 
						 $x =   $start_x;
						 $y =$height/2+$info['code_h']/2;
					}

			  imagettftext ( $image , $info['size'] , $info['angle'] , $x, $y, $info['color'] , $fontfile , $info['code']);
			  $start_x +=$info['code_w'] ;
			  }
			 for($i = 0 ; $i < 500; $i++)
			 {
				 $pixel_color = imagecolorallocate($image,mt_rand(100,150),mt_rand(100,155),mt_rand(100,155));
				 imagesetpixel ($image ,mt_rand(0,99), mt_rand(0,39) , $pixel_color );

			 }
			 header("Content-type: image/png");
			 header('Cache-Control: no-cache no-store must-revalidate');//
			 header('Expires: ' . gmdate('D, d M Y H:i:s', time()-1) . ' GMT');//
			 imagepng($image);
			 imagedestroy($image);
	   }

	   public function checkCaptcha($post_code)
	   {    
		  @session_start();
		  $result = false;
		  if(isset($post_code)&&isset($_SESSION['captcha']))
		  {    
				$str = '';
			    foreach($_SESSION['captcha'] as $code)
			    {
				      $str .= $code;
				}			
				if($str ==$post_code )
			    {
					 $result = true;
				}
		  }
		  if(isset($_SESSION['captcha']))
		  {
		     unset($_SESSION['captcha']);
		  }
          return   $result;
	  }
}
?>