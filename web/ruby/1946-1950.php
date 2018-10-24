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
                                        WHERE journal.journal_name =' . "'1946-1950'" . ';') as $row) {
                                        echo '<tr>';
                                        echo '<td id="tdDate">' . $row['entry_date'] . '</td>';
                                        echo '<td>' . $row['entry_text'] . '</td>';
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
            </div>
        </main>
        <?php require '../ruby/mod/footer.php'; ?>
    </body>
</html>
