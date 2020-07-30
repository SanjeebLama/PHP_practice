
<?php
//  wap to create a database
    $con = mysqli_connect("localhost","root","","");
    $sql = "CREATE DATABASE phpDB";
    if(mysqli_query($con,$sql)){
        echo " !!! Database created sucessfully !!!";
    }
    else{
        echo "Error<br/>".mysqli_error($con);
    }
    mysqli_close($con);
?>