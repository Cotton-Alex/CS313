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
                                <p>Entries</p>
                            </div>
                            <div id="page_aside">
                                <?php include('../mod/list_entries.php'); ?>
                            </div>
                        </div>
                    </aside>
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