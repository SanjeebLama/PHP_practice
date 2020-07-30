<!--10 column alternatively -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $col_color= array('red','black');
    $color_index = 0;
    echo "<table border = '1'>";
    for($i=1;$i<10;$i++){
        
        echo "<tr bgcolor=".col_color[$color_index]." '>";
          echo " <td>column $i</td> ";
           
        $color_index = 1-$color_index;

    }
       echo'</table>';
    ?>
</body>
</html>