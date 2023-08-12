<?php
    include 'connection.php';
    if(isset($_POST['dept_sn'])){
        $sn=$_POST['dept_sn'];
        $name=$_POST['dept_name'];
        $code=$_POST['dept_code'];
        $status=$_POST['dept_status'];
        $sql="insert into depart(Sn,Name,Code,Status) values('$sn','$name','$code','$status')";
        $cont=db_connection();
        $result=$cont->query($sql);
        if($result){
            echo "<a href='select.php'><b>Let's Go</b></a>";
        }else{
            echo "Failed to store the data.";
        }
    }
?>