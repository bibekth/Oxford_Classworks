<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    include 'db_connection.php';
    ?>
    <div class="container">
        <form action="" method="POST">
                <label for="">Username: </label><input type="text" name="username"><br><br>
                <label for="">Password: </label><input type="text" name="password"><br><br>
                <input type="submit" value="Login">
        </form>


        <?php
        if (isset($_POST['username'])) {
            $name = $_POST['username'];
            $pass = $_POST['password'];
            $sql = "select * from login where username='$name' and password='$pass'";
            $con = db_connect();
            $res = $con->query($sql);
            if ($res->num_rows > 0) {
                $_SESSION['user'] = $name;
                header('Location:show.php');
            } else {
                echo "Incorrect username/password.";
            }
        }
        ?>
    </div>
</body>

</html>