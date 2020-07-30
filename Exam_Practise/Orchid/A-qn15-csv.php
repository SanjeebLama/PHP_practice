<?php
    //wap to read and write a csv file.
    $list = array("Ram,Shyam","Sita,Gita");
    $myfile = fopen("new.csv","w");
    foreach($list as $line){
        fputcsv($myfile,explode(',',$line));
    }
    echo "Succesfully written on new.csv file <br/>";
    fclose($myfile);
    $myfile = fopen("new.csv","r") or die("Cannot open file");
    echo"Content of csv file : <br/>";
    while(!feof($myfile)){
        print_r(fgetcsv($myfile));
        echo "<br/>";
    }
    fclose($myfile);

?>