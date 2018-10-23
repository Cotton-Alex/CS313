<?php

require('../model/database.php');
require('../model/entries_db.php');
require('../model/journal_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $error = 'Something went terribly wrong.';
        include('../errors/error.php');
    }
    if ($action == 'change_date') {
        $image_id = filter_input(INPUT_GET, 'image_id', FILTER_VALIDATE_INT);
        $journal_id = filter_input(INPUT_GET, 'journal_id', FILTER_VALIDATE_INT);
        if ($image_id == NULL || $image_id == FALSE) {
            $image_id = 1;
        }
        if ($journal_id == NULL || $journal_id == FALSE) {
            $journal_id = 1;
        }
        $entry_dates = get_entry_dates_by_journal($journal_id);
        $image_name = get_image_by_image_id($image_id);
        $entry_data = get_entry_data_by_image_id($image_id);
        $left_page_entries = get_left_page_entries_by_image_id($image_id);
        $right_page_entries = get_right_page_entries_by_image_id($image_id);
        include('read_entries.php');
    }
    if ($action == '1946-1950') {
        $journal_id = filter_input(INPUT_GET, 'journal_id', FILTER_VALIDATE_INT);
        $image_id = filter_input(INPUT_GET, 'image_id', FILTER_VALIDATE_INT);
        if ($journal_id == NULL || $journal_id == FALSE) {
            $journal_id = 1;
        }
        if ($image_id == NULL || $image_id == FALSE) {
            $image_id = 1;
        }
        $journal_name = get_journal_name($journal_id);
        $entry_dates = get_entry_dates_by_journal($journal_id);
        $image_name = get_image_by_image_id($image_id);
        $left_page_entries = get_left_page_entries_by_image_id($image_id);
        $right_page_entries = get_right_page_entries_by_image_id($image_id);
        include('read_entries.php');
    }
    if ($action == '1951-1955') {
        $journal_id = filter_input(INPUT_GET, 'journal_id', FILTER_VALIDATE_INT);
        $image_id = filter_input(INPUT_GET, 'image_id', FILTER_VALIDATE_INT);
        if ($journal_id == NULL || $journal_id == FALSE) {
            $journal_id = 2;
        }
        if ($image_id == NULL || $image_id == FALSE) {
            $image_id = 16;
        }
        $journal_name = get_journal_name($journal_id);
        $entry_dates = get_entry_dates_by_journal($journal_id);
        $image_name = get_image_by_image_id($image_id);
        $left_page_entries = get_left_page_entries_by_image_id($image_id);
        $right_page_entries = get_right_page_entries_by_image_id($image_id);
        include('read_entries.php');
    }
    if ($action == '1956-1960') {
        $journal_id = filter_input(INPUT_GET, 'journal_id', FILTER_VALIDATE_INT);
        $image_id = filter_input(INPUT_GET, 'image_id', FILTER_VALIDATE_INT);
        if ($journal_id == NULL || $journal_id == FALSE) {
            $journal_id = 3;
        }
        if ($image_id == NULL || $image_id == FALSE) {
            $image_id = 24;
        }
        $journal_name = get_journal_name($journal_id);
        $entry_dates = get_entry_dates_by_journal($journal_id);
        $image_name = get_image_by_image_id($image_id);
        $left_page_entries = get_left_page_entries_by_image_id($image_id);
        $right_page_entries = get_right_page_entries_by_image_id($image_id);
        include('read_entries.php');
    }
    if ($action == '1961-1965') {
        $journal_id = filter_input(INPUT_GET, 'journal_id', FILTER_VALIDATE_INT);
        $image_id = filter_input(INPUT_GET, 'image_id', FILTER_VALIDATE_INT);
        if ($journal_id == NULL || $journal_id == FALSE) {
            $journal_id = 4;
        }
        if ($image_id == NULL || $image_id == FALSE) {
            $image_id = 33;
        }
        $journal_name = get_journal_name($journal_id);
        $entry_dates = get_entry_dates_by_journal($journal_id);
        $image_name = get_image_by_image_id($image_id);
        $left_page_entries = get_left_page_entries_by_image_id($image_id);
        $right_page_entries = get_right_page_entries_by_image_id($image_id);
        include('read_entries.php');
    }
    if ($action == '1966-1968') {
        $journal_id = filter_input(INPUT_GET, 'journal_id', FILTER_VALIDATE_INT);
        $image_id = filter_input(INPUT_GET, 'image_id', FILTER_VALIDATE_INT);
        if ($journal_id == NULL || $journal_id == FALSE) {
            $journal_id = 5;
        }
        if ($image_id == NULL || $image_id == FALSE) {
            $image_id = 43;
        }
        $journal_name = get_journal_name($journal_id);
        $entry_dates = get_entry_dates_by_journal($journal_id);
        $image_name = get_image_by_image_id($image_id);
        $left_page_entries = get_left_page_entries_by_image_id($image_id);
        $right_page_entries = get_right_page_entries_by_image_id($image_id);
        include('read_entries.php');
    }
    if ($action == '1969-1973') {
        $journal_id = filter_input(INPUT_GET, 'journal_id', FILTER_VALIDATE_INT);
        $image_id = filter_input(INPUT_GET, 'image_id', FILTER_VALIDATE_INT);
        if ($journal_id == NULL || $journal_id == FALSE) {
            $journal_id = 5;
        }
        if ($image_id == NULL || $image_id == FALSE) {
            $image_id = 51;
        }
        $journal_name = get_journal_name($journal_id);
        $entry_dates = get_entry_dates_by_journal($journal_id);
        $image_name = get_image_by_image_id($image_id);
        $left_page_entries = get_left_page_entries_by_image_id($image_id);
        $right_page_entries = get_right_page_entries_by_image_id($image_id);
        include('read_entries.php');
    }
}
