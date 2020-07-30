<?php
echo "
<form method = 'post' action = ' " . $_SERVER['PHP_SELF'] ." ' >
<h1> Form</h1> <br/> 
Password : <input type = 'text' name = 'pword'/> <br/>

 
<input type = 'submit' name = 'Submit' />

</form>
";

$pword = $_POST['pword'];
echo " $pword";
$con = mysqli_connect("localhost","root","","phpdb");
$sql = "INSERT INTO user('Password') VAULES('".$pword."')";

if(mysqli_query($con,$sql)){
    echo "Account Created";
}
else{
    echo "Error".mysqli_error($con);
}

?>