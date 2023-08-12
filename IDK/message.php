<?php


function getdata(){
if(isset($_POST['submit'])){

$Name = $_POST['fname'];

$Cname = $_POST['cname'];

$Femail = $_POST['femail'];

$Fph = $_POST['fph'];

$fmsg = $_POST['fmsg'];



echo "<h3>Name: </h3>".$Name."<br>"."<br>".$Cname."<br>"."<br>".$Femail."<br>"."<br>".
$Fph."<br>"."<br>".$fmsg."<br>";
}
}  

getdata();
   
?>