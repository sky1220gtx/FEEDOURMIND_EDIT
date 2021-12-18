<?php
include vPath.'templates/header.php';
// *************************************
?>


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
                    <!-- <span style="color: rgb(255, 255, 255);">OR</span>
                    <a href="loginset.html"><input id="buttonLogin2"type="button" value="Login"></a> -->

                  </div>
                  
                  <div class="inputBx">
                    <p style="color: rgb(255, 255, 255);margin-top: -15px;">Already have an account?<a href="./login"> Login</a></p>
                </div>
                </form>
              </div><!--end of register div-->
          </div>
                   
    </div>

</body>
</html>



<?php
// *************************************
// include 'app/views/templates/footer.php';
?>
