<?php
/*
*  Feed Our Mind
* 「Public」フォルダ意外は「ユーザー」からのアクセスはできません。
*  
*/
// init defines
include 'app/services/shortcut.php';

// init Session
include sPath.'Session.php';

// init model
include mPath.'init.php';

// init DB
include 'app/database/Database.php';

// init Controller
include cPath.'Controller.php';
Controller::fomController();



