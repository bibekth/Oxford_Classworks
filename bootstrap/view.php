<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="container">
<?php
    include "connection.php";
    $id=$_GET['Sn'];
    $sql="select * from depart where Sn=$id";
    $con=db_connection();
    $result=$con->query($sql);
    if($result->num_rows>0){
        echo "<table class='table table-bordered table-hover'>
        <thead class='thead-light'>
        <tr>
        <th>SN</th>
        <th>Department Name</th>
        <th>Department Code</th>
        <th>Status</th>
        </tr>
        </thead>";
    while($rowes=$result->fetch_assoc()){
        echo "<tbody>
        <tr>
        <td>". 
        $rowes['Sn']
        ."</td><td>"
        .$rowes['Name']
        ."</td><td>"
        .$rowes['Code']
        ."</td><td>"
        .$rowes['Status']
        ."</td>";
    }  
}else{
    echo "No records found.";
}echo "</table>";
?>
<a href="select.php" class="float-right">Let's go to overview of the whole table.</a>
</div>
