
<!DOCTYPE html>
<html>
<title>FeedOurMind</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="public/assets/css/reset.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="public/assets/css/style.css">
<link rel="stylesheet" href="public/assets/css/about.css">
<link rel="stylesheet" href="public/assets/css/loginstyles.css">
<link rel="stylesheet" href="public/assets/css/work.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
                
                <a href="./" class="w3-bar-item w3-button w3-wide"> <img src="public/assets/logo/Logo.png" alt="">FeedOurMind</a>
            
            <!-- Right-sided navbar links -->
            
            <div class="newnavi">
                <div class="w3-right w3-hide-small">
        
                        <a href="./" class="w3-bar-item w3-button">HOME</a>
                        <a href="./work" class="w3-bar-item w3-button">ARTICLES</a>
                        <a href="#team" class="w3-bar-item w3-button">PROFILE</a>
                        <a href="./about" class="w3-bar-item w3-button">ABOUT</a>
                        <a href="./login" class="w3-bar-item w3-button" style="margin-right: 30px;">LOGIN</a>
                    <!--<i class="fa fa-user">
                        <i class="fa fa-th">
                            <i class="fa fa-send">
                                <i class="fa fa-envelope">-->
                    <!-- <a>
                        <form action="/action_page.php"></form>
                            <input type="text" placeholder="Search.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </a> -->
                    
                </div>
            
            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>

    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
        <a href="./" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
        <a href="./work" onclick="w3_close()" class="w3-bar-item w3-button">ARTICLES</a>
        <a href="#wo" onclick="w3_close()" class="w3-bar-item w3-button">PROFLIE</a>
        <a href="./about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
        <a href="./login" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
    </nav>