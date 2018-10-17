<?php session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>wk05 Scripture Search</title>
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

				echo '<h1>Scripture Details</h1>';

				foreach ($db->query("select * from w05_grp_scripture where scripture_id = " . htmlspecialchars($_GET['id'])) as $row) {
					echo "<p><span class='bold'>" . $row['book_name'] . " " . $row['chapter'] . ":" . $row['verse'] . " - </span>";
					echo '"' . $row["content"] . '"</p>';
				}
			} catch (PDOException $ex) {
				echo 'Error!: ' . $ex->getMessage();
				die();
			}
			?>
        </div>
    </body>
</html>