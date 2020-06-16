<?php
    
    function connectionMysql(){
        
        $server = (string) "localhost";
        $user = (string) "root";
        $password = (string) "bcd127";
        $database = (string) "dbmaktub";
        $connection = mysqli_connect($server, $user, $password, $database);
        return $connection;
        
    }

?>