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
				<h2>Burley Bob's Big Board Game Checkout!</h2>

				<div>
					<form action="order.php" method="post" id="form">
						<table>
							<tr>
								<td>
									<label>First Name:</label>
									<input type="text" name="first_name"></input>
								</td>
								<td>
									<label>Last Name:</label>
									<input type="text" name="last_name"></input>
								</td>
							</tr>
							<tr>
								<td>
									<label>Street Address:</label>
									<input type="text" name="street_address"></input>
								</td>
								<td>
									<label>City:</label>
									<input type="text" name="city"></input>
								</td>
								<td>
									<label>State:</label>
									<input type="text" name="state"></input>
								</td>
								<td>
									<label>Zip:</label>
									<input type="text" name="zip"></input>
								</td>
							</tr>
						</table>
						<table>
							<tr>
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
									<td ><?php echo( $games[$_SESSION["cart"][$i]] ); ?></td>
									<td width="10px">&nbsp;</td>
									<td><?php echo($amounts[$i]); ?></td>
									<td width="10px">&nbsp;</td>
									<td><?php echo( $_SESSION["qty"][$i] ); ?></td>
									<td width="10px">&nbsp;</td>
									<td><?php echo( $_SESSION["amounts"][$i] ); ?></td>
									<td width="10px">&nbsp;</td>
								</tr>
								<?php
								$total = $total + $_SESSION["amounts"][$i];
							}
							$_SESSION["total"] = $total;
							?>
						</table>
						<p class="offset-by-seven two columns" >Total : <?php echo($total); ?></p>
						<a class="button offset-by-one-third three columns" href="cart.php">Back to Cart</a>
						<input class="button offset-by-one-thirds two columns" type="submit" name="submit" value="Submit">
					</form>
					<?php
				}
				?>
			</div>
	</body>
</html>