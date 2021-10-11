<?php
session_start();
unset($_SESSION["uID"]);
header("Location:welcome.php");
?>