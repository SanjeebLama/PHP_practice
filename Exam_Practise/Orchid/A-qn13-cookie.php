<?php
    #Create a cookie that stores name and address of a person and 
    #validity of the cookie should be for 20days
    
    $cookie_name = "TonyStark";
    $cookie_address = "StarkInternational";
    setcookie($cookie_name,$cookie_address,time()+(86400*20),"/");
    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie Value not set";
    }
    else{
        echo "Cookie value set.<br/> cookie_name = ".$cookie_name."<br/>Cookie_address = ".$cookie_address;
    }
?>
