<?php session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>wk05 Grp</title>
		<?php
		include "../mod/head.php";
		?>
    </head>
    <body>
        <header id="page_header">
			<?php include "../mod/header.php"; ?>
        </header>
        <div class="container">
			<?php
			try {
				$dbUrl = getenv('DATABASE_URL');

				$dbOpts = parse_url($dbUrl);

				$dbHost = $dbOpts["host"];
				$dbPort = $dbOpts["port"];
				$dbUser = $dbOpts["user"];
				$dbPassword = $dbOpts["pass"];
				$dbName = ltrim($dbOpts["path"], '/');

				$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				echo '<h1>Scripture Resources</h1>';

				if (isset($_POST['book_name'])) {
					foreach ($db->query("select * from w05_grp_scripture where book_name like '%" . htmlspecialchars($_POST['book_name']) . "%'") as $row) {
						echo "<a href='scripturedisplay.php?id=" . $row["scripture_id"] . "'><span class='bold'>" . $row['book_name'] . " " . $row['chapter'] . ":" . $row['verse'] . "</span>";
						echo '</a><br>';
					}
				} else {

					foreach ($db->query('select * from w05_grp_scripture') as $row) {
						echo "<a href='scriptures.php?id=" . $row["scripture_id"] . "'><span class='bold'>" . $row['book_name'] . " " . $row['chapter'] . ":" . $row['verse'] . "</span>";
						echo '</a><br>';
					}
				}
			} catch (PDOException $ex) {
				echo 'Error!: ' . $ex->getMessage();
				die();
			}
			?>

			<div>
				<form action="scriptures_search.php" method="post">
					<label>Book</label>
					<input type="text" name="book" placeholder="John">
						<button type="submit">Click Me</button>
				</form>
			</div>
        </div>
    </body>
</html>