<?php

/**
 * 各種DB 
 * 
 * 主に DB処理
 *
 * @package Datadabase
 * @author LOCKON CO.,LTD.
 * @version $Id:self.php 15532 2007-08-31 14:39:46Z nanasess $
 */
class Database{

        var $dbh     = NULL;
        var $db_host = "";
        var $db_user = "";
        var $db_pass = "";
        var $db_name = "";

        public function __construct( $db_host, $db_user, $db_pass, $db_name )
        {
            $this->dbh  = $this->connectDB( $db_host, $db_user, $db_pass, $db_name );
            $this->db_host = $db_host;
            $this->db_user = $db_user;
            $this->db_pass = $db_pass;
            $this->db_name = $db_name;
        }

        private function &connectDB( $db_host, $db_user, $db_pass, $db_name )
        {
            try 
            {
                $dbh = new PDO('mysql:host='.$db_host.';dbname='.$db_name,$db_user,$db_pass);
                $dbh->query('SET NAMES utf8');
            }
            catch (PDOException $e)
            {
                //エラーメッセージ表示
                var_dump($e->getMessage());
                exit;
            }
           
            return $dbh;
        }

        public function select( $table,$column = array(),$whereArr = array() ,$other="")
        {
            $columnKey = "";
            //コラムの作成
            if(empty($column))
            {
                $columnKey = " * ";
            }
            else
            {
                $columnKey = implode("," ,$column);
            }
            
            list( $where, $whereData )= $this->setWhereSQL( $whereArr );
            
            //sql文の作成
            $sql = " SELECT "
                 .      $columnKey 
                 . " FROM "
                 .      $table
                 .      $where 
                 .      $other ;

            $stmt = $this->dbh->prepare($sql);

            if( $whereData !== '' ) 
            {
            	$stmt->execute($whereData);
            }
            else
            {
            	$stmt->execute();
            }
            
            //データを連想配列に格納
            $data = array();
            while($result = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                array_push($data , $result);
            }

            return $data;
        }
 
        public function insert($table,$insData=array() ,$mdFlg = false){

            if($mdFlg) $insData["modified_time"] = "NOW()";
            
            $insDataKey =array_keys($insData);
            $columnKey = implode(",",$insDataKey);
            
            $pre = array();
            foreach($insDataKey as $val)
            {
                $pre[]=":".trim($val);   
            }
            
            $preSt = implode("," , $pre );
            
            $sql = " INSERT INTO " . $table . " (" 
                 .      $columnKey 
                 . ") VALUES (" 
                 .      $preSt 
                 . ") " ;
                 
            $insDataVal=array();
            
            foreach($insData as $key => $val)
            {
                $insDataVal[":".trim($key)]= $val ;
            }
  
            $stmt = $this->dbh->prepare( $sql );
            $res = $stmt->execute($insDataVal);

            return $res;
        }

        public function setWhereSQL( $whereArr )
        {
            $where ='';
           
            //where句のプリペーアドステートメントを作り、
            //値(whereData)を同時にセット            
            if(!empty($whereArr))
            {
                $where .=" WHERE ";
                foreach($whereArr as $val)
                {
                    if(is_array($val))
                    {
                        $where .= $val[0].$val[1].":".trim($val[0]) ; 
                        $whereData[":".trim($val[0])] = $val[2];
                    }
                    else
                    {
                        $where .= $val;
                    }                  
                }
            }
            else
            {
               $whereData ="";
            }

            return array( $where, $whereData );
        }



        public function update($table ,$column = array() ,$whereArr=array(),$mdFlg = false){
        
            $columnArr  = array();
            $columnData = array();
            $where      = " WHERE ";
            $whereData  = array();
            
            if($mdFlg) $column[]= array("modified_time", date('Y-m-d h:m:s')) ;

            foreach($column as $key => $val)
            {
                $columnArr[$key] = $val[0]." = ".":".trim($val[0]);
                $columnData[":".trim($val[0])] = $val[1];
            }

            $columnKey = implode("," , $columnArr);
            
            list($where, $whereData) = $this->setWhereSQL( $whereArr );

			//sql文の作成
            $sql = " UPDATE "
                 .      $table
                 . " SET "
                 .      $columnKey
                 .      $where ;
            
            $updateData = array_merge($columnData,$whereData);
            
            $stmt = $this->dbh->prepare( $sql );
            $res = $stmt->execute($updateData);
            
            return $res ;
        }
        
        public function getLastId()
        {
            return mysql_insert_id( $this->db_con );
        }
    }

?>
