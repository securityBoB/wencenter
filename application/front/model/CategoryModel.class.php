<?php
namespace front\model;
use framework\core\Factory;
use framework\core\Model;

class CategoryModel extends Model
{
      
//       protected $logic_table = 'category';//定义逻辑表
	  
	   public function getCategoryTree()
	   {       

           $sql = "SELECT * FROM `$this->table";
		   $list = $this->dao->fetchAll($sql);
		   return $this->getTree($list);   
	   }

	   private  function getTree($list,$pr_id = 0,$deep = 0)
	   {
		    static  $tree = [];
		    foreach($list as $row)
		    {
				if($row['parent_id'] == $pr_id )
				{
					$row['deep'] = $deep;
					$tree[] = $row;
                    $this->getTree($list,$row['category_id'],$deep+1);
				}
		    }
			return $tree;
	   }

    







}
?>