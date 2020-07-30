<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <?php
        $fnum = $_POST['fnum'];
        $snum = $_POST['snum'];
        $operator = $_POST['operator'];
        $default = $_POST;
        switch($operator){
            case "+":
                $value = $fnum + $snum;
                echo "$value";
                break;
        }
    ?>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method = "post">
        <h1>Calculator</h1>
        1<sup>st</sup> Number : <input type="text" name="fnum" /> <br/> <br/>
        2<sup>nd</sup> Number : <input type="text" name="snum"  /> <br/> <br/>
        Operator : <input type="text" name="operator" /> <br/> <br/>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>