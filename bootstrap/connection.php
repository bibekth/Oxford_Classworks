<?php
    function db_connection(){
        $host="localhost";
        $username="root";
        $password="";
        $database="department";
        $connection=new mysqli($host,$username,$password,$database);
        if($connection->connect_error){
            echo $connection->connect_error;
            die("Connection Failed.");
        }else{
            return $connection;
        }
    }
?>