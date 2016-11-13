<?php
namespace framework\core;
use framework\dao\DaoPdo;
 class Model
 {
	 protected $dao;
	 protected $table;
	 protected $field_list = [];
	 protected $logic_table = null;
	 protected $error_info = [];
	 private function initDao()
     {
	    $db_server_config = 
			array(
			'host'=>$GLOBALS['config']['db_host'],
			'dbname'=>$GLOBALS['config']['db_dbname'],
			'port'=>$GLOBALS['config']['db_port'],
			'charset'=>$GLOBALS['config']['db_charset'],
			'username'=>$GLOBALS['config']['db_username'],
			'password'=>$GLOBALS['config']['db_password'],
			);
       $this->dao =DaoPdo::getSingleton($db_server_config);
     }

     public function __construct()
      {
	   $this->initDao();
       $this->initLogicTable();
	 //  echo $this->logic_table;
	   $this->initTable();
	   $this->initField();	   
      }

     private function  initTable()
	 {    
		
		 // echo $this->logic_table;
		  $this->table = $GLOBALS['config']['table_prefix'].$this->logic_table;
	 }
	 public function insert($data)
	 { 
          $sql  = 'INSERT INTO '.$this->table ;
		  
		  $field_list = array_keys($data);

		  $field_list = array_map(function ($v){
		   return '`'.$v.'`';
		  }, $field_list);

		  $field_list = implode(',',$field_list);


		  $sql .= "({$field_list})";


		  $values_list = array_values($data);

          $values_list = array_map([$this->dao,'escapeData'],$values_list);
           
		  $values_list =  implode(',',$values_list);

          $sql .= 'VALUES'."({$values_list})";
		  $result = $this->dao->exec($sql);
 
		   if($result)
		   {
			   return  $this->dao->lastInsertID();
		   }else
		   {
			   return false;

		   }
	        
	  }
      
	  public function delete($pk_value)
	  {
		  $sql = "DELETE FROM $this->table WHERE {$this->field_list['key']} = $pk_value";
          
		  return $this->dao->exec($sql);

	  }


	  public function initField()
	  {
          $sql = "DESC `$this->table`";
		  $rows = $this->dao->fetchAll($sql);
		  foreach($rows as $row)
		  {
			   $this->field_list[] = $row['Field'];
			   if($row['Key'] === 'PRI')
			   {
                $this->field_list['key'] = $row['Field'];
			   }

		  }
		  
	  }
      
     public function initLogicTable()
	 {    
		 if(!is_null($this->logic_table))
		 {   			 
			return;	
		 }
		 $class_name = basename(get_class($this));

		 $table_name = substr($class_name,0,-5);
					   
//		 $table_pattern = '/(?<=[a-z])([A-Z])/';
//
//		 $table_name = preg_replace($table_pattern,'_$1',$table_name);//Category_Qestion_Topic
//
//		 $this->logic_table = strtolower($table_name);
//       $table_name = 'TopicQestion';
		 $table_pattern = '/(?<=[a-z])(?=[A-Z])/';
		 $table_list = preg_split($table_pattern ,$table_name);
		 $table_list =array_map('strtolower', $table_list);
		 $tablestr = implode('_',$table_list);
         $this->logic_table = strtolower($tablestr);

	 }


	  public function update($data ,$where =null)
	  {
		 //  update 表名 set 字段名 = 字段值，字段名 = 字段值，字段名 = 字段值  where  条件
		 $field_pk = $this->field_list['key'];
		 if(!is_null($where))
		 {
			  $where_str = $where;
		 }else if(isset($data[$field_pk]))
		 {
			  $where_str = " `$field_pk` = {$data[$field_pk]}";
		 }else
		 {
				  return false;
		 }
        
		 $sql = "UPDATE  `$this->table` SET ";


		 foreach($data as $key => $value)
		 {
			 $field_list[] = '`'.$key.'`'.'='.$this->dao->escapeData($value);
		 }

         $field_str = implode(',',$field_list);


		 $sql =  $sql .$field_str.'WHERE'.' '.$where_str;

		 return $this->dao->exec($sql);

	  }

      public function getErrorInfo($separater = '')
	   {
		    if($separater === '')
		    { 
				 return $this->error_info;
			}
		 	else 
		    {
				 $error_str = '';
				 foreach($this->error_info as $key => $value)
				 {
					  $error_str .= $key .':'.$value.$separater;
				 }
				 return $error_str;
			}
	   }

	   public function select($filter = [])
	   {
		    
          // select * from question where id> 3 group by categor_id having  content = dd order by limit;
		  if(isset($filter['filed']))
		   {
			   $filed_str = $filter['filed'];
		   }else
		   {
			   $filed_str = '*';
 		   }
          $sql = "SELECT $filed_str FROM $this->table";

		  if(isset($filter['where']))
		  {
			 $sql .= " WHERE  {$filter['where']}"; 
		  }
		  
		  if(isset($filter['group']))
		  {
			 $sql .= " GROUP BY  {$filter['group']}"; 
		  }
          
		  
		  if(isset($filter['having']))
		  {
			 $sql .= " HAVING  {$filter['having']}"; 
		  }

		   if(isset($filter['order']))
		  {
			 $sql .= " ORDER BY  {$filter['order']}"; 
		  }

		   if(isset($filter['limit']))
		  {
			 $sql .= " LIMIT   {$filter['limit']}"; 
		  }

          return $this->dao->fetchAll($sql);

	   }

	  public function find($pk_value,$filter = [])
	  {
		   
		  if(isset($filter['field']))
		   {
			   $field_str = $filter['field'];
		   }else
		   {
			   $field_str = '*';
 		   }
    	   $sql = "SELECT  $field_str FROM $this->table";
           $primary_key = $this->field_list['key'];
		   $sql .= " where $primary_key =".$this->dao->escapeData($pk_value);
		   return $this->dao->fetchRow($sql);

	  }


 }
?>