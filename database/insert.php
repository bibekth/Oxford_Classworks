<?php
    include 'connection.php';
    if(isset($_POST['fullname'])){
        $full_name=$_POST['fullname'];
        $contact=$_POST['contact'];
        $address=$_POST['address'];
        $message=$_POST['message'];
        $sql="insert into contact(full_name,address,contact,message) values('$full_name','$address','$contact','$message')";
        $con=db_connect();
        $result=$con->query($sql);
        if($result){
            echo "Data Stored";
        }else{
            // echo $con->connect_error;
            echo "Failed to store";
        } //[via oop]
    }
?>