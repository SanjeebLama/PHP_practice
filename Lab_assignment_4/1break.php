<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sanjeeb's break statement</title>
</head>
<body>
    <?php
        for($i = 0;$i<10;$i++){
            echo $i."</br>";
            if($i==5){
                break;
            }
        }

    ?>
</body>
</html>