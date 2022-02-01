<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOM</title>
    <style>
        .uid{
            font-size: x-small;
        }
    </style>
</head>
<body>
    <?php
    session_start();

    if(isset($_SESSION['uid'])){
        echo 'WELCOME '.$_SESSION['uid'];
        echo '<hr>';
        echo '<a href="logout.php">Logout</a>';
    } else {
        echo 'PLEASE LOGIN!<br>';
        echo '<a href="login.php">HERE</a>';
        echo '<hr> OR Register <br>';
        echo '<a href="register.php">HERE</a>';
    }

    echo '<hr>';


    // -------
    include_once 'config.php';
    // SELECT  START
    $query = 'SELECT * FROM `fom_tblArticle`';
    $stmt = $dbh->prepare($query);
    
    $stmt->execute();

    if($stmt){
        foreach ($stmt as $row) {
            echo '<br>';
            // Session Start
            echo '<h1>'.$row['title'].'<span class="uid"> by '.$row['userID'].'</span></h1>';
            echo '<p>'.$row['content'].'</p>';
            echo '<p>'.$row['VideoLink'].'</p>';
            echo '<hr>';
            // Session End
        }
    }
    ?>
    
</body>
</html>