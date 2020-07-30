<?php
    #wap which accepts username and password as argument and validate the arguments 
    #username need not start with number
    #password must contain atleast one uppercase alphabet and number
    echo "
    <form method='post' action='" . $_SERVER['PHP_SELF'] . "' >
    <h1>Form</h1> <br/>
    Username : <input type= 'text' name ='uname'/> <br/>
    Password : <input type ='text' name = 'pword' /> <br/>
    <input type = 'submit' name = 'Submit' />  

    </form>
    ";

    $uname = $_POST['uname'];
    $pword = $_POST['pword'];
    $uppercase = preg_match('@[A-Z]@',$pword); //validate uppercase
    $number = preg_match('@[0-9]@',$pword); // number
    //$specialCharacter = preg_match('@[^\w]@,$pword'); 
    
    if($uname[0] > 0 ){
        echo "Username mustnot start with number";
    }
    else if (!$uppercase||!$number){
        echo "Password must contain atleast one uppercase aplhabet and number.";
    }
    else {
        echo "All condition validated";
    }


?>