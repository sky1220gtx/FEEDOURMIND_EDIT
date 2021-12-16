<?php
/*
*  Feed Our Mind
* 「Public」フォルダ意外は「ユーザー」からのアクセスはできません。
*  
*/

// set path
// controller path
define("cPath","app/controllers/");
// model path
define("mPath","app/models/");
// view path
define("vPath","app/views/");
// service path
define("sPath","app/services/");


// initial Controller
include cPath.'Controller.php';
Controller::fomController();
die();


