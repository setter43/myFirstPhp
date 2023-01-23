<?php

    //Products range
    $sportsProducts = [
        ['name'=>'Football', 'price' => 10], 
        ['name'=>'Basketball', 'price' => 15],
        ['name'=>'Tennis Ball', 'price' => 5],  
        ['name'=> 'Golf Ball', 'price' => 2 ]
    ];

    $sportsClothing =[
        ['name'=>'Football Shirt', 'price' => 20], 
        ['name'=>'Basketball Shorts', 'price' => 25],
        ['name'=>'Tennis Skirt', 'price' => 15],  
        ['name'=> 'Golf Shirt', 'price' => 12 ]
    ];

    //function applies discount to chosen range of products
    function discount($saleRange){
        echo 'On Sale!<br>';
        foreach($saleRange as $product){
            $product['price'] = $product['price'] * 0.8;
            echo $product['name'] . ' now costs £' . $product['price'] . '<br>';
        }
        echo'<br>';
    }

    discount($sportsProducts);
    discount($sportsClothing);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Shop</title>
</head>
<header>
    <h1>Chips Sports Shop</h1>
</header>
<body>
    
</body>
</html>