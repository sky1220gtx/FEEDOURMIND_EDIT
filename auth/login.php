<?php
session_start();

// $SQL = new PDO('mysql:dbname='. $dbname .';host='. $servername .';charset=utf8', ''. $username .'', ''. $password .'');
// SELECT * FROM tblUsers WHERE `userID` = 'henryust12' AND password = 'test';

require_once 'config.php';
$userID = $_POST['USER_ID'];
$passwd = $_POST['PASSWD'];

$sql = "SELECT * FROM tblUsers WHERE userID='".$userID."' AND passwd='".$passwd."'";
foreach ($conn->query($sql) as $row) {
    $_SESSION["uID"] = $row['userID'];
    // print $_SESSION["uID"] . "\t";
    header("Location:welcome.php");
}
?>

<html>
<head>
<title>User Login</title>
</head>
<body>
<form name="frmUser" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="USER_ID">
 <br>
 Password:<br>
<input type="password" name="PASSWD">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body>
</html>