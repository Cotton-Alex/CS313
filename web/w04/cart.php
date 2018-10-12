<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Burley Bob's Big Board Game Blowout!</title>
        <?php include "../mod/head.php"; ?>
    </head>
    <body>
        <header id="page_header">
            <?php include "../mod/header.php"; ?>
        </header>
        <div class="container">
            <?php
            session_start();
            
            $url = 'cart.php';
#cart.php - A simple shopping cart with add to cart, and remove links
//---------------------------
//initialize sessions
//Define the products and cost
            $product_image = array("<img src='https://cf.geekdo-images.com/small/img/rQjxEM5tXcxTEpZOP2sWh6lfrKc=/fit-in/200x150/pic3283110.png'>", "<img src='https://cf.geekdo-images.com/small/img/vUgVFW2ZjbqzxFozyqjMq8ITU4c=/fit-in/200x150/pic2630294.png'>", "<img src='https://cf.geekdo-images.com/small/img/8tpGZcSivddqAD3JHZzsqh47Rbw=/fit-in/200x150/pic4122337.jpg'>", "<img src='https://cf.geekdo-images.com/small/img/cO-X3SmPeGLkirB1fcLxKgGCxeI=/fit-in/200x150/pic3355171.jpg'>");
            $games = array("Santorini", "Potion Explosion", "Go Cuckoo", "Rhino Hero: Super Battle");
            $amounts = array("28.99", "30.49", "19.99", "33.33");

//Load up session
            if (!isset($_SESSION["total"])) {
                $_SESSION["total"] = 0;
                for ($i = 0; $i < count($games); $i++) {
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
                header("Location: $url");
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
            
            
            
            
            
            
            
            
            
            
            
            
            
                <tr>
                    <td colspan="5"></td>
                </tr>
                <tr>
                    <td colspan="5"><a href="cart.php">Reset Cart</a></td>
                </tr>
            </table>
            <?php
            if (isset($_SESSION["cart"])) {
                ?>
                <br/><br/><br/>
                <h2>Burley Bob's Big Board Game Cart!</h2>
                <table>
                    <tr>
                        <th>Product Image</th>
                        <th width="10px">&nbsp;</th>
                        <th>Product</th>
                        <th width="10px">&nbsp;</th>
                        <th>Price</th>
                        <th width="10px">&nbsp;</th>
                        <th>Qty</th>
                        <th width="10px">&nbsp;</th>
                        <th>Total</th>
                        <th width="10px">&nbsp;</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $total = 0;
                    foreach ($_SESSION["cart"] as $i) {
                        ?>
                        <tr>
                            <td><?php echo($product_image[$i]); ?></td>
                            <td width="10px">&nbsp;</td>
                            <td><?php echo( $games[$_SESSION["cart"][$i]] ); ?></td>
                            <td width="10px">&nbsp;</td>
                            <td><?php echo($amounts[$i]); ?></td>
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
            </form>
        </div>
    </body>
</html>