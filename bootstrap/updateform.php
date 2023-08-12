<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php
    include 'connection.php';
    $con=db_connection();
    $id=$_GET['Sn'];
    $sql="select * from depart where Sn=$id";
    $result=$con->query($sql);
    $data=$result->fetch_array();
?>
<div class="container-fluid bg-secondary col-md-3">
    <br><h3 style="font-family:sans"><b> &nbsp Fill The Form To Update</b></h3><br>
<form action="update.php" method="POST">
<label for="">SN: </label>
    <input type="hidden" name="dept_sn" value="<?=$data['Sn']?>" class="border border-light rounded bg-light" style="width:2vw"/><br>
    <label for="">Department Name: </label><br>
    <input type="text" name="dept_name" value="<?=$data['Name']?>" class="border border-light rounded bg-light" style="width:20vw"/><br><br>
    <label for="">Department Code: </label><br>
    <input type="text" name="dept_code" value="<?=$data['Code']?>" class="border border-light rounded bg-light" style="width:20vw"/><br><br>
    <label for="">Status: </label><br>
    <input type="text" name="dept_status" value="<?=$data['Status']?>" class="border border-light rounded bg-light" style="width:20vw"/><br><br><br>
    <input type="submit" value=" Update " class="border border-success rounded bg-success text-white" /><br><br><br>
</form>
</div>
