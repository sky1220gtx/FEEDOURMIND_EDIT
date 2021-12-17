<?php
/*
*  Feed Our Mind
* 「Public」フォルダ意外は「ユーザー」からのアクセスはできません。
*  
*/


// init defines
include 'app/services/shortcut.php';

// init Controller
include cPath.'Controller.php';
Controller::fomController();



