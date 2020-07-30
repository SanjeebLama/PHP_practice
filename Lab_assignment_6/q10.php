<?php
//wap where user will enter username and pasword if the value is correct display some NCCS info
// else invalid username or password
$con = mysqli_connect("localhost","root","","test");
$sql = "SELECT * FROM admin";

$uname = $_POST['uname'];
$password = $_POST['password'];

$retval = mysqli_query($con,$sql);
// if(!$retval)
// {
//     die('Could not get data: ' . mysqli_error($con));
//  }
//  else{
    $row=mysqli_fetch_assoc($retval);
    
        if($uname != $row['Username'] && $password != $row['Password'])
        {
            echo "Username or Password not correct";
        }
        else{
            echo"NCCS refers to National College of Computer Studies";
        }
    
// }
echo "
    <h1>Login Form</h1>
<form action='".$_SERVER['PHP_SELF']."' method='post'>
  Username: <input type='text' name='uname'/> <br/>
 Password: <input type='text' name='password'/> <br/>
  
  <input type='submit' value='Submit' />
</form>
";
mysqli_close($con);
?>