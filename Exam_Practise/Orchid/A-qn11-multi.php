<?php
    #make table using php. Store values in multidimensional array.
    $Lists = array(
        "1"=>array("Sid" => 1,
                   "Name" => "Ram",
                   "Address" => "kapan", 
                   "Phone" => "4123546"),
        "2" => array("Sid"=>2,
                    "Name" => "Shyam",
                    "Address" => "Paknajol",
                    "Phone" => "4265125"),
        "3" => array("Sid" => 3,
                    "Name" => "Sita",
                    "Address" => "Boduha",
                    "Phone" => "423658")
);


    echo "<table border = '4px' cellspacing='0'>
        <tr> 
            <th> Sid </th>
            <th> Name </th>
            <th> Address </th>
            <th> Phone </th>
        </tr>
    ";
    foreach($Lists as $list => $value){
        echo "<tr> <td>".$value["Sid"]."</td> <td>"
                        .$value["Name"]."</td> <td>"
                        .$value["Address"]."</td> <td>"
                        .$value["Phone"]."</td> </tr>";
    }
    

?>