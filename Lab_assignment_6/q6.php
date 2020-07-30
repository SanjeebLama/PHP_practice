<?php
//wap to insert into a record in database
    $con = mysqli_connect("localhost","root","","phpdb");
    $sql = "INSERT INTO Student(FirstName,LastName,Phone,Email)
    VALUES('Keaanu','Reaves','1010101010','keanu@wick.com')";

    $sql == "INSERT INTO Student(FirstName,LastName,Phone,Email)
    VALUES('John','Wick','0101010101','John@wick.com')";
    

    if(mysqli_multi_query($con,$sql)){
        echo "!!! Multiple Record Inserted !!!";
    }else{
        echo"Errors: ".$sql."<br/>".msqli_errors($con);
    }
    mysqli_close($con);

?>