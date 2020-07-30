<?php
#what is session
#IDK
    #how are session variables are handled in PHP
    session_start();
    $_SESSION['favcolor'] = "Blue";
    $_SESSION['favanimal'] = "Dog";

    echo "Session variables are : <br/>Fav Color :".$_SESSION['favcolor']."<br/>Fav Animal :".$_SESSION['favanimal'];


?>