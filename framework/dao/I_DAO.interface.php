<?php
namespace framework\dao;
interface I_DAO
{
	 public static function  getSingleton(array $option );
	 public  function  query($sql);
	 public  function  exec($sql);
	 public  function  fetchAll($sql);
	 public  function  fetchRow($sql);
	 public  function  fetchOne($sql);
	 public  function  escapeData($sql);
	 public  function  affectedRows($sql);
	 public  function  resultRows();
	 public  function  lastInsertID();
 }
?>