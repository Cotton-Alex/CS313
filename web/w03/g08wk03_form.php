<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include '../mod/head.php'; ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Group 08 Week 03</title>
    </head>
    <body>
        <header id="page_header">
            <?php include '../mod/header.php'; ?>
        </header>
        <br />
        <form action="g08wk03_back.php" method="post" id="form">
            <fieldset>
                <legend>BYU-I Flat-Earthers Club Enrollment Questionairre</legend>
                <br />
                <label>name1</label>
                <input type="text" name="name"></input><br />

                <label>Email: </label>
                <input type="text" name="email"></input><br />

                <p>Major:<br></br>
                    <?php
                    $major_radio_id = "major-";
                    $major_radio_abbr = array("cs", "wdd", "cit", "ce");
                    $major_radio_fullname = array("Computer Science", "Web Design and Development", "Computer Information Technology", "Computer Engineering");

                    for ($i = 0; $i < sizeof($major_radio_fullname); $i++) {
                        echo "<input id=" . $major_radio_id . $major_radio_abbr[$i] . " type='radio' name='major' value='" . $major_radio_fullname[$i] . "' required>";
                        echo "<label for=" . $major_radio_id . $major_radio_abbr[$i] . ">" . $major_radio_fullname[$i] . "</label><br></br>";
                    }
                    ?>
                </p>
                <p>
                    <label>Continents Visited:</label><br>
                        <input type="checkbox" name="continent[]" value="na"> North America</input><br>
                            <input type="checkbox" name="continent[]" value="sa"> South America</input><br>
                                <input type="checkbox" name="continent[]" value="eu"> Europe</input><br>
                                    <input type="checkbox" name="continent[]" value="as"> Asia</input><br>
                                        <input type="checkbox" name="continent[]" value="au"> Australia</input><br>
                                            <input type="checkbox" name="continent[]" value="af"> Africa</input><br>
                                                <input type="checkbox" name="continent[]" value="an"> Antarctica</input>
                                                </p>

                                                <p>
                                                    <label>Comments: </label><br>
                                                        <textarea form="form" name="comments"></textarea><br>
                                                            </p>
                                                            <p>
                                                                <input type="submit" value="Submit">
                                                            </p>

                                                            </fieldset>
                                                            </form>
                                                            </body>
                                                            </html>