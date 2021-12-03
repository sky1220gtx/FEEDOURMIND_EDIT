<?php
// referenced link
// https://www.php.net/manual/en/book.pdo.php
include 'auth/getServerName.php';
if($ServerName=='shimatech.net'){
    $hostname = '';
    $db = '';
    $dsn = 'mysql:dbname='.$db.';host='.$hostname.'';
    $hostuser = '';
    $hostpass = '-';
} else {
    $hostname = 'localhost';
    $db = 'db_fom';
    $dsn = 'mysql:dbname='.$db.';host='.$hostname.'';
    $hostuser = 'root';
    $hostpass = '';
}


// Connection

/*
    Using try/catch around the constructor is still valid even though we set the ERRMODE to WARNING since
    PDO::__construct will always throw a PDOException if the connection fails.
*/
// echo '<h1>TEST</h1>';
try {
    $dbh = new PDO($dsn, $hostuser, $hostpass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    // echo '<h1>Connection Success</h1>';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}





?> 
