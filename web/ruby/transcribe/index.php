<?php

require('../model/database.php');
require('../model/entries_db.php');
require('../model/journal_db.php');
require('../model/transcribe_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'load_transcribe';
    }
}
if ($action == 'load_transcribe') {
    $journal_id = filter_input(INPUT_GET, 'journal_id', FILTER_VALIDATE_INT);
    $image_id = filter_input(INPUT_GET, 'image_id', FILTER_VALIDATE_INT);
    if ($journal_id == NULL || $journal_id == FALSE) {
        $journal_id = 1;
    }
    if ($image_id == NULL || $image_id == FALSE) {
        $image_id = 1;
    }
    $journal_name = get_journal_name($journal_id);
    $journal_titles = get_journal_title($journal_id);
    //$entry_dates = get_entry_dates_by_journal($journal_id);
    $image_name = get_image_by_image_id($image_id);
    $image_names = get_image_names();
    $entry_data = get_entry_data_by_image_id($image_id);
    $left_page_entries = get_left_page_entries_by_image_id($image_id);
    $right_page_entries = get_right_page_entries_by_image_id($image_id);
    include('transcribe_entries.php');
}
if ($action == 'add_entry') {
    $journal_id = filter_input(INPUT_POST, 'journal_id', FILTER_VALIDATE_INT);
    $imageID = filter_input(INPUT_POST, 'imageID');
    $pageSideID = filter_input(INPUT_POST, 'pageSideID');
    $entryDate = filter_input(INPUT_POST, 'entryDate');
    $entryData = filter_input(INPUT_POST, 'entryData');
    if ($journal_id == NULL || $journal_id == FALSE || $imageID == NULL ||
            $pageSideID == NULL || $entryDate == NULL || $entryData == FALSE) {
        $error = "Invalid entry. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        add_entry($journal_id, $imageID, $pageSideID, $entryDate, $entryData);
        header("Location: .?image_id=$image_id");
    }
}
?>