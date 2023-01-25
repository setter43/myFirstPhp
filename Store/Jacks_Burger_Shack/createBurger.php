<?php

    if(isset($_POST['submit'])){

        $email = $title = $ingredients = '';
        
        // check email
        if(empty($_POST['email'])){
            echo 'An email is required <br />';
        } else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo 'Email must be a valid email address <br />';
            }
        }

        // check title
        if(empty($_POST['burger_name'])){
            echo 'You must name the Burger <br />';
        } else{
            $title = $_POST['burger_name'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                echo 'Title must be letters and spaces only <br />';
            }
        }
        if(empty($_POST['burger_price'])){
            echo 'A price is required <br />';
        } else{
            $price = $_POST['burger_price'];
            //Check price is valid
            if(!preg_match('/^[0-9]+(\.[0-9]{1,2})?$/', $price)){
                echo 'Price must be a valid price <br />';
            }
            else{
                $price = '£'.$price;
            }
        }

        // check ingredients
        if(empty($_POST['burger_ingredients'])){
            echo 'At least one ingredient is required <br />';
        } else{
            $ingredients = $_POST['burger_ingredients'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
                echo 'Ingredients must be a comma separated list <br />';
            }
        }

    }

?>

<!DOCTYPE html>
<html>

    <!-- Includes the header file -->
    <?php include('templates/header.php'); ?>

    <section class="container grey-text">
        <h4 class="center">Create Burger</h4>
        <form class="white" action="createBurger.php" method="POST">
            <label>Your Email</label>
            <input type="text" name="email">
            <label>Burger Name</label>
            <input type="text" name="burger_name">
            <label>Burger Price</label>
            <input type="text" name="burger_price">
            <label>Burger Ingredients</label>
            <input type="text" name="burger_ingredients">
            <div class="center">
                <input type="submit" name="submit" value="Submit" class="btn brand z-depth-1">
            </div>
        </form>
    </section>
    
    <!-- Includes the footer file -->
    <?php include('templates/footer.php'); ?>

</html>