<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
      <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="public/assets/css/style.css">
      <link rel="stylesheet" href="public/assets/css/loginstyles.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">

      <title>Landing Page</title>
  </head>
  <body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
            
            <a href="index.html" class="w3-bar-item w3-button w3-wide"> <img src="public/assets/logo/Logo.png" alt="">FeedOurMind</a>
        
        <!-- Right-sided navbar links -->
        
        <div class="newnavi">
            <div class="w3-right w3-hide-small">
    
                    <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
                    <a href="index.html" class="w3-bar-item w3-button">HOME</a>
                    <a href="#work" class="w3-bar-item w3-button">WORK</a>
                    <a href="#pricing" class="w3-bar-item w3-button">SERVICE</a>
                    <a href="#contact" class="w3-bar-item w3-button" style="margin-right: 30px;">LOGIN</a>
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
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
    <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
    <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">SERVICE</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
</nav>
    <div class="wrapper">
          <div class="main">
            
            <!--<div class="login">
              <form class="form-cont">
                  <h1>Log<span>!</span>n</h1>
                  <input type="text" placeholder="username" id="username">
                  <input type="password" placeholder="password" id="password">
                  <div id="container">
                  <input id="buttonLogin1" type="submit" value="Login">
                  <input id="buttonLogin2"type="submit" value="SignUp">
                </div>
                </form>       
            </div> end of login div-->
              
              <div class="register">
                <form action="" class="form-cont">
                  <h1>R<span>!</span>gister</h1>
                  <input type="text" placeholder="username" id="username">
                  <input type="email" placeholder="email" id="email">
                  <input type="password" placeholder="password" class="password">
                  <input type="password" placeholder="confirm password" class="password">            
                  
                  <div id="container">
                    <input id="buttonLogin1" type="submit" value="Submit">
                    <span style="color: white;">OR</span>
                    <a href="loginset.html"><input id="buttonLogin2"type="button" value="Login"></a>
                  </div>
                </form>
              </div><!--end of register div-->
          </div>
                   
    </div>

</body>
</html>