<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<div class="container">
    <?php
    session_start();
    include 'connection.php';
    if(isset($_POST['username'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="select * from student where username='$username' and password='$password'";
        $con=db_connection();
        $res=$con->query($sql);
        if($res->num_rows>0){
            // if ($res === false) {
            //     die('Error executing query: ' . $con->error);
            // }
            $_SESSION['user']=$username;
            header("Location:select.php");
        }else{
            $_SESSION['message']="Login failed: Username or password is incorrect";
        }
        //Error Finding COde in session
        // if ($res === false) {
        //     die('Error executing query: ' . $con->error);
        // }
    }
    ?>

    <form action="" method="POST">
        <div class="form" style>
            <label for="username">Email/Username</label><bR>
            <input type="text" name="username"><br><br>
            <label for="password">Password</label><br>
            <input type="text" name="password"><br><br>
            <input type="submit" value="Login">
        </div>
    </form>
    <!-- <?php
        if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
        }
    ?> -->

</div>