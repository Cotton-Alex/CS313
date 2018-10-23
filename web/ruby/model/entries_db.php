<?php

function get_entry_dates_by_journal($journal_id) {
    global $db;
    $query = 'SELECT entryDate, imageID, journalID FROM tbl_entry
              WHERE tbl_entry.journalID = :journal_id
              ORDER BY entryDate';
    $statement = $db->prepare($query);
    $statement->bindValue(":journal_id", $journal_id);
    $statement->execute();
    $entry_dates = $statement->fetchAll();
    $statement->closeCursor();
    return $entry_dates;
}

function get_entry_data_by_image_id($image_id) {
    global $db;
    $query = 'SELECT * FROM tbl_entry
              WHERE tbl_entry.imageID = :image_id
              ORDER BY entryDate';
    $statement = $db->prepare($query);
    $statement->bindValue(":image_id", $image_id);
    $statement->execute();
    $entry_data = $statement->fetchAll();
    $statement->closeCursor();
    return $entry_data;
}

function get_left_page_entries_by_image_id($image_id) {
    global $db;
    $query = 'SELECT * FROM tbl_entry
              WHERE tbl_entry.imageID = :image_id
              AND pageSideID = 1
              ORDER BY entryDate';
    $statement = $db->prepare($query);
    $statement->bindValue(":image_id", $image_id);
    $statement->execute();
    $left_page_entries = $statement->fetchAll();
    $statement->closeCursor();
    return $left_page_entries;
}

function get_right_page_entries_by_image_id($image_id) {
    global $db;
    $query = 'SELECT * FROM tbl_entry
              WHERE tbl_entry.imageID = :image_id
              AND pageSideID = 2
              ORDER BY entryDate';
    $statement = $db->prepare($query);
    $statement->bindValue(":image_id", $image_id);
    $statement->execute();
    $right_page_entries = $statement->fetchAll();
    $statement->closeCursor();
    return $right_page_entries;
}

?>