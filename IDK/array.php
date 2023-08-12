<?php
    /*$a=[1,2,"Ram",3];
    $b=array("Hari",3,5,13);
    //echo "<h2>Hello</h2>";
    for($i=0; $i<count($b); $i++){
        //echo $b[$i]."<br>";
    }
    foreach($a as $value){
        //echo $value."<br>";
    }

    $c=array();
    $c[0]=1;
    $c[1]="RAM";

    $d["name"]="Bibek Thapa ";
    $d["mobile"]="9809101575";
    
    $e=["name"=>"Bibek"."<br>","address"=>"Bharatpur"."<br>","mobile"=>"9809101575"];

    //var_dump($e);
    //print_r($e);
    */

    $f=[
        ["name"=>"Bibek","address"=>"Bharatpur","mobile"=>"9809101575"],
        ["name"=>"Bibek","address"=>"Bharatpur","mobile"=>"9809101575"],
        ["name"=>"Bibek","address"=>"Bharatpur","mobile"=>"9809101575"]
    ];
    //print_r($f);
?>

<table border = "1 ">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Mobile</th>
    </tr>
    <?php
        foreach ($f as $value){
        
    ?>
    <tr>
        <td><?=$value["name"]?></td>
        <td><?=$value["address"]?></td>
        <td><?=$value["mobile"]?></td>
    </tr>
    <?php }
    ?>
    </table>