<?php
session_start();
?>
<html>

<head>
    <title>Welcome</title>
</head>

<body>

    <?php
if($_SESSION["uID"]) {
?>
    <p>Welcome to Feed Our Mind</p>
    <?php echo htmlspecialchars($_SESSION["uID"]); ?>. :)<br> Click here to <a href="logout.php" tite="Logout">Logout.

        <?php
}
else 
{
    echo "<h1>Please login first .</h1>";
    echo "<a href='login.php'>Login Page</a>";
    
}
?>
</body>

</html>