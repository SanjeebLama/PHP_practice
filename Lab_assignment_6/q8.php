<?php
//wap to update  a record from database
    $con = mysqli_connect("localhost","root","","phpdb");
    $sql = "UPDATE Student SET FirstName = 'Tom' WHERE sId = '3'";

    if(mysqli_query($con,$sql)){
        echo "!!!  Record Updated !!!";
    }else{
        echo"Errors: ".$sql."<br/>".msqli_errors($con);
    }
    mysqli_close($con);

?>