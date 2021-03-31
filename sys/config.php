<?php

    $servidor = "localhost";
    $separator = DIRECTORY_SEPARATOR;
    $db = "db_acao";
    $user = "root";
    $pass = "root";
    $conexao = '';
    // $servidor = "localhost";
    // $separator = DIRECTORY_SEPARATOR;
    // $db = "D:\ADJClientes\CursoPHP\DB\DBPHP7.FDB";
    // $user = "dbphp7";
    // $pass = "dbphp7";
    // $conexao = '';

    try {
        //$str_conn = "firebird:dbname=$servidor:$db";		
        $str_conn = "mysql:dbname=$db";		
        $conexao = new PDO("$str_conn","$user", "$pass");
        
    } catch (PDOException $e) {
        echo "Falha na conexão.".$e->getcode();
    }
?>