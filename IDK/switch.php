<?php
    $a=7    ;
    switch($a){
        case 1:
            $a="SUNDAY";
            break;
        case 2:
            $a="MONDAY";
            break;
        case 3:
            $a="TUESDAY";
            break;
        case 4:
            $a="WEDNESDAY";
            break;
        case 5:
            $a="THURSDAY";
            break;
        case 6:
            $a="FRIDAY";
            break;
        case 7:
            $a="SATURDAY";
            break;
        default:
        $a="INVALID DAY HAHAHAHA";
    }
    echo "<h2>$a</h2>";
?>