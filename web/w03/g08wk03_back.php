<!DOCTYPE html>
<head>
    <?php include "../mod/head.php"; ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Group 08 Week 03</title>
</head>
<body>
    <header id="page_header">
        <?php include "../mod/header.php"; ?>
    </header>
    <p>Name: <?php echo filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING); ?></p>
    <p>Email: <a href="<?php echo "mailto:" . filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL) ?>"><?php echo filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL) ?></a></p>
    <p>Major: <?php echo filter_input(INPUT_POST, "major", FILTER_SANITIZE_STRING) ?><br></p>
    <p>Continents Visited:<br>
    <?php
//    $continent_codes = array(
//        "na" => "North America",
//        "sa" => "South America",
//        "eu" => "Europe",
//        "as" => "Asia",
//        "au" => "Australia",
//        "af" => "Africa",
//        "an" => "Antarctica",
//        "none" => "Traveling is ovrerated.");
//
//    foreach ($continent as $continent_code => $continents) {
//        echo "<p>" . "{$code} => {$continent}" . "</p>";
//        echo $code;
//    }
    ?>

    <?php
    if (isset($_POST['submit'])) {//to run PHP script on submit
        if (!empty($_POST['continent'])) {
// Loop to store and display values of individual checked checkbox.
            foreach ($_POST['continent'] as $selected) {
                echo $selected . "</br>";
            }
        }
    }
    ?>
    </p>

    <p>Comments: <?php echo filter_input(INPUT_POST, "comments", FILTER_SANITIZE_STRING) ?></p>

</body>
</html>