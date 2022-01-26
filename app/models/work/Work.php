<?php


class mWork {
    public static function show_all_article(){
        $q = 'SELECT * FROM `fom_tblarticle` ORDER BY Created DESC;';
        return DB_FOM::FOM_SELECT($q);        
    }
    public static function show_detailed_article($ID){
        $q = 'SELECT * FROM `fom_tblarticle` WHERE `articleID`='.$ID.';';
        return DB_FOM::FOM_SELECT($q);        
    }
}