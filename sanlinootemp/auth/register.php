<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['uid'])) {
        header('Location: home.php');
    }
    if(isset($_POST['submit'])){
        include_once 'config.php';
        $data = [
            'uid' => $_POST['_uid'],
            'pwd' => $_POST['_pwd'],
            'fname' => $_POST['_fname'],
            'lname' => $_POST['_lname'],
            'gen' => $_POST['_gen'],
            'bday' => $_POST['_bday'],
            'email' => $_POST['_email'],
        ];
        $query = "INSERT INTO `fom_tblUsers` (`userID`, `password`, `FirstName`, `LastName`, `Gender`, `Birthday`, `Email`) VALUES (:uid, :pwd,:fname,:lname,:gen,:bday,:email);";
        $stmt = $dbh->prepare($query);
        $stmt->execute($data);
        
        echo "New record created successfully";
        // Session Start
        $_SESSION['uid']=$_POST['_uid'];
        $_SESSION['pass']=$_POST['_pwd'];
        header('Location: home.php');
        // Session End
}
    ?>
    <form action="register.php" method="post">
        <label for="userID">User ID</label>
        <input type="text" name="_uid" id="userID">
        <br>
        <label for="passwd">Password</label>
        <input type="password" name="_pwd" id="passwd">
        <br>
        <label for="Fname">First Name</label>
        <input type="text" name="_fname" id="Fname">
        <br>
        <label for="Lname">Last Name</label>
        <input type="text" name="_lname" id="Lname">
        <br>
        <label for="Gender">Gender ( M or F )</label>
        <input type="text" name="_gen" id="Gender">
        <br>
        <label for="birthday">Birthday</label>
        <input type="date" name="_bday" id="birthday">
        <br>
        <label for="email">Email</label>
        <input type="email" name="_email" id="email">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>


<hr>

<a href="home.php"><button>BACK HOME</button></a>
</body>
</html>