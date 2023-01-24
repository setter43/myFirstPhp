<!DOCTYPE html>
<html>

    <?php include('templates/header.php'); ?>

    <section class="container grey-text">
        <h4 class="center">Add a Stock Item</h4>
        <form class="white" action="addStock.php" method="POST">
            <label>Item Name</label>
            <input type="text" name="item_name">
            <label>Item Price</label>
            <input type="text" name="item_price">
            <label>Size</label><br>
                <input type="checkbox" id="small" name="small" value="S">
                <label for="small"> Small</label>
                <input type="checkbox" id="medium" name="medium" value="M">
                <label for="medium"> Medium</label>
                <input type="checkbox" id="large" name="large" value="L">
                <label for="large"> Large</label>
            <label>Item Quantity</label>
            <input type="text" name="item_quantity">
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-1">
            </div>
    </section>
    
    <?php include('templates/footer.php'); ?>

</html>