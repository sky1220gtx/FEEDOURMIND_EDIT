<?php


class User {
    public static function show_user(){
        $pdo = new PDO(
            //DB情報
            'mysql:host='.DB_FOM::$hostname.';dbname='.DB_FOM::$dbname.';charset=utf8',
            //ID(ユーザ名)
            ''.DB_FOM::$username.'',
            //パスワード
            ''.DB_FOM::$password.''
        );   
    
        // SELECT
        $sql = 'SELECT * FROM `fom_tblusers` ORDER BY Created DESC LIMIT 1;';
        $tmp = [];
        $results = $pdo->query($sql);
        while($row = $results->fetch(PDO::FETCH_ASSOC)) {
            $tmp[] = $row;
        }
        // $json = json_encode( $tmp ) ;
        // echo $json;
        return $tmp;

    }
} 