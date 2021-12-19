<?php

class mSignup{
    public static function check_login(){
        $u=$_POST['username'];
        $p=$_POST['password'];
        $q = 'SELECT * FROM `fom_tblusers` WHERE userID="'.$u.'" AND password="'.$p.'"';
        return DB_FOM::FOM_SELECT($q);
    }

    public static function insert(){
        $u=$_POST['username'];
        $p=$_POST['password'];
        $e=$_POST['email'];
        $q = 'INSERT INTO `fom_tblusers` (`userID`, `password`, `Email`, `Created`, `Updated`) VALUES ("'.$u.'", "'.$p.'", "'.$e.'", current_timestamp(), current_timestamp()); ';
        DB_FOM::FOM_INSERT($q);
        $q = 'SELECT * FROM `fom_tblusers` WHERE userID="'.$u.'" AND password="'.$p.'"';
        return DB_FOM::FOM_SELECT($q);
    }
}