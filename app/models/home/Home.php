<?php
include 'app/database/Database.php';

class Home {
    public static function show_article_home_top_1(){
        $q = 'SELECT * FROM `fom_tblarticle` ORDER BY Clicked DESC LIMIT 1 ;';
        return DB_FOM::FOM_SELECT($q);        
    }

    public static function show_article_recent(){
        $q = 'SELECT * FROM `fom_tblarticle` ORDER BY Created DESC ;';
        return DB_FOM::FOM_SELECT($q);
    }

    public static function show_article_popular(){
        $q = 'SELECT * FROM `fom_tblarticle` ORDER BY Clicked DESC ;';
        return DB_FOM::FOM_SELECT($q);
    }
}