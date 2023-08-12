<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<div class="container">
    <div class="head" >
        <h2><a href="show.php"><i class="bi bi-house"></i></a> &nbsp The details of the students : </h2>
        <div class="combo" style="display:flex">
        <a href="inputform.php" class="primary-success">
            <h5 class="bg bg-primary text-light">Add new student</h5>
        </a><br>&nbsp
        <bR>
        <form action=""><input type="text" name="searchbox" placeholder="Search"><button type="submit" style="height:2vw" class="border-light"><i class='bi bi-search'></i></button></form>
        </div>
    </div>

<?php
session_start();
if (isset($_SESSION['user'])) {
include 'db_connection.php';
$con = db_connect();
if (isset($_GET['searchbox'])) {
    $search = $_GET['searchbox'];
    $query = "select * from stdetails where name like '%" . $search . "%'";
} else {
    $query = "select * from stdetails";
}
$result = $con->query($query);
if ($result->num_rows > 0) {
    echo "<table class='table table-bordered table-hover'>
            <thead class='thead-dark'>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Mail ID</th>
            <th>Faculty</th>
            <th>Action</th>
            </tr>
            </thead>";
    while ($data = $result->fetch_assoc()) {
        echo '<tbody>
                <tr>
                <td>' .
            $data["id"]
            . '</td><td>'
            . $data["name"]
            . '</td><td>'
            . $data["age"]
            . '</td><td>'
            . $data["gender"]
            . '</td><td>'
            . $data["address"]
            . '</td><td>'
            . $data["contact"]
            . '</td><td>'
            . $data["gmail"]
            . '</td><td>'
            . $data["faculty"]
            . '</td><td>
                <a href="view.php"><i class="bi bi-eye-fill"></i></a> &nbsp
                <i class="bi bi-pencil-square text-info"></i> &nbsp
                <a href="delete.php?id=' . $data["id"] . '"><i class="bi bi-trash-fill text-danger"></i></a> &nbsp
                </tbody>';
    }
} else {
    echo "No records found";
}
'</table>';
}else{
    header('Location:login.php');
}
?>
</div>
<a href="logout.php" class="float-right">LogOut</a>