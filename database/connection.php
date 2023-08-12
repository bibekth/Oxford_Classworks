<?php
    function db_connect(){
    $host="localhost";
    $username="root";
    $password="";
    $database="student";
    $connection= mysqli_connect($host,$username,$password,$database);
    if(!$connection){
        echo mysqli_connect_error();
        die("Connection Failed");
    }else{
        return $connection;
    } //[Connection via POP]
    /*$connection= new mysqli($host,$username,$password,$database);
    if($connection->connect_error){
        echo $connection->connect_error;
        die("Connection Failed");
    }else{
        return $connection;
    }*/  //[Connection via OOP]
    }
?>