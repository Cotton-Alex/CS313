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
            <h2>Burley Bob's Big Board Game Blowout!</h2>      
            <table>
                <tr>
                    <th>Product Image</th>
                    <th width="10px">&nbsp;</th>
                    <th>Games</th>
                    <th width="10px">&nbsp;</th>
                    <th>Amount</th>
                    <th width="10px">&nbsp;</th>
                    <th>Action</th>
					<th width="10px">&nbsp;</th>
					<th><a class="offset-by-ten" href="cart.php"><img alt="cart" src="https://png.icons8.com/material-outlined/30/1EAEDB/shopping-cart.png"></img></a></th>
                </tr>
				<?php
				for ($i = 0; $i < count($games); $i++) {
					?>
					<tr>
						<td><?php echo($product_image[$i]); ?></td>
						<td width="10px">&nbsp;</td>
						<td><?php echo($games[$i]); ?></td>
						<td width="10px">&nbsp;</td>
						<td><?php echo($amounts[$i]); ?></td>
						<td width="10px">&nbsp;</td>
						<td><a class="button" href="?add=<?php echo($i); ?>">Add to cart</a></td>
					</tr>
					<?php
				}
				?>
            </table>
            </form>
        </div>
    </body>
</html>