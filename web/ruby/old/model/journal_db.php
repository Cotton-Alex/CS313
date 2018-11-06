<?php

function get_journal_name($journal_id) {
    global $db;
    $query = 'SELECT journalName FROM tbl_journal
              WHERE journalID = :journal_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':journal_id', $journal_id);
    $statement->execute();
    $journal = $statement->fetch();
    $statement->closeCursor();
    $journal_name = $journal['journalName'];
    return $journal_name;
}

function get_journal_title($journal_id) {
    global $db;
    $query = 'SELECT * FROM tbl_journal
              ORDER BY journalID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}

function get_image_by_image_id($image_id) {
    global $db;
    $query = 'SELECT imageName FROM tbl_image
              WHERE imageID = :image_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':image_id', $image_id);
    $statement->execute();
    $image = $statement->fetch();
    $statement->closeCursor();
    $image_name = $image['imageName'];
    return $image_name;
}

function get_image_by_journal_id($journal_id) {
    global $db;
    $query = 'SELECT imageName FROM tbl_image
              WHERE imageID = :image_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':image_id', $image_id);
    $statement->execute();
    $image = $statement->fetch();
    $statement->closeCursor();
    $image_name = $image['imageName'];
    return $image_name;
}

?>