<?php
    //wap to swap variables without using third variable as passing argument to function.
    $a = 10;
    $b = 20;
    echo "Before swapping : <br/> value of a : ".$a."<br/> value of b : ".$b;
    function swap($a,$b){
        $a = $a + $b;
        $b = $a - $b;
        $a = $a -$b;
        echo "<br/>After swapping : <br/>";
        echo "Value of a : ".$a;
        echo "<br/> Value of b :".$b;

    }
    swap($a,$b);
?>