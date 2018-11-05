<!DOCTYPE html>
<?php include_once("connect.php"); ?>
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
                        WHERE entry.page_date = ' . "'1946-01-01'" . ' 
                        ORDER BY entry.entry_id ASC
                        LIMIT 1 ;') as $page_image) {
					echo '<br>';
					echo '<img id="journal_page" src="http://www.rubysjournal.com/single_images/' . $page_image['image_name'] . '" alt=' . '"' . 'Ruby' . '' . 's 1946-1950 journal" />';
				}
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
                                        WHERE entry.page_date =' . "'1946-01-01'" . ';') as $row) {
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
