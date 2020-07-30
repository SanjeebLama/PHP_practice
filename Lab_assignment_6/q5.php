<?php
//wap to insert into a record in database
    $con = mysqli_connect("localhost","root","","phpdb");
    $sql = "INSERT INTO Student(FirstName,LastName,Phone,Email)
    VALUES('Tony','Stark','9090909090','tonystark@avenger.com')";

    if(mysqli_query($con,$sql)){
        echo "!!! New Record Created !!!";
    }else{
        echo"Errors: ".$sql."<br/>".msqli_errors($con);
    }
    mysqli_close($con);

?>