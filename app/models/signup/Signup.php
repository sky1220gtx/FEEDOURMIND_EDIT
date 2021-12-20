<?php

class mSignup{
    public static function insert(){
        $u=htmlspecialchars($_POST['username']);
        $p=htmlspecialchars($_POST['password']);
        $e=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $q = 'INSERT INTO `fom_tblusers` (`userID`, `password`, `Email`, `Created`, `Updated`) VALUES ("'.$u.'", "'.$p.'", "'.$e.'", current_timestamp(), current_timestamp()); ';
        DB_FOM::FOM_INSERT($q);
        $q = 'SELECT * FROM `fom_tblusers` WHERE userID="'.$u.'" AND password="'.$p.'"';
        return DB_FOM::FOM_SELECT($q);
    }
}