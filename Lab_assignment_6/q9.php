<?php
    // make a form where there are several input fields like Name age address gender as radio button ,
    // DOB and all these data will be stored in database while clicking on SUbmit button
    // Assume your own detail for making a database
    $uname = $_POST['uname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $DOB = $_POST['DOB'];
    $con = mysqli_connect("localhost","root","","test");
    $sql = "INSERT INTO test(Name,Age,Address,Gender,DOB) 
    VALUES('".$uname."','".$age."','".$address."','".$gender."','".$DOB."')";
    if(mysqli_query($con,$sql)){
        echo "!! Data inserted";
    }
    else{
        echo "Error".mysqli_error($con);
    }
    echo"
    <h1>Form</h1>
    <form action='".$_SERVER['PHP_SELF']."' method='post'>
      Username: <input type='text' name='uname'/> <br/>
      Age : <input type='number' name = 'age'/><br/>
      Address: <input type='text' name='address'/> <br/>
      Gender: <input type = 'radio' name = 'gender' value = 'male'>Male
      <input type = 'radio' name = 'gender' value = 'male'>Female <br/>
      DOB : <input type='text' name = 'DOB'/><br/>
      <input type='submit' value='Submit' />
    </form>

    ";
?>
