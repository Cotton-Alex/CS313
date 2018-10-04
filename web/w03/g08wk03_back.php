<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Group 08 Week 03</title>
    </head>
    <body>
        Name: <?php echo filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING); ?>
        Email: <a href="<?php echo "mailto:" . filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL) ?>"><?php echo filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL) ?></a>
        Major: <?php echo filter_input(INPUT_POST, "major", FILTER_SANITIZE_STRING) ?>
        Comments: <?php echo filter_input(INPUT_POST, "comments", FILTER_SANITIZE_STRING) ?>
        Continents Visited:

        <?php
		// Stretch #2
		$continent_codes = array("na" => "North America", "sa" => "South America", "eu" => "Europe", "as" => "Asia", "au" => "Australia", "af" => "Africa", "an" => "Antarctica", "none" => "You've been on an island your whole life!");
		foreach ($continents as $continent) {
			echo "<p>" . $continent_codes[$continent] . "</p>";
		}
		?>
    </body>
</html>