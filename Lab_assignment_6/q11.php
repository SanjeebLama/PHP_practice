<?php
    //IMPROVISE THIS
    //SIMILAR TO Q13
    //wap to fetch name address and phone number from database in a table.
    // before writing this program creates a database and inserts the above information manually
$con = mysqli_connect("localhost","root","","test");
$sql = "SELECT * FROM admin";


$retval = mysqli_query($con,$sql);
if(!$retval)
{
    die('Could not get data: ' . mysqli_error($con));
 }
 else{
    echo "
    <table border='2px'>
        <tr>
        <th>Name </th>
        <th>Password</th>
        </tr>
    ";
    while($row=mysqli_fetch_assoc($retval)){
        echo "<tr> <td>". $row['Username']."</td> <td>".$row['Password']."</td> </tr>";
    }
   echo"</table>";
}
mysqli_close($con);
?>