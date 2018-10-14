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
			<br/>
			<h2>Burley Bob's Big Board Game Order!</h2>
			<div>
				<p class="offset-by-three columns">Ship to:</p>
				<div>
					<div class="offset-by-three columns"><?php echo filter_input(INPUT_POST, "first_name", FILTER_SANITIZE_STRING); ?>
						<?php echo filter_input(INPUT_POST, "last_name", FILTER_SANITIZE_STRING); ?></div>
					<div class="offset-by-three columns"><?php echo filter_input(INPUT_POST, "street_address", FILTER_SANITIZE_STRING); ?></div>
					<div class="offset-by-three columns"><?php echo filter_input(INPUT_POST, "city", FILTER_SANITIZE_STRING); ?>
						<?php echo filter_input(INPUT_POST, "state", FILTER_SANITIZE_STRING); ?>
						<?php echo filter_input(INPUT_POST, "zip", FILTER_SANITIZE_STRING); ?><br> <br /></div>
				</div>
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
				</form>
			</div>
    </body>
</html>