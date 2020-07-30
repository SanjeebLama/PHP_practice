<?php
/*create web form to collect 15 float data from audience.
Write php function to retrieve those 15 float data and display sum and average of them 
in tabular format */
echo "
    <form method = 'post' action = ' " . $_SERVER['PHP_SELF'] ." ' >
    <h1> Enter 15 float number </h1> <br/> 

    <input type = 'float' name = 'input[]'/> <br/>
    <input type = 'float' name = 'input[]'/> <br/>
    <input type = 'float' name = 'input[]'/> <br/>
    <input type = 'float' name = 'input[]'/> <br/>
     
    <input type = 'submit' name = 'Submit' />

    </form>
";
Display();
function Display(){

        $FloatArray = $_POST['input'];
        echo "Values are : <br/>";
        foreach($FloatArray as $value ){
            $sum = $sum + $value;
            echo "$value <br/>";
        
        }
        $avg = ($sum/4);
        echo"<table border = '3px' > 
        <tr> 
            <td> Sum </td>
            <td>$sum </td>
        </tr>
        <tr>
            <td>Average </td>
            <td> $avg </td>
        <tr/> 
        </table>";
}

?>