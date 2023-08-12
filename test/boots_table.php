
<?php
include 'connnection.php';
$sql = "select * from student";
$con = db_connect();
$result = $con->query($sql);
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"><script src="js/bootstrap.bundle.min.js"></script>


<body>
  
<div class="container mt-5">
  <div class="row">
        <div class="col-sm-10">
                <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>address</th>
                                <th>contact</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                        if($result->num_rows>0){
                            while($row=$result->fetch_assoc()){
                            ?>
                        <tr>
                            <td><?=$row['id']?></td>
                            <td><?=$row['name']?></td>
                            <td><?=$row['address']?></td>
                            <td><?=$row['contact']?></td>
                            <td><i class="bi bi-eye ps-4"></i> <i class="bi bi-pencil ps-4"></i>
                                <a href="delete.php?id='.$row['id'].'"> <i class="bi bi-trash  ps-4"></a></i></td>
                        </tr>
                        

                <?php
                        }
                    }else{
                        echo "No Record Found";
                    }
                ?>
                        </table>
        </div>

       
  </div>
  <button type="button" class="btn btn-secondary">Submit</button>
</div>


</body>

