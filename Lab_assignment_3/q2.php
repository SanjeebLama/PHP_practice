<?php
    $d = date($D);
    switch($d){
        case 'Sun':
            echo "Today is Sunday";
            break;
        case 'Mon':
            echo 'Today is Monday';
            break;
        case 'Tues':
            echo 'Today is Tuesday';
            break;
        default:
             echo 'NO day';
           break;
        } 
?>