<?php
echo "
    <h1>Login Form</h1>
<form action='".$_SERVER['PHP_SELF']."' method='post'>
  Username: <input type='text' name='uname'/> <br/>
 Password: <input type='text' name='password'/> <br/>
  
  <input type='submit' value='Submit' />
</form>
";
$con = mysqli_connect("localhost","root","","test");
$sql = "SELECT * FROM logininfo";

$uname = $_POST['uname'];
$password = $_POST['password'];

$retval = mysqli_query($con,$sql);

    $row=mysqli_fetch_assoc($retval);
    
        if($uname != $row['Usern'] && $password != $row['Password'])
        {
            echo "!! Invalid Username or Password !!";
        }
        else{
            echo"Your are logged in";
        }
    
mysqli_close($con);
?>