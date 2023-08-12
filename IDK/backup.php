<?php

?>

<?php
    $aayusha=[
        ["name"=>"AAYUSHA CHETTRI","dob1"=>"2059-09-29","dob2"=>"2003-1-13","reg"=>"774815016","sn"=>"14802038","class"=>"XI"]
    ];
    $grade=[
        ["S.CODE"=>"002","SUBJECTS"=>"Compulsory English","CREDIT HOUR"=>4.69,"GRADE POINT"=>3.60,"REMARKS"=>""],
        ["S.CODE"=>"110","SUBJECTS"=>"Physics (TH)","CREDIT HOUR"=>4.69,"GRADE POINT"=>3.60,"REMARKS"=>""],
        ["S.CODE"=>"111","SUBJECTS"=>"Physics (PR)","CREDIT HOUR"=>1.56,"GRADE POINT"=>4.00,"REMARKS"=>""],
        ["S.CODE"=>"112","SUBJECTS"=>"Chemistry(TH)","CREDIT HOUR"=>4.69,"GRADE POINT"=>4.00,"REMARKS"=>""],
        ["S.CODE"=>"113","SUBJECTS"=>"Chemistry(PR)","CREDIT HOUR"=>1.56,"GRADE POINT"=>4.00,"REMARKS"=>""],
        ["S.CODE"=>"002","SUBJECTS"=>"Mathematics","CREDIT HOUR"=>4.69,"GRADE POINT"=>3.20,"REMARKS"=>""],
        ["S.CODE"=>"002","SUBJECTS"=>"Biology(TH)","CREDIT HOUR"=>4.69,"GRADE POINT"=>3.60,"REMARKS"=>""],
        ["S.CODE"=>"002","SUBJECTS"=>"Biology(PR)","CREDIT HOUR"=>1.56,"GRADE POINT"=>4.00,"REMARKS"=>""]
    ];
    function gradedivision($grade){
        if($grade>3.6 && $grade<=4.0){
            echo "A+";
        }elseif($grade>3.2 && $grade<=3.6){
            echo "A";
        }elseif($grade>2.8 && $grade<=3.2){
            echo "B+";
        }elseif($grade>2.4 && $grade<=2.8){
            echo "B";
        }elseif($grade>1.6 && $grade<=2.4){
            echo "C+";
        }elseif($grade>1.2 && $grade<=1.6){
            echo "C";
        }elseif($grade<=1.2){
            echo "F";
        }else{
            echo "INVALID";
        }
    }
?>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Sheet</title>
</head>
<body>
    <form style="border: 5px black;">
    <div class="upperbody">
        <div class="logo">
            <img src="official.png" alt="logo">
        </div>
        <div class="title">
            <p id="title"><b>OXFORD SECONDARY SCHOOL</b> </p>
            <p id="address">GAINDAKOT-2, NAWALPARASI</p>
        </div>
    </div>
    <div class="intropart">
        <p id="middle"><b><u>GRADE SHEET</u></b></p>
        <p id="name_dis">THE FOLLOWING ARE THE GRADE(S) OBTAINED BY:<b>AAYUSHA CHHETRI</b></p>
        <p id="dob">DATE OF BIRTH: <b>2059-09-29</b>B.S. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(2003-1-13 A.D.)</p>
        <p id="reg">Registration: <b>774815016</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;SYMBOL NO: <b>14802038</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;CLASS: <b>XI</b></p>
        <p id="year">IN ANNUAL EXAMINATION CONDUCTED BY SCHOOL IN: <b>2076 B.S. &emsp;(2020 A.D.)</b> ARE GIVEN BELOW.</p>
    </div>
    <div class="gradesheet">
        
    </div>
    <div class="lowerbody">

    </div>
    <div class="footer">

    </div>
</form>
</body>
</html>
<table border="1">
            <tr>
                <th>S.CODE</th>
                <th>SUBJECTS</th>
                <th>CREDIT HOUR</th>
                <th>GRADE POINT</th>
                <th>GRADE</th>
                <th>FINAL GRADE</th>
                <th>REMARKS</th>
            </tr> 
            <?php
            foreach($grade as $value){
                ?>
                <tr>
                    <td><?=$value["S.CODE"]?></td>
                    <td><?=$value["SUBJECTS"]?></td>
                    <td><?=$value["CREDIT HOUR"]?></td>
                    <td><?=$value["GRADE POINT"]?></td>
                    <td><?=gradedivision($value["GRADE POINT"])?></td>
                    <td></td>
                    <td><?=$value["REMARKS"]?></td>
            <?php }
            ?>
        </table>


<style type="text/css">
    body{
    font-family: 'Times New Roman', Times, serif;
    margin-top: 3vw;
    margin-left: 20%;
    margin-right: 20%;
}
.title{
    color: black;
    text-align: center;
}
form{
    background-color: burlywood;

}
#title{
    font-size: 30px;
    margin-bottom: -1vw;
}
#middle{
    text-align: center;
}
.upperbody{
    margin-bottom: 2vw;
    display: flex;
}
.intropart{
    margin: 2vw;
}
img{
    width: 5vw;
    margin: 0.5vw;
}
</style>