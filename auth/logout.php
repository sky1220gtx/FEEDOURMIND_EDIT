<?php
session_start();
$_SESSION['uid']=null;
header('Location: home.php');
exit;