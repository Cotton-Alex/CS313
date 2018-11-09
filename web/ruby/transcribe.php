<?php session_start(); ?>
<!DOCTYPE html>
<?php
require("connect.php");
require("date_session.php");
$journal_name = htmlspecialchars($_GET['journal_name']);
$journal_month = htmlspecialchars($_GET['journal_month']);
$journal_day = htmlspecialchars($_GET['journal_day']);
$image_file_name = ($journal_name . '-' . $journal_month . '-' . $journal_day . '.jpg');
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

				<?php require 'date_selector.php'; ?>

				<?php
//                foreach ($db->query('SELECT
//                journal.journal_name,
//                image.image_name,
//                entry.page_date,
//                entry.image_id,
//                entry.entry_date,
//                entry.entry_text
//                FROM entry
//                INNER JOIN image
//                ON entry.image_id = image.image_id
//                INNER JOIN journal
//                ON entry.journal_id = journal.journal_id
//                WHERE image.image_name = ' . "'" . $image_file_name . "'" . ';
//                ') as $row) {
//					echo '<tr>';
//					echo '<td id = "tdDate">' . $row['entry_date'] . '</td>';
//					echo '<td>' . $row['entry_text'] . '</td>';
//					echo '<tr>';
//				}



				echo '<br>';
				echo '<img id = "journal_page" src = "http://www.rubysjournal.com/single_images/' . $image_file_name . '" alt = RubysJournal" />';
				?>
                <div id="journal_text">
                    <h3>Add Journal Entry</h3>
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
                                        WHERE image.image_name = ' . "'" . $image_file_name . "'" . ';') as $row) {
									echo '<div id="journal_text">';
									echo '<form method = "post" action = "insert_text.php">';
									echo '<input type = "hidden" name = "journal_id" value = "' . $row['journal_id'] . '">';
									echo '<input type = "hidden" name = "page_date" value = "' . $row['page_date'] . '">';
									echo '<input type = "hidden" name = "image_id" value = "' . $row['image_id'] . '">';
									echo '<input type = "hidden" name = "entry_date" value = "' . $row['entry_date'] . '">';
									//echo '<tr>';
									//echo '<td id="tdDate">' . $row['entry_date'] . '</td>';
									//echo '<tr>';
									echo '<label class="labelDate">Date:</label>';
									echo '<input class="inputDate" type="date" name="entry_date" value=' . $row['entry_date'] . ' />';
									echo '<input type="submit" value="Add Entry" class="addEntryButton"/>';
									echo '<br>';
									echo '<textarea class="transcribeTxtarea" name="entry_text" rows="5" cols="44" wrap="soft" style="overflow:auto">' . $row['entry_text'] . '</textarea>';
									echo '<br>';
									//echo '<tr>';
									//echo '<input type="submit" value="Add Entry" class="addEntryButton"/>';
									//echo '<br>';
									echo '</form>';
									echo '</div>';
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
	<?php
//echo substr($image_file_name, 0, 4); 
	?>
</html>
