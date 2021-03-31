<?php

    class Sql extends PDO {
        private $conn;
    
        public function __construct(){
            require_once('sys/config.php');
            $this->conn = $conexao;// new PDO("firebird:dbname=localhost:D:\ADJClientes\CursoPHP\DB\DBPHP7.FDB","dbphp7", "dbphp7");
            //$this->conn = new PDO("mysql:dbname=db_acao","root", "root");
        }

        private function setParams($statement, $parameters = array()){
            
            foreach ($parameters as $key => $value) {
                $this->setParam($statement, $key, $value);
            }
        }
        
        private function setParam($statement, $key, $value){
            
            $statement->bindParam($key, $value);
        }
        
        public function query($rawQuery, $params = array()){
            $stmt = $this->conn->prepare($rawQuery);

            $this->setParams($stmt, $params);
            $stmt->execute();
            return $stmt;
        }
        
        public function select($rawQuery, $params = array()):array {
            $stmt = $this->query($rawQuery, $params);
            
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $qtde = count($row);

            for ($i=0; $i < $qtde ; $i++) { 
                $teste = array();
                foreach ($row[$i] as $key => $value) {
                    if ($key === 'dtregister' || $key === 'dtbuy' || $key === 'dtsell' ) {
                        $dthr = explode(' ',$value);
                        $date = explode('-', $dthr[0]);
                        if (count($dthr) > 1) {
                            $value = $date[2].'-'.$date[1].'-'.$date[0].' '.$dthr[1];
                        } else {
                            $value = $date[2].'-'.$date[1].'-'.$date[0].' 00:00:00';
                        }
                    }
                    if ($key === 'NOME') {
                        $value = utf8_encode($value);
                    }
                    $row[$i][$key] = $value;
                }
            }
            return $row;
        }
    }
?>

