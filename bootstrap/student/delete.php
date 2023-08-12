<?php
$id=$_GET['id'];
include 'db_connection.php';

$sql="delete from stdetails where id=$id";
$con=db_connect();
$result=$con->query($sql);
if($result){
    //echo "Data deleted successfully"."<br>";
    echo "<a href='show.php'><b>Let's Go</b></a>";
}else{
    echo "Data can not be deleted";
}
?>