<?php
session_start();
if (isset($_SESSION['uid'])) {
    header('Location: home.php');
}

if($_POST['txtID']){

    include_once 'config.php';
    // SELECT  START
    $query = 'SELECT * FROM fom_tblUsers WHERE `userID` = :uid AND `password` = :pass';
    $stmt = $dbh->prepare($query);
    $uid = $_POST['txtID'];
    $pass = $_POST['txtPass'];
    $stmt->bindParam('uid', $uid);
    $stmt->bindParam('pass', $pass);
    $stmt->execute();
    if($stmt){
        foreach ($stmt as $row) {
            echo '<br>';
            // Session Start
            $_SESSION['uid']=$row['userID'];
            $_SESSION['pass']=$row['password'];
            // Session End
        }
    } else {
        $_POST['chk'] = 'Wrong user or password!';
    }
    // SELECT  END

    if($_POST['chk']){
        $_POST['chk'] = 'Wrong user or password!';
        echo $_POST['chk'];
    }

} else {
    echo "Enter USER ID";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="hidden" name="chk" value="none">
        <label for="txtID">User ID : </label>
        <input type="text" name="txtID" id="txtID">
        <br>
        <label for="txtPass">Password : </label>
        <input type="text" name="txtPass" id="txtPass">
        <br>
        <input type="submit" value="Login">
    </form>
    <hr>
    <a href="home.php"><button>BACK HOME</button></a>
</body>
</html>