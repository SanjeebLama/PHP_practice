<?php
    #wap to insert into database :
    #table name: tbl_students -- field: id, name,address, phone, email
    
    $con = mysqli_connect("localhost","root","","phpdb");
    $sql = "INSERT INTO student
        VALUES('98','Tony Stark','Stark International','XXXXXXXXXX','star@avenger.com')
    ";

    if(mysqli_query($con,$sql)){
        echo "Data inserted succesfully";
    }
    else{
        echo"Error in inserting data in database table".mysqli_error($con);
    }
    mysqli_close($con);
?>