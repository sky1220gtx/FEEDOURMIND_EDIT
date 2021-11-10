<?php

$host = "tsb.well-field.co.jp";
$username = "tsb";
$password = "tsb202104";
$dbname = "db_fom";

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  echo "Connected to $dbname at $host successfully.\n";
} catch (PDOException $pe) {
  die("Could not connect to the database $dbname :" . $pe->getMessage());
}