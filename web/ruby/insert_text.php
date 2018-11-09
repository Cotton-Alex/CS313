<?php session_start() ?>

<?php
//if (!isset (htmlspecialchars($_POST['journal_id']))) {
//    $journal_id = "1";
//} else {
//    $journal_id = htmlspecialchars($_POST['journal_id']);
//}
//echo substr($image_file_name, 0, 4); 

$journal_id = htmlspecialchars($_POST['journal_id']);
$page_date = htmlspecialchars($_POST['page_date']);
$image_id = htmlspecialchars($_POST['image_id']);
$entry_date = htmlspecialchars($_POST['entry_date']);
$entry_text = htmlspecialchars($_POST['entry_text']);

//echo "$journal_id\n";
//echo "$page_date\n";
//echo "$image_id\n";
//echo "$entry_date\n";
//echo "$entry_text\n";

require('connect.php');
$stmt = $db->prepare('UPDATE entry SET entry_text = :entry_text WHERE :entry_date = :entry_date');
$stmt->bindValue(':entry_text', $entry_text, PDO::PARAM_STR);
$stmt->bindValue(':entry_date', $entry_date, PDO::PARAM_STR);
$stmt->execute();

$new_page = "transcribe.php?journal_month=" . $_SESSION['journal_month'] . "&journal_day=" . $_SESSION['journal_day'] . "&journal_name=1946-1950&submit=Go";

header("Location: $new_page");
die();



//THIS ADDS A YEAR TO THE DATE PASSED IN
//$date = $entry_date;
//$newdate = strtotime ( '+1 year' , strtotime ( $date ) ) ;
//$newdate = date ( 'Y-m-j' , $newdate );
//echo $newdate;

	
		
		
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
//include('transcribe.php');
?>