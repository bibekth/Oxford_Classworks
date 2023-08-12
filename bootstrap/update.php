<?php
session_start();
include 'connection.php';
//$id=$_GET['Sn'];



    if(isset($_POST['dept_sn'])){
        $sn=$_POST['dept_sn'];
        $name=$_POST['dept_name'];
        $code=$_POST['dept_code'];
        $status=$_POST['dept_status'];
        $sql="update depart set Name='".$name."', Code='".$code."', Status='".$status."' where Sn=$sn";
        $cont=db_connection();
        $result=$cont->query($sql);
        if($result){
            $_SESSION['message']="Update SUceessful";
            header("Location:sessionexample.php");
            // echo "<a href='select.php'><b>Let's Go</b></a>";
        }else{
            echo "Failed to update the data.";
        }
    }
?>