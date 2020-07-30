<?php
    $date = time();
    $day = date("D",$date);
    switch($day){
        case "Sun":
        echo "Sunday";
        break;
        case "Mon":
        echo "Monday";
        break;
        case "Tue":
        echo "Tuesday";
        break;
        case "Wed":
        echo "Wednesday";
        break;
        case "Thu":
        echo"Thursday";
        break;
        case "Fri":
        echo "Friday";
        break;
        case "Sat":
        echo"Saturday";
        break;

    }
     


?>