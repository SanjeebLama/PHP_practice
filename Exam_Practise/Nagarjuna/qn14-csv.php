<?php
    $myfile = fopen("new.csv","w") or die("Unable to open file");
    $list = array("Tony Stark, Iron Man","Keanu Reaves, John Wick");
    foreach ($list as $value) {
        fputcsv($myfile,explode(',',$value));
    }
    echo "Succesfully written on csv file";
fclose($myfile);
?>