
<?php
//  wap to create a table
    $con = mysqli_connect("localhost","root","","phpDB");

    $sql = "CREATE TABLE Student(sId INT(6) AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(30) NOT NULL,
    LastName VARCHAR(30) NOT NULL,
    Phone VARCHAR(15),
    Email VARCHAR(30),
    reg_date TIMESTAMP
    )";
    if(mysqli_query($con,$sql)){
        echo " !!! Table Created sucessfully !!!";
    }
    else{
        echo "Error<br/>".mysqli_error($con);
    }
    mysqli_close($con);
?>