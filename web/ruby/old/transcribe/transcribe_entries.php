<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ruby's Journal</title>
        <?php include '../mod/head.php'; ?>
    </head>
    <body>
        <div>
            <header id="page_header">
                <div>
                    <?php include '../mod/header.php'; ?>
                </div>
            </header>
            <main>
                <div id="main_content">
                    <img id="journal_page" src="../images/<?php echo $image_name; ?>" alt="" />
                    <aside>
                        <div id="aside_container">
                            <div id="basic_copy_center">
                            </div>
                            <div id="page_aside">
                                <?php include('../mod/aside_transcribe.php'); ?>
                            </div>
                        </div>
                    </aside>


                    <div id="journal_text_left"> 
                        <h3>Add Journal Entry</h3>
                        <form action="index.php" method="post" id="add_entry">
                            <input type="hidden" name="action" value="add_entry">
                            <br>
                            <label>Journal:</label>
                            <select class="transcribeJournalId" name="journal_id">
                                <?php foreach ($journal_titles as $journal_title) : ?>
                                    <option value="<?php echo $journal_title['journalID']; ?>">
                                        <?php echo $journal_title['journalName']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <input type="hidden" value="imageID" name="imageID" />
                            <input type="hidden" value="1" name="pageSideID" />
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


                    <div id="journal_text_right"> 
                        <h3>Add Journal Entry</h3>
                        <form action="index.php" method="post" id="add_entry">
                            <input type="hidden" name="action" value="add_entry">
                            <br>
                            <label>Journal:</label>
                            <select class="transcribeJournalId" name="journal_id">
                                <?php foreach ($journal_titles as $journal_title) : ?>
                                    <option value="<?php echo $journal_title['journalID']; ?>">
                                        <?php echo $journal_title['journalName']; ?>
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


                    <div id="journal_text">
                        <div id="journal_text_left">
                            <section>
                                <table>
                                    <?php foreach ($left_page_entries as $entry) : ?>
                                        <tr>
                                            <td id="tdDate"><?php echo $entry['entryDate']; ?></td>
                                            <td><?php echo $entry['entryData']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>        
                            </section>
                        </div>
                        <div id="journal_text_right">
                            <section>
                                <table>
                                    <?php foreach ($right_page_entries as $entry) : ?>
                                        <tr>
                                            <td id="tdDate"><?php echo $entry['entryDate']; ?></td>
                                            <td><?php echo $entry['entryData']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>        
                            </section>
                        </div>
                    </div> 



                </div>
            </main>
            <?php include '../mod/footer.php'; ?>
        </div>
    </body>
</html>