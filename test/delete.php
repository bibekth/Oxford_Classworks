<?php
include 'connnection.php';
  
$id = $_GET['id'];
$sql = "delete from student where id=$id";
$con = db_connect();
$result = $con->query($sql);
if($result){
    echo "Data deleted successfully";
}else{
    echo "Data cannot be deleted";
}
?>