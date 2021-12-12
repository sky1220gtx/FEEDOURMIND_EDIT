<?php
if ( isset($_GET['url']) ){
    $url = rtrim($_GET['url'], '/');
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $url = explode('/', $url);
    // var_dump($url);
    if( $url[0] == 'about' ){
        include 'app/views/about/about.php';
    } else if( $url[0] == 'login' ){
        include 'app/views/login/login.php';
    } else if( $url[0] == 'work' ){
        include 'app/views/work/work.php';
    } else if( $url[0] == 'signup' ){
        include 'app/views/signup/signup.php';
    } else if( $url[0] == 'user' ){
        include 'app/views/user/user.php';
        if( $url[1] == 'test' ){
            echo '<hr> new test ';
        }
    } else {
        include 'app/views/404/404.php';
    }


} else {
    // default page
    include 'app/views/home/home.php';
    
}
