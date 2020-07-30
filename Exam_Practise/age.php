<?php
    $today = time();
    $dob = mktime(0,0,0,12,30,1998);
    $age = intval($today-$dob)/31557600;
    echo "$age";

?>