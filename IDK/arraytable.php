<?php
include "variables.php"; //Imported the function from another file.
    $marks=[
        ["Subject"=>"Economics","Marks"=>69],
        ["Subject"=>"Web Technologies II","Marks"=>76],
        ["Subject"=>"Organization Management","Marks"=>55],
        ["Subject"=>"Data Communication and Computer Network","Marks"=>92],
        ["Subject"=>"Fundamental of Probability and Statistics","Marks"=>83],
    ];
    /*function checkGPA($mark){
        if($mark>=90 && $mark<=100){
            $result="A+";
        }
        elseif($mark>=80 && $mark<90){
            $result="A";
        }
        elseif($mark>=70 && $mark<80){
            $result="B+";
        }
        elseif($mark>=60 && $mark<70){
            $result="B";
        }elseif($mark>=50 && $mark<60){
            $result="C+";
        }elseif($mark>=45 && $mark<50){
            $result="C";
        }elseif($mark>=35 && $mark<45){
            $result="D";
        }elseif($mark>100){
            $result="Invalid";
        }else{
            $result="NG";
        }
        return $result;
    }*/
?>

<table>
    <tr>
        <th>Subject Name</th>
        <th>Marks</th>
        <th>Grade</th>
    </tr>   
    <?php
    foreach($marks as $value){
        ?>
        <tr>
            <td><?=$value["Subject"]?></td>
            <td><?=$value["Marks"]?></td>
            <td><?=calculateGrade($value["Marks"])?></td>
    </tr>
    <?php    }
    ?>
</table>