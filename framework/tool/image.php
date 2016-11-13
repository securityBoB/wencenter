<?php
  $src_file = './src.jpg';

  $thumb_w  =25 ;
  $thumb_h  =100 ;
   
  $scr_image = imagecreatefromjpeg($src_file);
  $thumb_image = imagecreatetruecolor($thumb_w,$thumb_h);
  
 
  $src_x   = 0;
  $src_y   = 0;
  $src_w   = imagesx($scr_image);
  $src_h   = imagesy($scr_image);
 
	




	  if($src_w/$thumb_w > $src_h/$thumb_h);
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

		  $result = imagecopyresampled($thumb_image,$src_image,
			                          $thumb_area_x,$thumb_area_y,$src_x,$src_y,
			                          $thumb_area_w,$thumb_area_h,$src_w,$src_h);
   
//  imagecopyresampled($thumb_image,$scr_image,$thumb_x,$thumb_y,$src_x,$src_y,$thumb_w,$thumb_h, $src_w,$src_h);
  imagejpeg($thumb_image);
  header('Content-type:image/jpeg');
  imagedestory($scr_image);
  imagedestory($thumb_image
  );

?>