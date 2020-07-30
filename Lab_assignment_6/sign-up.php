<?php
    // sign-up code
    echo"
    <h1>Form</h1>
    <form action='".$_SERVER['PHP_SELF']."' method='post'>
      Username: <input type='text' name='uname'/> <br/>
      Password : <input type='text' name = 'password'/><br/>
      Address: <input type='text' name='address'/> <br/>
      Gender: <input type = 'radio' name = 'gender' value = 'male'>Male
      <input type = 'radio' name = 'gender' value = 'male'>Female <br/>
      DOB : <input type='text' name = 'DOB'/><br/>
      <input type='submit' value='Submit' />
    </form>
    "; 
    
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $DOB = $_POST['DOB'];
    $con = mysqli_connect("localhost","root","","test");
    $sql = "INSERT INTO logininfo(Usern,Password,Address,Gender,DOB)
     VALUES('".$uname."','".$password."','".$address."','".$gender."','".$DOB."')";
    if(mysqli_query($con,$sql)){
        echo "!! Account Created Succesfully"."<a href='sign-in.php'>Login?";
        
    }
    else{
        echo "Error".mysqli_error($con);
    }
   
?>