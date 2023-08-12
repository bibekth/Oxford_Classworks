<div class="whole">
<?php
    $aayusha=["name"=>"AAYUSHA CHETTRI","dob1"=>"2059-09-29","dob2"=>"2003-1-13","reg"=>"774815016","sn"=>"14802038","class"=>"XI","year1"=>"2076 B.S.","year2"=>"2020 A.D."];
    $grade=[
        ["S.CODE"=>"002","SUBJECTS"=>"Compulsory English","CREDIT HOUR"=>4.69,"GRADE POINT"=>3.60,"REMARKS"=>"","group"=>"english"],
        ["S.CODE"=>"110","SUBJECTS"=>"Physics (TH)","CREDIT HOUR"=>4.69,"GRADE POINT"=>3.60,"REMARKS"=>"","group"=>"physics"],
        ["S.CODE"=>"111","SUBJECTS"=>"Physics (PR)","CREDIT HOUR"=>1.56,"GRADE POINT"=>4.00,"REMARKS"=>"","group"=>"physics"],
        ["S.CODE"=>"112","SUBJECTS"=>"Chemistry(TH)","CREDIT HOUR"=>4.69,"GRADE POINT"=>4.00,"REMARKS"=>"","group"=>"chemistry"],
        ["S.CODE"=>"113","SUBJECTS"=>"Chemistry(PR)","CREDIT HOUR"=>1.56,"GRADE POINT"=>4.00,"REMARKS"=>"","group"=>"chemistry"],
        ["S.CODE"=>"002","SUBJECTS"=>"Mathematics","CREDIT HOUR"=>4.69,"GRADE POINT"=>3.20,"REMARKS"=>"","group"=>"maths"],
        ["S.CODE"=>"002","SUBJECTS"=>"Biology(TH)","CREDIT HOUR"=>4.69,"GRADE POINT"=>3.60,"REMARKS"=>"","group"=>"bio"],
        ["S.CODE"=>"002","SUBJECTS"=>"Biology(PR)","CREDIT HOUR"=>1.56,"GRADE POINT"=>4.00,"REMARKS"=>"","group"=>"bio"]
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
<div class="upperbody">
        <div class="logo">
            <img src="official.png" alt="logo">
        </div>
        <div class="title">
            <p id="title"><b>OXFORD SECONDARY SCHOOL</b></p>
            <p id="address">GAINDAKOT-2, NAWALPARASI</p>
        </div>
</div>
    <div class="intropart">
        <p id="middle"><b><u>GRADE SHEET</u></b></p>
        <p id="name_dis">THE FOLLOWING ARE THE GRADE(S) OBTAINED BY: <b><?=$aayusha["name"]?></b></p>
        <p id="dob">DATE OF BIRTH: <b><?=$aayusha["dob1"]?></b> B.S. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<?=$aayusha["dob2"]?> A.D.)</p>
        <p id="reg">Registration: <b><?=$aayusha["reg"]?></b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;SYMBOL NO: <b><?=$aayusha["sn"]?></b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;CLASS: <b><?=$aayusha["class"]?></b></p>
        <p id="year">IN ANNUAL EXAMINATION CONDUCTED BY SCHOOL IN: <b><?=$aayusha["year1"]?> &nbsp(<?=$aayusha["year2"]?>)</b> ARE GIVEN BELOW.</p>
    </div>

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
            <tr>
                <td></td>
                <th style="text-align:right;">TOTAL</th>
                <td></td>
                <th colspan="4" style="text-align:right;">GRADE POINT AVERAGE(GPA)</th>

            </tr>
</table>
<br><br><br><br>
<p style="padding-left:1vw;">PREPARED BY:</p>
<br><br>
<div class="lowerpart">
    <div class="checked">
    <p>....................</p>
    <p><b>CHECKED BY</b></p>
    <p style="margin-top:-0.5vw;"><b>CLASS TEACHER</b></p>
    </div>
    <div class="principal">
        <p>....................</p>
        <p><b>PRINCIPAL</b></p>
    </div>
</div>
<p style="padding-left:1vw;">DATE OF ISSUE: <i>2021-07-10</i></p>
<div class="footer">
    <p>NOTE: ONE CREDIT HOUR EQUALS 32 CLOCK HOURS</p>
    <p>TH= THEORY &emsp;&emsp;&emsp;&emsp; PR= PRACTICAL</p>
    <p>ABS= ABSENT &emsp;&emsp;&emsp;&emsp; W= WITHHELD</p>
    <p> # Means a student has completed in the second attempt.</p>
</div>
</div>


<style type="text/css">
body{
    font-family: serif;
    margin-top: 3vw;
    width:52vw;
    line-height:6px;
}
.title{
    color: black;
    text-align: center;
    padding-left:4vw;
}
.whole{
    border: 1px black;
    border-width: 5px;
    border-style: double;
    margin-left:15vw;
}
#title{
    font-size: 30px;
    margin-bottom: 0vw;
}
#middle{
    text-align: center;
}
.upperbody{
    margin-bottom: 2vw;
    display: flex;
}
.intropart{
    margin: 1vw;
}
img{
    width: 5vw;
    margin: 0.5vw;
}
table{
    padding-left:1vw;
    margin-bottom:3vw;
    border-spacing:0vw;
    width:50vw;
    border-left:0vw;
}
.lowerpart{
    display:flex;
    margin-top:1vw;
}
.checked{
    padding-left:2vw;
    margin-right:24vw;
    text-align:center;
}
.principal{
    display:right;
}
.footer{
    border-top:1px solid black;
    padding-left:1vw;
}
.whole{
    margin:auto;
    width:100%;
    margin-left:40%;
}

</style> 