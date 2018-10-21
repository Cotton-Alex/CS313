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

                foreach ($db->query("SELECT
                        w05_grp_volume.volume_name,
                        w05_grp_book.book_name,
                        w05_grp_scripture.chapter, 
                        w05_grp_scripture.verse,
                        w05_grp_scripture.content
                        FROM w05_grp_scripture
                        INNER JOIN w05_grp_book
                        ON w05_grp_scripture.book_name = w05_grp_book.book_id
                        INNER JOIN w05_grp_volume
                        ON w05_grp_scripture.volume_name = w05_grp_volume.volume_id
                        WHERE w05_grp_scripture.scripture_id = " . htmlspecialchars($_GET['id']) . "") as $row) {
                    echo "<p><span class='bold'>" . $row['volume_name'] . " - " . $row['book_name'] . " " . $row['chapter'] . ":" . $row['verse'] . " - </span>";
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