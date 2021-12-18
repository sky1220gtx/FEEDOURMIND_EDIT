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
                include vPath.'login/Login.php';
                if(isset($url[1])){
                    include vPath.'login/Login.php';
                    Login::tes($url[1]);
                    
                }
            } else if( $url[0] == 'logout' ){
                include vPath.'logout/Logout.php';
            } else if( $url[0] == 'work' ){
                include vPath.'work/work.php';
                if ( isset($url[1]) ){
                    echo $url[1];
                }
            } else if( $url[0] == 'signup' ){
                include vPath.'signup/signup.php';
            } else if( $url[0] == 'profile' ){
                include vPath.'profile/Profile.php';
            } else if( $url[0] == 'user' ){
                include vPath.'user/user.php';
            } else {
                include vPath.'404/404.php';
            }


        } else {
            // default page
            include vPath.'home/home.php';
            
        }

        
    }
}