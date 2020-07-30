<?php
 $con = mysqli_connect("localhost","root","","phpdb");

 $sql = "INSERT INTO user('Username') VAULES('".$uname."')";
 if(mysqli_query($con,$sql)){
       
    }


    echo "
<form method = 'post' action = ' qn5-MasterPage.php ' >
<h1> Form</h1> <br/> 
Username : <input type = 'text' name = 'uname'/> <br/>

 
<input type = 'submit' name = 'next' />

</form>
";

?>
