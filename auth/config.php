<?php
// referenced link
// https://www.php.net/manual/en/book.pdo.php
include 'getServerName.php';
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
try {
    $dbh = new PDO($dsn, $hostuser, $hostpass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    // echo 'Connection Success';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}





?> 
