<?php
    include 'db_connection.php';
    if(isset($_POST['name'])){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $contact=$_POST['contact'];
        $gmail=$_POST['gmail'];
        $faculty=$_POST['faculty'];
        $sql="insert into stdetails(name,age,gender,address,contact,gmail,faculty) values('$name','$age','$gender','$address','$contact','$gmail','$faculty')";
        $con=db_connect();
        $result=$con->query($sql);
        if($result){
            echo "<a href='show.php'><b>Let's view the whole</b></a> ";
        }else{
            echo "Failed to store";
        }
    }
?>