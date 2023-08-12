<?php
    session_start();  //session got started
    // $_SESSION['message']="<h1>Welcome to Oxford</h1>"; //that message is a variable
    $_SESSION['update']="<h2>Data updated successfully</h2>";
    
    // echo $_SESSION['update'];
    header("Location:select.php");
?>
