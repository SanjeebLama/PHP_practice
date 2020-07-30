<?php
/*
How associative array and indexed array is created? Store both array content in file as list.
*/
$IndexList = array("Index","Array","Content");
$myfile = fopen("NewFile.txt","w");
file_put_contents($myfile,$IndexList);
$Assoc = array(
    "1" =>"assoc",
    "2"=>"array"
);

foreach ($Assoc as $string) {
    fwrite($myfile, $string);
    $stringbreak = "\n";
    fwrite($myfile, $stringbreak);
}

fclose($myfile);
?>