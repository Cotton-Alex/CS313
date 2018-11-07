<!DOCTYPE html>
<?php
require("connect.php");
$journal_name = htmlspecialchars($_GET['journal_name']);
$journal_month = htmlspecialchars($_GET['journal_month']);
$journal_day = htmlspecialchars($_GET['journal_day']);
$journal_file_name = ('' . $journal_name . '-' . $journal_month . '-' . $journal_day . '.jpg' . '');
?>
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
            <div class="journal_page_container">

				<?php require 'date_selector.php';
				?>

				<?php
//				foreach ($db->query("SELECT
//                        journal.journal_name,
//                        image.image_name,
//                        entry.page_date, 
//                        entry.image_id, 
//                        entry.entry_date, 
//                        entry.entry_text
//                        FROM entry
//                        INNER JOIN image
//                        ON entry.image_id = image.image_id
//                        INNER JOIN journal
//                        ON entry.journal_id = journal.journal_id
//                        WHERE image.image_name = '1946-1950-01-05.jpg'
//                        ORDER BY image.image_id ASC
//                        LIMIT 1 ;") as $page_image) {
//					echo '<br>';
//					echo '<img id="journal_page" src="http://www.rubysjournal.com/single_images/' . $page_image['image_name'] . '" alt=' . '"' . 'Ruby' . '' . 's 1946-1950 journal" />';
//				}
				?>
				
				<?php
					echo '<br>';
					echo '<img id="journal_page" src="http://www.rubysjournal.com/single_images/' . $journal_file_name . '" alt=RubysJournal" />';
				?>

                <div id="journal_text">
                    <section>
                        <table>
                            <tbody>

								<?php
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
                                        WHERE image.image.name = ' . $journal_file_name . ';') as $row) {
									echo '<tr>';
									echo '<td id="tdDate">' . $row['entry_date'] . '</td>';
									echo '<td>' . $row['entry_text'] . '</td>';
									echo '<tr>';
								}
								?>

                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </main>
		<?php require '../ruby/mod/footer.php'; ?>
    </body>
</html>
