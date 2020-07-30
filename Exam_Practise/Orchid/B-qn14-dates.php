<?php
    $date = time();
    $current_date = date("Y",$date);
    $date1 = mktime(0,0,0,12,30,1998);
    $actualDate = date("Y",$date1);

    $age = $current_date - $actualDate;
    echo" Current Date : ".$current_date;
    echo"<br/> Sub Date : ".$actualDate;

    echo "<br/>Difference : ".$age;


?>