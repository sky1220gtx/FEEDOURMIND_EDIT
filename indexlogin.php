<?php

//データベース接続情報を格納
include("config.php");

try{
    

    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT "
    ."tu.user_id "
   .",tu.user_name "
   .",tu.name "
   .",tu.password "
   .",tu.email "
    ."FROM tbl_user tu WHERE tu.user_id = :user_id";
    
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':user_id', 112 , PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch();


}catch (PDOException $e){
    echo($e->getMessage());
    die();
}


?>
<html>

<body>
    <h1>
        <?php
        echo "login by: ";
        echo htmlspecialchars($result['user_name'],ENT_QUOTES,"UTF-8"); ?>
    </h1>
   
</body>

</html>