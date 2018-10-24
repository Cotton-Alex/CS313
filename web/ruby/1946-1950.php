<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ruby's Journal | Home</title>
		<?php require '../ruby/mod/head.php'; ?>
    </head>
    <body>
        <header id="page_header">
			<?php require '../ruby/mod/header.php'; ?>
        </header>
        <main>
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

				//echo '<h1>Scripture Resources</h1>';
				($db->query('SELECT
						journal.journal_name,
						image.image_name,
						entry.page_date, 
						entry.image_id, 
						entry.entry_date, 
						entry.entry_text
						FROM entry
						INNER JOIN image
						ON entry.image_id = image.image_id
						INNER JOIN journal
						ON entry.journal_id = journal.journal_id
                        WHERE journal.journal_name =' . "'1951-1955'" . ';') instanceof $image);
				echo '<img src=' . '"http://www.rubysjournal.com/images/' . $image["entry_id"] . '.jpg" alt= Ruby' . '' . 's 1946-1950 journal />';
				echo '</a><br>';
						

				foreach ($db->query('SELECT
						journal.journal_name,
						image.image_name,
						entry.page_date, 
						entry.image_id, 
						entry.entry_date, 
						entry.entry_text
						FROM entry
						INNER JOIN image
						ON entry.image_id = image.image_id
						INNER JOIN journal
						ON entry.journal_id = journal.journal_id
                        WHERE journal.journal_name =' . "'1951-1955'" . ';') as $row) {
				echo "<a href='scriptures.php?id=" . $row["entry_id"] . "'><span class='bold'>" . $row['entry_date'] . " - " . $row['entry_text'] . "</span>";
				echo '</a><br>';
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
        </main>
		<?php require '../ruby/mod/footer.php'; ?>
    </body>
</html>
