<?php
    #wap in php to create function named simpleinterest() that accepts three parameters principle,
    #time and interest and calculate simple interest. Give atleast two examples of PHP 
    
    function simpleinterest($principle, $time,$rate){
        $si = ($principle*$time*$rate)/100;
        echo "Simple interest of ".$principle."is : ".$si."<br/>";
    }
    simpleinterest(1000,2,7);
    simpleinterest(2000,3,12);
?>