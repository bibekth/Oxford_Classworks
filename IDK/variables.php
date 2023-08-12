
<?php
//Write a script to calculate grade of one subject using user defined function.

    /*$mark=70;

    function checkGPA($mark){
        if($mark>=90 && $mark<=100){
            echo "A+";
        }
        elseif($mark>=80 && $mark<90){
            echo "A";
        }
        elseif($mark>=70 && $mark<80){
            echo "B+";
        }
        elseif($mark>=60 && $mark<70){
            echo "B";
        }elseif($mark>=50 && $mark<60){
            echo "C+";
        }elseif($mark>=45 && $mark<50){
            echo "C";
        }elseif($mark>=35 && $mark<45){
            echo "D";
        }elseif($mark>100){
            echo "Invalid";
        }else{
            echo "NG";
        }
    }
    checkGPA($mark);*/

    function calculateGrade($mark){
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
    }
    //echo calculateGrade(48);
    $g=calculateGrade(70);
    //echo "$g";  
?>