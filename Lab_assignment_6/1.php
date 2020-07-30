<?php
    // wap to set default values in the form
    echo "
    <form method = 'post' action = '$_SERVER[PHP_SELF]'>
    username : <input type = 'text' name = 'uname' value = '".htmlentities($default)"'
    
    
    ";

?>