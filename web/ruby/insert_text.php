<?php
function add_entry($journal_id, $image_id, $entry_date, $entry_text) {
    global $db;
    $query = 'INSERT INTO entry
                 ($journal_id, $imageID, $pageSideID, $entryDate, $entryData)
              VALUES
                 (:journal_id, :imageID, :pageSideID, :entryDate, :entryData)';
    $statement = $db->prepare($query);
    $statement->bindValue(':journal_id', $journal_id);
    $statement->bindValue(':image_id', $image_id);
    $statement->bindValue(':entry_date', $entry_date);
    $statement->bindValue(':entry_text', $entry_text);
    $statement->execute();
    $statement->closeCursor();
}



?>