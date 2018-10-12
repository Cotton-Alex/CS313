<?php
session_start();
#cart.php - A simple shopping cart with add to cart, and remove links
//---------------------------
//initialize sessions
//Define the products and cost
$product_image = array("<img src='https://cf.geekdo-images.com/small/img/rQjxEM5tXcxTEpZOP2sWh6lfrKc=/fit-in/200x150/pic3283110.png'>", "<img src='https://cf.geekdo-images.com/small/img/vUgVFW2ZjbqzxFozyqjMq8ITU4c=/fit-in/200x150/pic2630294.png'>", "<img src='https://cf.geekdo-images.com/small/img/8tpGZcSivddqAD3JHZzsqh47Rbw=/fit-in/200x150/pic4122337.jpg'>");
$products = array("Santorini", "Potion Explosion", "Go Cuckoo");
$amounts = array("28.99", "10.99", "2.99");

//Load up session
if (!isset($_SESSION["total"])) {
    $_SESSION["total"] = 0;
    for ($i = 0; $i < count($products); $i++) {
        $_SESSION["qty"][$i] = 0;
        $_SESSION["amounts"][$i] = 0;
    }
}

//---------------------------
//Reset
if (isset($_GET['reset'])) {
    if ($_GET["reset"] == 'true') {
        unset($_SESSION["qty"]); //The quantity for each product
        unset($_SESSION["amounts"]); //The amount from each product
        unset($_SESSION["total"]); //The total cost
        unset($_SESSION["cart"]); //Which item has been chosen
    }
}

//---------------------------
//Add
if (isset($_GET["add"])) {
    $i = $_GET["add"];
    $qty = $_SESSION["qty"][$i] + 1;
    $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
    $_SESSION["cart"][$i] = $i;
    $_SESSION["qty"][$i] = $qty;
}

//---------------------------
//Delete
if (isset($_GET["delete"])) {
    $i = $_GET["delete"];
    $qty = $_SESSION["qty"][$i];
    $qty--;
    $_SESSION["qty"][$i] = $qty;
    //remove item if quantity is zero
    if ($qty == 0) {
        $_SESSION["amounts"][$i] = 0;
        unset($_SESSION["cart"][$i]);
    } else {
        $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
    }
}
?>
<h2>List of All Products</h2>
<table>
    <tr>
        <th>Product Image</th>
        <th width="10px">&nbsp;</th>
        <th>Product</th>
        <th width="10px">&nbsp;</th>
        <th>Amount</th>
        <th width="10px">&nbsp;</th>
        <th>Action</th>
    </tr>
<?php
for ($i = 0; $i < count($products); $i++) {
    ?>
        <tr>
            <td><?php echo($product_image[$i]); ?></td>
            <td width="10px">&nbsp;</td>
            <td><?php echo($products[$i]); ?></td>
            <td width="10px">&nbsp;</td>
            <td><?php echo($amounts[$i]); ?></td>
            <td width="10px">&nbsp;</td>
            <td><a href="?add=<?php echo($i); ?>">Add to cart</a></td>
        </tr>
    <?php
}
?>
    <tr>
        <td colspan="5"></td>
    </tr>
    <tr>
        <td colspan="5"><a href="?reset=true">Reset Cart</a></td>
    </tr>
</table>
<?php
if (isset($_SESSION["cart"])) {
    ?>
    <br/><br/><br/>
    <h2>Cart</h2>
    <table>
        <tr>
            <th>Product Image</th>
            <th width="10px">&nbsp;</th>
            <th>Product</th>
            <th width="10px">&nbsp;</th>
            <th>Qty</th>
            <th width="10px">&nbsp;</th>
            <th>Amount</th>
            <th width="10px">&nbsp;</th>
            <th>Action</th>
        </tr>
    <?php
    $total = 0;
    foreach ($_SESSION["cart"] as $i) {
        ?>
            <tr>
                <td><?php echo( $products[$_SESSION["cart"][$i]] ); ?></td>
                <td width="10px">&nbsp;</td>
                <td><?php echo( $_SESSION["qty"][$i] ); ?></td>
                <td width="10px">&nbsp;</td>
                <td><?php echo( $_SESSION["amounts"][$i] ); ?></td>
                <td width="10px">&nbsp;</td>
                <td><a href="?delete=<?php echo($i); ?>">Delete from cart</a></td>
            </tr>
        <?php
        $total = $total + $_SESSION["amounts"][$i];
    }
    $_SESSION["total"] = $total;
    ?>
        <tr>
            <td colspan="7">Total : <?php echo($total); ?></td>
        </tr>
    </table>
        <?php
    }
    ?>