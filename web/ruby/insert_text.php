<?php

$journal_id = htmlspecialchars($_POST['journal_id']);
$page_date = htmlspecialchars($_POST['page_date']);
$image_id = htmlspecialchars($_POST['image_id']);
$entry_date = htmlspecialchars($_POST['entry_date']);
$entry_text = htmlspecialchars($_POST['entry_text']);


//echo "$journal_id\n";
//echo "$entry_text\n";
//echo "$page_date\n";
$date = $page_date;
$newdate = strtotime ( '+1 year' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-j' , $newdate );
 
echo $newdate;

//function add_entry($journal_id, $page_date, $image_id, $entry_date, $entry_text) {
//    global $db;
//    $query = 'INSERT INTO entry
//                 ($journal_id, $page_date, $image_id, $entry_date, $entry_text)
//              VALUES
//                 (:journal_id, :page_date, :image_id, :entryD_date, :entry_text)';
//    $statement = $db->prepare($query);
//    $statement->bindValue(':journal_id', $journal_id);
//    $statement->bindValue(':page_date', $page_date);
//    $statement->bindValue(':image_id', $image_id);
//    $statement->bindValue(':entry_date', $entry_date);
//    $statement->bindValue(':entry_text', $entry_text);
//    $statement->execute();
//    $statement->closeCursor();
//}



?>