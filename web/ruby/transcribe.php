<?php session_start(); ?>
<!DOCTYPE html>
<?php
require("connect.php");
$journal_name = htmlspecialchars($_GET['journal_name']);
$journal_month = htmlspecialchars($_GET['journal_month']);
$journal_day = htmlspecialchars($_GET['journal_day']);
$journal_file_name = ($journal_name . '-' . $journal_month . '-' . $journal_day . '.jpg');

function add_entry($journal_id, $image_id, $entry_date, $entry_text) {
    global $db;
    $query = 'INSERT INTO entry
                 ($journal_id, $imageID, $pageSideID, $entryDate, $entryData)
              VALUES
                 (:journal_id, :imageID, :pageSideID, :entryDate, :entryData)';
    $statement = $db->prepare($query);
    $statement->bindValue(':journal_id', $journal_id);
    $statement->bindValue(':image_id', $image_id);
    $statement->bindValue(':entry_date', $entry_date);
    $statement->bindValue(':entry_text', $entry_text);
    $statement->execute();
    $statement->closeCursor();
}
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
                        <h3>Add Journal Entry</h3>
                        <form action="index.php" method="post" id="add_entry">
                            <input type="hidden" name="action" value="add_entry">
                            <br>
                            <label>Journal:</label>
                            <select class="transcribeJournalId" name="journal_id">
                                <?php foreach ($journal_names as $journal_name) : ?>
                                    <option value="<?php echo $journal_name['journal_id']; ?>">
                                        <?php echo $journal_name['journal_name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <input type="hidden" value="imageID" name="imageID" />
                            <input type="hidden" value="2" name="pageSideID" />
                            <label class="labelDate">Date:</label>
                            <input class="inputDate" type="date" name="entryDate" />
                            <br>

                            <!--<label>Entry:</label>-->
                            <textarea class="transcribeTxtarea" name="entryData" rows="5" cols="44" wrap="soft" style="overflow:auto">add entry here</textarea>
                            <br>

                            <label>&nbsp;</label>
                            <input type="submit" value="Add Entry" />
                            <br>
                        </form>
                    </div>

<!--                <div id="journal_text">
                    <section>
                        <table>
                            <tbody>

								//<?php
//								foreach ($db->query('SELECT
//                                        journal.journal_name,
//                                        image.image_name,
//                                        entry.page_date, 
//                                        entry.image_id, 
//                                        entry.entry_date, 
//                                        entry.entry_text
//                                        FROM entry
//                                        INNER JOIN image
//                                        ON entry.image_id = image.image_id
//                                        INNER JOIN journal
//                                        ON entry.journal_id = journal.journal_id
//                                        WHERE image.image_name = ' . "'" . $journal_file_name . "'" . ';') as $row) {
//									echo '<tr>';
//									echo '<td id="tdDate">' . $row['entry_date'] . '</td>';
//									echo '<td>' . $row['entry_text'] . '</td>';
//									echo '<tr>';
//								}
//								?>

                            </tbody>
                        </table>
                    </section>
                </div>-->
            </div>
        </main>
		<?php require '../ruby/mod/footer.php'; ?>
    </body>
</html>
