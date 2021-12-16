<?php
class Controller {
    public static function fomController(){

        // get url
        if ( isset($_GET['url']) ){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            // var_dump($url);
            // echo sizeof($url);

            // pharse url
            if( $url[0] == 'about' ){
                include vPath.'about/about.php';
            } else if( $url[0] == 'login' ){
                include 'app/views/login/Login.php';
                if(isset($url[1])){
                    include 'app/models/login/Login.php';
                    Login::tes($url[1]);
                    
                }
            } else if( $url[0] == 'work' ){
                include 'app/views/work/work.php';
            } else if( $url[0] == 'signup' ){
                include 'app/views/signup/signup.php';
            } else if( $url[0] == 'profile' ){
                include 'app/views/profile/Profile.php';
            } else if( $url[0] == 'user' ){
                include 'app/views/user/user.php';
            } else {
                include 'app/views/404/404.php';
            }


        } else {
            // default page
            include 'app/views/home/home.php';
            
        }
    }
}