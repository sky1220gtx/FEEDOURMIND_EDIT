<?php

class Signup{
    public static function check_login(){
        $u=$_POST['username'];
        $p=$_POST['password'];
        $q = 'SELECT * FROM `fom_tblusers` WHERE userID="'.$u.'" AND password="'.$p.'"';
        return DB_FOM::FOM_SELECT($q);
    }
}