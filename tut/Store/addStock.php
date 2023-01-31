<?php

    if(isset($_POST['submit'])){
        
        //Check form is filled out
        //Check item_name is filled out
        if(empty($_POST['item_name'])){
            echo 'Please fill in item_name <br/>';
        } else {
            echo htmlspecialchars($_POST['item_name']) .'<br/>';
        }
        //Check item_price is filled out
        if(empty($_POST['item_price'])){
            echo 'Please fill in item_price <br/>';
        } else {
            echo htmlspecialchars($_POST['item_price']).'<br/>';
        }
        //Check item_size is filled out
        if(empty($_POST['item_size'])){
            echo 'Please fill in item_size or package quantity <br/>';
        } else {
            echo htmlspecialchars($_POST['item_size']) .'<br/>';
        }
        //Check item_quantity is filled out
        if(empty($_POST['item_quantity'])){
            echo 'Please fill in Stock in take <br/>';
        } else {
            echo htmlspecialchars($_POST['item_quantity']) .'<br/>';
        }
    }

?>

<!DOCTYPE html>
<html>

    <!-- Includes the header file -->
    <?php include('templates/header.php'); ?>

    <section class="container grey-text">
        <h4 class="center">Add a Stock Item</h4>
        <form class="white" action="addStock.php" method="POST">
            <label>Item Name</label>
            <input type="text" name="item_name">
            <label>Item Price</label>
            <input type="text" name="item_price">
            <label>Size / Quantity</label>
            <input type="text" name="item_size">
            <label>Stock in take</label>
            <input type="text" name="Stock">
            <div class="center">
                <input type="submit" name="submit" value="Submit" class="btn brand z-depth-1">
            </div>
        </form>
    </section>
    
    <!-- Includes the footer file -->
    <?php include('templates/footer.php'); ?>

</html>