<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<div class="container">
<br><h2>Add new student data:</h2><br>
    <form action="insert.php" method="POSt">
        <label for="">Name</label><br><input type="text" name="name"><br><br>
        <label for="">Age</label><br><input type="number" name="age"><br><br>
        <label for="">Gender</label><br><input type="text" name="gender"><br><br>
        <label for="">Addres</label><br><input type="text" name="address"><br><br>
        <label for="">Contact</label><br><input type="text" name="contact"><br><br>
        <label for="">Mail ID</label><br><input type="text" name="gmail"><br><br>
        <label for="">Faculty</label><br><input type="text" name="faculty"><br><br>
        <input type="submit" value="Submit">
    </form>
</div>