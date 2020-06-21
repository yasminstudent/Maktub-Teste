<?php
    // FUNÇÃO COM OS DADOS DA CONEXÃO
    function connectionMysql(){
        
        $server = (string) "localhost";
        $user = (string) "root";
        $password = (string) "bcd127";
        $database = (string) "dbmaktub_teste";
        $connection = mysqli_connect($server, $user, $password, $database);
        return $connection;
        
    }

?>