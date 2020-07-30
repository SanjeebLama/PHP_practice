<?php
//  wap to create connection with server
    $con = mysqli_connect("localhost","root","","phpDB");
    if(!$con){
        die("Sorry ! connection failed".mysqli_error());
    }
    else{
        echo " !!! Connection Successfully!!!";
    }

?>