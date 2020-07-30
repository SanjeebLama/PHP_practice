<?php
#wap to read name, address, email, age, sex from database and display them. (Assume necessary db and db table)
    $con = mysqli_connect("localhost","root","","phpdb");
    $sql = "SELECT * FROM student";
    $retval = mysqli_query($con,$sql);
    if(!$retval)   
    {
    die('Could not get data: ' . mysqli_error($con));
    }
    else{
        echo "<table border = '5px'>
        <tr>
            <th>S_ID  </th>
            <th>FirstName </th>
            <th>LastName </th>
            <th>Phone </th>
            <th>Email </th>
            
        </tr>
        
        ";
        while($row = mysqli_fetch_assoc($retval)){
            echo " <tr>
            <td> ".$row['sId']."</td>";
            echo "<td>".$row['FirstName']."</td>";
            echo "<td>".$row['LastName']."</td>";
            echo "<td>".$row['Phone']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    mysqli_close($con);
?>

    