<?php 
    session_start();
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<div class="container"><br>
    <h1>
        <?php
    if(isset($_SESSION['user'])){

?>
    </h1>


    <div class="top_part" style="display:flex ">
        <div class="head">
            <h2 style="font-family:sands-serif">Department Details</h2>
        </div>
        <div style="width:25vw "><a href="form.php" class="float-right bg-success text-white"> <i
                    class="bi bi-plus-square text-dark"></i><b>Add New Department</b></a></div>
    </div>
    <?php
    include "connection.php";
    $sql="select * from depart";
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
        <th>Action</th>
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
        ."</td><td>
        <a href='view.php?Sn=".$rowes['Sn']."' title='View Record' data-toggle='tooltip' class='text-warning'><i class='bi bi-eye-fill'></i></a>  &nbsp
        <a href='updateform.php?Sn=".$rowes['Sn']."' title='Update Record' data-toggle='tooltip' class='text-info'><i class='bi bi-pencil-fill'></i>  &nbsp
        <a href='delete.php?Sn=".$rowes['Sn']."' title='Delete Record' data-toggle='tooltip' class='text-danger' ><i class='bi bi-trash'></i></a>
        </td></tr>";
    }  
}else{
    echo "No records found.";
}echo "</table>";
?>
<a href="logout.php" class="btn btn-danger float-right">Logout</a>
<?php
    }else{
        header("Location:login.php");
    }
?>
</div>