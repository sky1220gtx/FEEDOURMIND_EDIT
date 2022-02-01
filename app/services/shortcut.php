<?php
// set path
// controller path
define("cPath","app/controllers/");
// model path
define("mPath","app/models/");
// view path
define("vPath","app/views/");
// service path
define("sPath","app/services/");
// Root Path
$ServerName = $_SERVER['SERVER_NAME'];
if ( $ServerName == '127.0.0.1' || $ServerName == 'localhost' ){
    define("rPath", "/fom/");
} else {
    define("rPath", "/");
}