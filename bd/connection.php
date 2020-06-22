<?php
    // FUNÇÃO COM OS DADOS DA CONEXÃO
    function connectionMysql(){
        
        $server = (string) "localhost"; 
        $user = (string) ""; //Ex: root
        $password = (string) ""; //coloque sua senha aqui
        $database = (string) "dbmaktub_teste";
        $connection = mysqli_connect($server, $user, $password, $database);
        return $connection;
        
    }

?>