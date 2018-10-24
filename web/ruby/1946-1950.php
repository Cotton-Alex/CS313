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
//					for ($db->query('SELECT
//						journal.journal_name,
//						image.image_name,
//						entry.image_id,
//						FROM entry
//						INNER JOIN image
//						ON entry.image_id = image.image_id
//						INNER JOIN journal
//						ON entry.journal_id = journal.journal_id
//                        WHERE journal.journal_name =' . "'1951-1955'" . ';') instanceof $image) {
//						echo '<img src="http://www.rubysjournal.com/images/' . $image["image_id"] . '.jpg" alt= Ruby"' . '' . 's 1946-1950 journal" />';
//						echo '</a><br>';
//					}
//                    $image = ($db->query('SELECT
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
//                        WHERE journal.journal_name = ' . "'1946-1950'" . ' 
//                        ORDER BY entry.entry_id DESC
//                        LIMIT 1 ;'));
//                    echo '<br>';
//                    echo '<img id="journal_page" src="http://www.rubysjournal.com/images/' . $image['image_name'] . '" alt=' . '"' . 'Ruby' . '' . 's 1946-1950 journal" />';
//                    echo '<br>';
//					$queryString = "SELECT";
//					$queryString .= " journal.journal_name, image.image_name, entry.page_date, entry.image_id, entry.entry_date, entry.entry_text";
//					$queryString .= " FROM entry";
//					$queryString .= " INNER JOIN image";
//					$queryString .= " ON entry.image_id = image.image_id";
//					$queryString .= " INNER JOIN journal";
//					$queryString .= " ON entry.journal_id = journal.journal_id";
//					$queryString .= " WHERE journal.journal_name =" . "'1946-1950'" . 'ORDER BY entry.entry_id DESC LIMIT 1;';
//
//					$query = $db->prepare($queryString);
//					$query->execute();
//					$results = $query->fetchAll();
//                                        echo $results;
//					echo '<br>';
//                                        echo '<p>journal.journal_name = ' . $results['journal.journal_name'] . '</p>';
//                                        echo '<p>image.image_name = ' . $results['image.image_name'] . '</p>';
//                                        echo '<p>entry.page_date = ' . $results['entry.page_date'] . '</p>';
//                                        echo '<p>entry.image_id = ' . $results['entry.image_id'] . '</p>';
//                                        echo '<p>entry.image_name = ' . $results['entry.image_name'] . '</p>';
//                                        echo '<p>entry.entry_text = ' . $results['entry.entry_text'] . '</p>';
//					echo '<img id="journal_page" src="http://www.rubysjournal.com/images/' . $results['entry.image_name'] . '" alt=' . '"' . 'Ruby' . '' . 's 1946-1950 journal" />';
//					echo '<br>';

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
                        WHERE journal.journal_name = ' . "'1946-1950'" . ' 
                        ORDER BY entry.entry_id DESC
                        LIMIT 1 ;') as $page_image) {
                        echo '<br>';
                        echo '<img id="journal_page" src="http://www.rubysjournal.com/images/' . $page_image['image_name'] . '" alt=' . '"' . 'Ruby' . '' . 's 1946-1950 journal" />';
                        echo '<br>';
                    }
                    ?>

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
                        WHERE journal.journal_name =' . "'1946-1950'" . ';') as $row) {
                        echo '<tr>';
                        echo '<td id="tdDate">' . $row['entry_date'] . '</td>';
                        echo '<td> "'. $row['entry_text'] . '"</td>';
                        echo '<tr>';
                    }
                } catch (PDOException $ex) {
                    echo 'Error!: ' . $ex->getMessage();
                    die();
                }
                ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </main>
        <?php require '../ruby/mod/footer.php'; ?>
    </body>
</html>
