<?php
$id=$_GET['Sn'];
include 'connection.php';

$sql="delete from depart where Sn=$id";
$con=db_connection();
$result=$con->query($sql);
if($result){
    //echo "Data deleted successfully"."<br>";
    echo "<a href='select.php'><b>Let's Go</b></a>";
}else{
    echo "Data can not be deleted";
}
?>