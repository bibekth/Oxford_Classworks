<style type="text/css">
    .container{
        display:flex;
        flex-wrap:wrap;
        width:26vw;
        height:27vw;
    }
    .white{
        background-color:white;
        border:1px solid black;
        border-width: 1px;
        width: 3vw;
        height: 3vw;
    }
    .black{
        background-color:black;
        border:1px solid white;
        border-width: 1px;
        width: 3vw;
        height: 3vw;
    }
</style>
<div class="container">
<?php
    for($i=1;$i<=8;$i++){
        for($j=1;$j<=8;$j++){
            $val = $i + $j;
            if($val%2==0){
                echo "<div class='white'></div>";
            }else{
                echo "<div class='black'></div>";
            }
        }
    }
?>
</div>
