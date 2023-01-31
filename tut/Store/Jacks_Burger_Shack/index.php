<?php 

    //connect to DB
    //DB Details
    $host ='localhost';
    $username = 'Ben';
    $password = 'test1234';
    $dbName ='jacks_burgers';

    $conn = mysqli_connect($host, $username, $password, $dbName);

    //check connection
    if(mysqli_connect_errno()){
        //error msg
        echo 'ERROR : Connection </br>'. mysqli_connect_error();
    }
    else{
        echo 'connected to DB';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    
    <?php include('templates/header.php');?>

    <?php include('templates/footer.php') ?> 

</body>
</html>