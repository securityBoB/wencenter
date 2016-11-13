<?php
  namespace back\model;
  use framework\core\Model;
  class CategoryModel extends  Model
  {   
	   protected $logic_table = 'category';//定义逻辑表
	  
	   public function getCategoryTree()
	   {       

        $sql ="select c.*, count(q.question_content) as question_count from category as c left join question as q  on c.category_id = q.category_id group by c.category_title order by c.category_id";
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

	   public function  insertCategory($data)
	   {   
		   if($data['category_title'] == '')//判断传入的数据是否为空
		   {
			    $this->error_info['category_title'] = '传入的分类标题为空';
			    
		   }else if($this->hasCategory($data['parent_id'],$data['category_title']))//判断数据是不是在同一个 父分类下 已经存在
		   {
			    $this->error_info['category_title'] = '传入的分类已经存在';
		   }
           
           if(!((String)(int)$data['sort'] == $data['sort'] && $data['sort']>0))
		   {
			    $this->error_info['sort'] = '传入的sort 不是正整数';
		   }


           if(!empty( $this->error_info))
		    {
			    return false;
		    }
            return  $this->insert($data);

	   }

	   protected function hasCategory($parent_id, $category_title)//在同一父分类中存在这个分类
	   {    
//		    echo $parent_id;
		    $sql = "SELECT 1 from `$this->table` where parent_id = '$parent_id' and category_title = '$category_title'";
			return (bool) $this->dao->fetchRow($sql);
			
	   }

	

	   public function deleteCategory($category_id)
	   {

		    if(!$this->isLeaf($category_id))
		    {    
				 $this->error_info['category_id'] = $category_id.'不是叶子分类，不能删除非叶子分类';
				
			}
			
            if(!empty( $this->error_info))
		    {
			    return false;
		    }

			return $this->delete($category_id);
         

	   }

	   public function isLeaf($category_id)
	   {
		    $sql = "SELECT 1 FROM `$this->table` WHERE parent_id = $category_id limit 1";

			return !(bool)$this->dao->fetchRow($sql); 

	   }
	   
	   public function getDataById($category_id)
	   {
		    $sql = "SELECT * FROM `$this->table` WHERE `category_id` = '$category_id'";

			$result = $this->dao->fetchRow($sql);
			return $result;
	   }

	   public function updateCategory($data)
	   {
             
		  if($data['category_title'] == '')//判断传入的数据是否为空
		   {
			    $this->error_info['category_title'] = '传入的分类标题为空';
			    
		   }else if($this->hasCategory($data['parent_id'],$data['category_title']))//判断数据是不是在同一个 父分类下 已经存在
		   {
			    $this->error_info['category_title'] = '传入的分类已经存在';
		   }
           
           if(!((String)(int)$data['sort'] == $data['sort'] && $data['sort']>0))
		   {
			    $this->error_info['sort'] = '传入的sort 不是正整数';
		   }


           if(!empty( $this->error_info))
		    {
			    return false;
		    }

			return $this->update($data);
	   }

  }
?>