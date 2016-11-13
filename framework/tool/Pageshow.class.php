<?php
namespace framework\tool;
  class PageShow
  {
	   public  static function PageShow($page,$pagesize,$total)
	   {
		 
  
  
  $pagemax = ceil($total/$pagesize);
$first_page=<<<HTML
                                    <li>
                                        <a href=href="{framework\core\Factory::U('front/content/index/page/1')}" aria-label="First">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
HTML;

$last_page=<<<HTML
                                    <li>
                                        <a href="{framework\core\Factory::U('front/content/index/page/$$pagemax')" aria-label="last">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
HTML;

 $num_html = '';
 $begin = $page-2<=0 ? 1 :$page-2;
 $end = $page+2 >=$pagemax?$pagemax:$page+2;
 for($i = $begin ; $i<= $end;$i++)
 {
	  $active = $i== $page ? 'active':'';
      $num_html=<<<HTML
		                            <li  class ='$active'									  
                                        <a href="{framework\core\Factory::U('front/content/index/page/$i')}">$i</a>
                                    </li>
HTML;
 }


return '<ul class="pagination pull-right">
' . $first_html . $number_html . $end_html . '</ul>';
 	   }

  }
?>