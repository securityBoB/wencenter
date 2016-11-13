<?php
namespace framework\core;

class Factory
{
   public static function M($model_name)
   {    
	    static $model_list = array();
	    if(!stripos($model_name,'Model'))
	    {
			 $model_name .='Model';
		}
//		echo $model_name;
		if(!isset($model_list[$model_name]))
	    {    
			 $model_name = '\\'.MODULE.'\\model\\'.$model_name;
//              echo $model_name ;
//			  die;
			 $model_list[$model_name] = new $model_name();
		}
		return $model_list[$model_name];
   }


   public static  function U($dispatch,$param_list = [])//生成url 地址
   {

        $url_entry = $_SERVER['SCRIPT_NAME'];
        
        $url = $url_entry.'/'. $dispatch;


//	    var_dump($url);
//		die;

        foreach($param_list as $key=>$value)
	    {
			 $url .='/'.$key.'/'.$value;
		}

		$url .= $GLOBALS['config']['url_profix'];
       
		return $url;

   }
    public  static function P($page,$pagesize,$total)
	   {
		 
$pagemax = ceil($total/$pagesize);  
$h1 =self::U('front/content/index',['page'=>1]);
$hm =self::U('front/content/index',['page'=>$pagemax]);

$first_html=<<<HTML
                                    <li>
                                        <a href=$h1  aria-label="First">
                                            <span aria-hidden="true">&lt;</span>
                                        </a>
                                    </li>
HTML;

$last_html=<<<HTML
                                    <li>
                                        <a href=$hm aria-label="last">
                                            <span aria-hidden="true">&gt;</span>
                                        </a>
                                    </li>
HTML;

 $num_html = '';
 $begin = $page-2<=0 ? 1 :$page-2;
 $end = $page+2 >=$pagemax?$pagemax:$page+2;
 for($i = $begin ; $i<= $end;$i++)
 {   
	  
	  $active = $i== $page ? 'active':'';
	  $hi =self::U('front/content/index',['page'=>$i]);
      $num_html .=<<<HTML
		                            <li  class ='$active'>									  
                                        <a href=$hi>$i</a>
                                    </li>
HTML;
 }


return '<ul class="pagination pull-right">
' . $first_html . $num_html . $last_html . '</ul>';
 	   } 
}

?>