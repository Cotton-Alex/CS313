<?php session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Burley Bob's Big Board Game Blowout!</title>
		<?php
		include "../mod/head.php";
		include "cash_register.php";
		?>
    </head>
    <body>
        <header id="page_header">
			<?php include "../mod/header.php"; ?>
        </header>
        <div class="container">
			<?php
			if (isset($_SESSION["cart"])) {
				?>
				<br/>
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
						<th></th>
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
							<td><a href="?add=<?php echo($i); ?>"><img class="addRemove" src="https://png.icons8.com/metro/20/1EAEDB/plus-math.png"></a>
								<a class="addRemove" href="?delete=<?php echo($i); ?>"><img src="https://png.icons8.com/material-rounded/20/1EAEDB/minus.png"></a></td>
						</tr>
						<?php
						$total = $total + $_SESSION["amounts"][$i];
					}
					$_SESSION["total"] = $total;
					?>
				</table>
				<p class="offset-by-ten two columns" >Total : <?php echo($total); ?></p>
				<a class="button offset-by-one-third three columns" href="products.php">Continue Shopping</a>
				<a class="button offset-by-one-thirds two columns" href="checkout.php">Checkout</a>
				<?php
			}
			?>
            </form>
        </div>
    </body>
</html>