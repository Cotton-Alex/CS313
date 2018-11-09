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
//                    echo '<tr>';
//                    echo '<td id = "tdDate">' . $row['entry_date'] . '</td>';
//                    echo '<td>' . $row['entry_text'] . '</td>';
//                    echo '<tr>';
//                }



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
										journal.journal_id,
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
									echo '<tr>';
									echo '<td id="tdDate">' . $row['entry_date'] . '</td>';
									echo '<td>' . $row['entry_text'] . '</td>';
									echo '<td>' . $row['journal_name'] . '</td>';
									echo '<td>' . $row['image_name'] . '</td>';
									echo '<td>' . $row['page_date'] . '</td>';
									echo '<td>' . $row['image_id'] . '</td>';
									echo '<td>' . $row['entry_date'] . '</td>';
									echo '<td>' . $row['entry_text'] . '</td>';
									echo '<tr>';
								}
								?>

                            </tbody>
                        </table>
                    </section>
                </div>
                <div id="journal_text"> 

                    <form method="post" action="insert_text.php">
                        <input type="hidden" name="journal_id" value="<?php echo $journal_id ?>">
                        <input type="hidden" name="page_date" value="<?php echo $page_date ?>">
                        <input type="hidden" name="image_id" value="<?php echo $image_id ?>">
                        <input type="hidden" name="entry_date" value="<?php echo $entry_date ?>">
                        <br>
                        <label class="labelDate">Date:</label>
                        <input class="inputDate" type="date" name="entry_date" value="" />
                        <br>
                        <textarea class="transcribeTxtarea" name="entry_text" rows="5" cols="44" wrap="soft" style="overflow:auto"><?php echo substr($image_file_name, 0, 4); ?></textarea>
                        <br>

                        <label>&nbsp;</label>
                        <input type="submit" value="Add Entry" />
                        <br>
                    </form>
                </div>
            </div>
        </main>
		<?php require '../ruby/mod/footer.php'; ?>
    </body>
</html>
