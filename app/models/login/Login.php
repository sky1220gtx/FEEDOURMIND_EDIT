<?php


class mLogin {
    public static function check_login(){
        $u=htmlspecialchars($_POST['username']);
        $p=htmlspecialchars($_POST['password']);
        $q = 'SELECT * FROM `fom_tblusers` WHERE userID="'.$u.'" AND password="'.$p.'"';
        return DB_FOM::FOM_SELECT($q);
    }
}