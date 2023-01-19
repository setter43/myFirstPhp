<?php
    //multi-dimensional array
    $pizzaMenu = [
        ['name'=>'Pepperoni', 'dietaryType' => 'Meat', 'Toppings' =>'Cheese & Pepperoni','price' => 3], 
        ['name='>'Hawaiian', 'dietaryType' => 'Meat', 'Toppings' =>'Cheese, Ham, pineapple','price' => 4],
        ['name'=>'Veggie', 'dietaryType' => 'Veggie', 'Toppings' =>'Cheese, Mushrooms, Olives, Onions, Peppers','price' => 2 ],  
        ['name'=> 'Vegan', 'dietaryType' => 'Vegan', 'Toppings' =>' Vegan Cheese, Mushrooms, Olives, Onions, Peppers','price' => 2 ]
    ];   
    
    //adds new pizza to array, Index [4]
    $pizzaMenu[] = ['name'=>'Meat Lovers', 'dietaryType' => 'Meat', 'Toppings' =>'Cheese, Pepperoni, Ham, Sausage','price' => 5];

    //search array for pizza with highest price get name and price
    $maxPrice = 0;
    $maxPricePizza = '';
    foreach($pizzaMenu as $pizza){
        if($pizza['price'] > $maxPrice){
            $maxPrice = $pizza['price'];
            $maxPricePizza = $pizza['name'];
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mario's Pizza</title>
</head>
<header>
    <h1>Mario's Pizza</h1>
</header>
<body>
    <div>
        <h2>My Pizza's</h2>
        <p>I have <?php echo count($pizzaMenu) ?> Pizza's on menu</p>

        <p>Our most expensive pizza is <?php echo $maxPricePizza?> costing £<?php echo $maxPrice?></p>
    </div>
</body>
</html>