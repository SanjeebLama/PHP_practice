<?php
//wap to delete  a record from database
    $con = mysqli_connect("localhost","root","","phpdb");
    $sql = "DELETE FROM Student WHERE sId = '2'";

    if(mysqli_query($con,$sql)){
        echo "!!!  Record Deleted !!!";
    }else{
        echo"Errors: ".$sql."<br/>".msqli_errors($con);
    }
    mysqli_close($con);

?>