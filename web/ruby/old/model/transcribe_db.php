<?php

function get_image_names() {
    global $db;
    $query = 'SELECT * FROM tbl_image
              ORDER BY imageID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}

function add_entry($journal_id, $imageID, $pageSideID, $entryDate, $entryData) {
    global $db;
    $query = 'INSERT INTO tbl_entry
                 ($journal_id, $imageID, $pageSideID, $entryDate, $entryData)
              VALUES
                 (:journal_id, :imageID, :pageSideID, :entryDate, :entryData)';
    $statement = $db->prepare($query);
    $statement->bindValue(':journal_id', $journal_id);
    $statement->bindValue(':imageID', $imageID);
    $statement->bindValue(':pageSideID', $pageSideID);
    $statement->bindValue(':entryDate', $entryDate);
    $statement->bindValue(':entryData', $entryData);
    $statement->execute();
    $statement->closeCursor();
}

?>