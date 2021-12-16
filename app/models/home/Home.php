<?php
include 'app/database/Database.php';

class Home {
    public static function show_article_home_top_1(){
        $pdo = new PDO(
            //DB情報
            'mysql:host='.DB_FOM::$hostname.';dbname='.DB_FOM::$dbname.';charset=utf8',
            //ID(ユーザ名)
            ''.DB_FOM::$username.'',
            //パスワード
            ''.DB_FOM::$password.''
        );   
    
        // SELECT
        $sql = 'SELECT * FROM `fom_tblarticle` ORDER BY Clicked DESC LIMIT 1 ;';
        $tmp = [];
        $results = $pdo->query($sql);
        while($row = $results->fetch(PDO::FETCH_ASSOC)) {
            $tmp[] = $row;
        }

        return $tmp;
        
    }

    public static function show_article_recent(){
        $pdo = new PDO(
            //DB情報
            'mysql:host='.DB_FOM::$hostname.';dbname='.DB_FOM::$dbname.';charset=utf8',
            //ID(ユーザ名)
            ''.DB_FOM::$username.'',
            //パスワード
            ''.DB_FOM::$password.''
        );   
    
        // SELECT
        $sql = 'SELECT * FROM `fom_tblarticle` ORDER BY Created DESC ;';
        $tmp = [];
        $results = $pdo->query($sql);
        while($row = $results->fetch(PDO::FETCH_ASSOC)) {
            $tmp[] = $row;
        }

        return $tmp;
        
    }

    public static function show_article_popular(){
        $pdo = new PDO(
            //DB情報
            'mysql:host='.DB_FOM::$hostname.';dbname='.DB_FOM::$dbname.';charset=utf8',
            //ID(ユーザ名)
            ''.DB_FOM::$username.'',
            //パスワード
            ''.DB_FOM::$password.''
        );   
    
        // SELECT
        $sql = 'SELECT * FROM `fom_tblarticle` ORDER BY Created DESC ;';
        $tmp = [];
        $results = $pdo->query($sql);
        while($row = $results->fetch(PDO::FETCH_ASSOC)) {
            $tmp[] = $row;
        }

        return $tmp;
        
    }
}