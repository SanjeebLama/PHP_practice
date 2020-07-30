<!-- //wap to create a form that accepts name, email, phone number and radio button for gender,
    //validate required fields and the name must be 6 letters long. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $num = $_POST['num'];
    $gender = $_POST['gender'];

    if(strlen($name) ==0 || strlen($email) ==0 || strlen($num) ==0 || strlen($gender) ==0){
        echo "Fields must not be empty";
    }
    else if(strlen($name) < 6 ){
        echo "Name length must be greater than 6 ";
    }


    ?>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        Name : <input type="text" name = "name"> <br/>
        Email : <input type="text" name = "email"> <br/>
        Phone number : <input type="number" name = "num"> <br/>
        Gender: <br/> <input type="radio" name="gender" > Male <input type="radio" name="gender"> Female
        <br/><br/>
        <input type="submit" value="Submit"/>
    </form>
</body>
</html>

