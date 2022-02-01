<?php

class DB_FOM{
    private static function DB(){
        $db = [];
        // $db['hostname'] = 'localhost';
        // $db['dbname'] = 'db_fom';
        // $db['username'] = 'master_user';
        // $db['password'] = 'master_user';

        $db['hostname'] = '31.220.110.51';
        $db['dbname'] = 'u730565153_fom';
        $db['username'] = 'u730565153_Feedourmind21';
        $db['password'] = 'Feedourmind21';
        return $db;
    }

    public static function FOM_SELECT($q){
        $db=self::DB();
        $pdo = new PDO(
            //DB情報
            'mysql:host='.$db['hostname'].';dbname='.$db['dbname'].';charset=utf8',
            //ID(ユーザ名)
            ''.$db['username'].'',
            //パスワード
            ''.$db['password'].''
        );   
        $tmp = [];
        $results = $pdo->query($q);
        while($row = $results->fetch(PDO::FETCH_ASSOC)) {
            $tmp[] = $row;
        }
        return $tmp;
    }

    public static function FOM_INSERT($q){
        $db=self::DB();
        $pdo = new PDO(
            //DB情報
            'mysql:host='.$db['hostname'].';dbname='.$db['dbname'].';charset=utf8',
            //ID(ユーザ名)
            ''.$db['username'].'',
            //パスワード
            ''.$db['password'].''
        );   
        //実行
	    $pdo->query($q);
    }
}