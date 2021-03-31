<?php
    class Usuario {
        private $idusuario;
        private $deslogin;
        private $dessenha;
        private $dtcadastro;
        private $nome;

        public function getIdusuario(){
            return $this->idusuario; 
        }

        public function setIdusuario($value){
            return $this->idusuario = $value;
        }

        public function getDeslogin(){
            return $this->deslogin;
        }

        public function setDeslogin($value){
            return $this->deslogin = $value;
        }

        public function getDessenha(){
            return $this->dessenha;
        }

        public function setDessenha($value){
            return $this->dessenha = $value;
        }

        public function getDtcadstro(){
            return $this->dtcadastro;
        }

        public function setDtcadastro($value){
            return $this->dtcadastro = $value;
        }
        public function getNome(){
            return $this->nome;
        }

        public function setNome($value){
            return $this->nome = $value;
        }

        public function loadById($id){
            $sql = new Sql();
            $results = $sql->select("SELECT * FROM TB_USUARIOS WHERE IDUSUARIO = :ID",
            array(":ID"=>$id));

            if(count($results) > 0){
                $this->setData($results[0]);
            }

        }

        public static function getList(){
            $sql = new Sql();
            return $sql->select("SELECT * FROM TB_USUARIOS ORDER BY DESLOGIN");
        }
        
        public static function search($login){
            $sql = new Sql();
            return $sql->select("SELECT * FROM TB_USUARIOS WHERE DESLOGIN LIKE :SEARCH ORDER BY DESLOGIN", array(
                ":SEARCH" => "%".$login."%"
            ));
        }

        public function login($login, $pass){
            $sql = new Sql();
            $results = $sql->select("SELECT * FROM TB_USUARIOS WHERE DESLOGIN = :LOGIN AND DESSENHA = :SENHA",
            array(
                ":LOGIN"=>$login, 
                ":SENHA"=>$pass
            ));

            if(count($results) > 0){
                $this->setData($results[0]);
            } else {
                throw new Exception("Login ou senha inválido!");
            }
        }

        public function setData($data){
            $this->setIdusuario($data['IDUSUARIO']);
            $this->setDeslogin($data['DESLOGIN']);
            $this->setDessenha($data['DESSENHA']);
            $this->setNome($data['NOME']);
            $this->setDtcadastro(new DateTime($data['DTCADASTRO']));
        }

        /*public function insert(){
            $sql = new Sql();
            $results = $sql->select("SELECT * FROM SP_USUARIOS_INSERT(:DESLOGIN, :SENHA, :NOME)", array(
                ":DESLOGIN" => $this->getDeslogin(),
                ":SENHA" => $this->getDessenha(),
                ":NOME" => $this->getNome()

            ));

            if (count($results) > 0) {
                $this->setData($results[0]);
            }
        }*/
        public function insert(){
            $sql = new Sql();
            $results = $sql->select("INSERT INTO TB_USUARIOS (DESLOGIN, DESSENHA, NOME) VALUES (:D_LOGIN, :D_SENHA, :D_NOME)", array(
                ":D_LOGIN" => $this->getDeslogin(),
                ":D_SENHA" => $this->getDessenha(),
                ":D_NOME" => $this->getNome()

            ));

            if (count($results) > 0) {
                $this->setData($results[0]);
            }
        }

        public function __toString(){
            return json_encode(array(
                'idusuario' => $this->getIdusuario(),
                'deslogin'  => $this->getDeslogin(),
                'dessenha'  => $this->getDessenha(),
                'nome'      => $this->getNome(),
                'dtcadastro'=> $this->getDtcadstro()
            ));
        }
    }
?>