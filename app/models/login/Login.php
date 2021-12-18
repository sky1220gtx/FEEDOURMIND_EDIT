<?php
include 'app/database/Database.php';

class Login {
    public static function check_login(){
        
        // $u=$_SESSION['password'];        
        // $p=$_SESSION['password'];
        $u=$_POST['username'];
        $p=$_POST['password'];
        $q = 'SELECT * FROM `fom_tblusers` WHERE userID="'.$u.'" AND password="'.$p.'"';
        return DB_FOM::FOM_SELECT($q);
    }
}