<?php
namespace framework\dao;
class DaoPdo implements I_DAO
    {
        private $port;
        private $charset;
        private $dbname;
        private $host;
        private $username;
        private $password;
        private $pdo;
        private $podstatement;
        private $affected_rows;
    //private $num = 0;
        private static $instance;

        private function __clone()
            {

            }

        private function __construct(array $option)
            {
                $this->initOption($option);
                $this->initPDO();
            }

        public static function getSingleton(array $option)
            {
                if (!(self::$instance instanceof DaoPdo))
                    {
                        self::$instance = new  DaoPdo($option);
                    }
                return self::$instance;
            }

        private function initOption($option)
            {

                $this->port = isset($option['port']) ? $option['port'] : '';
                $this->charset = isset($option['charset']) ? $option['charset'] : '';
                $this->dbname = isset($option['dbname']) ? $option['dbname'] : '';
                $this->host = isset($option['host']) ? $option['host'] : '';
                $this->username = isset($option['username']) ? $option['username'] : '';
                $this->password = isset($option['password']) ? $option['password'] : '';


            }

        private function initPDO()
            {
                try
                    {
                        $dsn = "mysql:port=$this->port;dbname=$this->dbname;host=$this->host;charset=$this->charset";
                        $this->pdo = new \PDO($dsn, $this->username, $this->password);
                    }
                catch (PDOException $e)
                    {
                        trigger_error('数据库连接失败', E_USER_WARNING);
                        return false;
                    }
            }


    // 执行SQL，通常用于执行查询类
        public function query($sql)
            {
                if (!($this->pdo instanceof \PDO))
                    {
                        return false;
                    }
                $result = $this->pdo->query($sql);

                if ($result == false)
                    {
                        $error_info = $this->pdo->errorInfo();
                        $str = '语句错误' . $sql . $error_info[2];
                        trigger_error($str, E_USER_WARNING);
                        return false;
                    }
                else
                    {
                        $this->podstatement = $result;
                        return $result;
                    }
            }

    // 执行SQL，通常用于执行非查询类
        public function exec($sql)
            {
                if (!($this->pdo instanceof \PDO))
                    {
                        return false;
                    }
                $result = $this->pdo->exec($sql);
                if ($result === false)
                    {
                        $error_info = $this->pdo->errorInfo();
                        $str = '语句错误' . $sql . $error_info[2];
                        trigger_error($str, E_USER_WARNING);
                        return false;
                    }
                else
                    {
                        $this->affected_rows = $result;
                        return $result;
                    }
            }

    // 通过查询SQL，获取满足条件的全部记录
        public function fetchAll($sql)
            {
                $result = $this->query($sql);

                if ($result == false)
                    {
                        return false;
                    }

                $rows = $result->fetchAll(\PDO::FETCH_ASSOC);
                $result->closeCursor();
                return $rows;


            }

    // 通过查询SQL，获取满足条件的一条记录
        public function fetchRow($sql)
            {
                $result = $this->query($sql);
                if ($result == false)
                    {
                        return false;
                    }
                $row = $result->fetch(\PDO::FETCH_ASSOC);
                $result->closeCursor();
                return $row;

            }

    // 通过查询SQL，获取满足条件的第一条记录的第一个字段的值
        public function fetchOne($sql)
            {
                $result = $this->query($sql);
                if ($result == false)
                    {
                        return fasle;
                    }
                $column = $result->fetchColumn(\PDO::FETCH_ASSOC);
                $result->closeCursor();
                return $column;

            }

    // 通过查询SQL，获取满足条件的记录的一纵列
        public function fetchColumn($sql)
            {
                /*
               $result = $this->query($sql);
                if( $result == false)
                   {
                       return  fasle ;
                   }
                $rows = $result->fetchAll(PDO::FETCH_NUM);
                $arr = [];

                foreach($rows as $v )
                {
                      $arr[] = $v[0];
                }
                $result->closeCursor();
                 return $arr;
              */
                $result = $this->query($sql);

                if ($result == false)
                    {
                        return false;
                    }
                $col_list = [];
                while (false !== ($row = $result->fetchColumn()))
                    {
                        $col_list[] = $row;
                    }
                $result->closeCursor();
                return $col_list;

            }

    // 提供用于转义 和 引号包裹的方法
        public function escapeData($sql)
            {
                return $this->pdo->quote($sql);
            }

    // 获得受影响的记录数，增删改
        public function affectedRows($sql)
            {
                $affected_rows = $this->affected_rows;
                $this->affected_rows = null;
                return $affected_rows;
            }

        public function resultRows()
            {
                return $this->podstatement->rowCount();

            }

        public function lastInsertID()
            {
                return $this->pdo->lastInsertId();
            }

    }

?>