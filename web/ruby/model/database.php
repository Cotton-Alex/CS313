<?php

//   //Localhost settings
$dsn = 'mysql:host=localhost;dbname=rubys_journal_db';
$username = 'rubys_jrnl_usr';
$password = 'LKUGoIFHAefohp944F';

//Remote settings
//    $dsn = 'mysql:host=alexco.fatcowmysql.com;dbname=rubys_journal_db';
//    $username = 'rubys_jrnl_usr';
//    $password = 'LKUGoIFHAefohp944F';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../errors/database_error.php');
    exit();
}
?>