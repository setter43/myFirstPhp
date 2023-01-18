<?php

    //Creating Vars in PHP
    $firstName = 'John';
    $lastName = 'Doe';
    $age = 30;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP Site</title>
</head>
<body>
    
<h1>User Profile Page</h1>
<div>
    <!-- Reads from PHP and Displays-->
    <p><?php echo $firstName . ' ' . $lastName; ?></p>
    <p><?php echo $age; ?></p>
</div>

</body>
</html>