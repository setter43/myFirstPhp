<?php

    $email = $title = $ingredients = $price = '';
    $errors = array('email'=>'', 'burger_name'=>'','burger_price'=>'','burger_ingredients'=>'');

    if(isset($_POST['submit'])){

        //$email = $title = $ingredients = '';
        
        // check email
        if(empty($_POST['email'])){
            $errors['email'] = 'An email is required <br />';
        } else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'Email must be a valid email address <br />';
            }
        }

        // check title
        if(empty($_POST['burger_name'])){
            $errors['burger_name'] = 'You must name the Burger <br />';
        } else{
            $title = $_POST['burger_name'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                $errors['burger_name'] = 'Title must be letters and spaces only <br />';
            }
        }
        if(empty($_POST['burger_price'])){
            $errors['burger_price'] = 'A price is required <br />';
        } else{
            $price = $_POST['burger_price'];
            //Check price is valid
            if(!preg_match('/^[0-9]+(\.[0-9]{1,2})?$/', $price)){
                $errors['burger_price'] = 'Price must be a valid price <br />';
            }
            else{
                $price = '£'.$price;
            }
        }

        // check ingredients
        if(empty($_POST['burger_ingredients'])){
            $errors['burger_ingredients'] = 'At least one ingredient is required <br />';
        } else{
            $ingredients = $_POST['burger_ingredients'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
                $errors['burger_ingredients'] = 'Ingredients must be a comma separated list <br />';
            }
        }

        if(array_filter($errors)){
            echo 'errors in the form';
        } else {
            header('Location: index.php');
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
            <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
            <div class='red-text'><?php echo $errors['email'] ?></div>
            <label>Burger Name</label>
            <input type="text" name="burger_name" value="<?php echo htmlspecialchars($title) ?>">
            <div class='red-text'><?php echo $errors['burger_name'] ?></div>
            <label>Burger Price</label>
            <input type="text" name="burger_price" value="<?php echo htmlspecialchars($price) ?>">
            <div class='red-text'><?php echo $errors['burger_price'] ?></div>
            <label>Burger Ingredients</label>
            <input type="text" name="burger_ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
            <div class='red-text'><?php echo $errors['burger_ingredients'] ?></div>
            <div class="center">
                <input type="submit" name="submit" value="Submit" class="btn brand z-depth-1">
            </div>
        </form>
    </section>
    
    <!-- Includes the footer file -->
    <?php include('templates/footer.php'); ?>

</html>