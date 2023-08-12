<?php
    include "connection.php";

    $sql = "select * from contact";
    $con=db_connect();
    $result = $con->query($sql);
    if($result->num_rows>0){
        echo "<table border=1>
        <tr>
        <th>Full Name</th>
        <th>Address</th>
        <th>Contact</th>
        </tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr>
        <td>".
        $row['full_name'].
        "</td><td>".
        $row['address'].
        "</td><td>". 
        $row['contact']. 
        "</td></tr>";
    }
    }else{
        echo "No records found";
    } echo "</table>";
     //[via oop]
    
    /*$sql="select * from contact";
    $con=db_connect();
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        echo "<table border=1>
        <tr>
        <th>Full Name</th>
        <th>Address</th>
        </tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>
        <td>".
        $row['full_name']
        ."</td>
        <td>".
        $row['address']
        ."</td></tr>";
    }
    }else{
        echo "No records found";
    }*/ //[via pop]
?>