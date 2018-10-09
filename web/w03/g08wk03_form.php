<!DOCTYPE html>
<html>
    <head>
		<title>Group 08 Week 03</title>
        <?php include "../mod/head.php"; ?>
    </head>
    <body>
        <header id="page_header">
            <?php include "../mod/header.php"; ?>
        </header>
		
		
        <div class="container">
        <form action="g08wk03_back.php" method="post" id="form">
            <fieldset>
                <legend>BYU-I Flat-Earthers Club Enrollment Questionairre</legend>
                <br />
                <label>Name:</label>
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
                    <input type="checkbox" name="continent[]" value="North America"> North America</input><br>
                        <input type="checkbox" name="continent[]" value="South America"> South America</input><br>
                            <input type="checkbox" name="continent[]" value="Europe"> Europe</input><br>
                                <input type="checkbox" name="continent[]" value="Asia"> Asia</input><br>
                                    <input type="checkbox" name="continent[]" value="Australia"> Australia</input><br>
                                        <input type="checkbox" name="continent[]" value="Africa"> Africa</input><br>
                                            <input type="checkbox" name="continent[]" value="Antarctica"> Antarctica</input>
                                            </p>

                                            <p>
                                                <label>Comments: </label><br>
                                                    <textarea form="form" name="comments"></textarea><br>
                                                        </p>


<!--                                                        <form action="#" method="post">
                                                            <input type="checkbox" name="check_list[]" value="C/C++"><label>C/C++</label><br/>
                                                                <input type="checkbox" name="check_list[]" value="Java"><label>Java</label><br/>
                                                                    <input type="checkbox" name="check_list[]" value="PHP"><label>PHP</label><br/>
                                                                        <input type="submit" name="submit" value="Submit"/>
                                                                        </form>-->


                                                                        <p>
                                                                            <input type="submit" name="submit" value="Submit">
                                                                        </p>

                                                                        </fieldset>
                                                                        </form>
		</div>
                                                                        </body>
                                                                        </html>