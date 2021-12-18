<?php
include vPath.'templates/header.php';
// *************************************


// Call Model
include mPath.'login/Login.php';

// call function
$dataUser = Login::check_login();


if( isset($_SESSION['fom_user_name']) ){
    header('Location: '.rPath.'profile');
}

if ( isset($_POST['username']) ){
    ?><br><br><br><br><br><br><br><br><br><br><?php
    $_SESSION['fom_user_name'] = $dataUser[0]['userID'];
    $_SESSION['fom_user_password'] = $dataUser[0]['password'];
    header('Location: '.rPath.'login');
    
}


?>

    <div class="wrapper">
          <div class="main">
            
            <div class="login">
              <form class="form-cont" action="<?= rPath.'login' ?>" method="post">
                  <h1>Log<span>!</span>n</h1>
                  <input type="text" placeholder="username" id="username" name="username">
                  <input type="password" placeholder="password" id="password" name="password">
                  <div class="remember">
                    <p style="color: rgb(255, 255, 255);margin-top: -15px;"><label><input type="checkbox" name=""> Remember me</label></p>
                </div>
                <div class="inputBx">

                    <input type="submit" value="Login" name="" style="margin-top: -20px;font-weight: bold;">
                </div>
                <div class="inputBx">
                    <p style="color: rgb(255, 255, 255);margin-top: -15px;">Don't have an account?<a href="./signup"> Sign up</a></p>
                </div>
                  <!-- <div id="container">
                  <input id="buttonLogin1" type="submit" value="Login">
                  <a href="signup.html"><input id="buttonLogin2"type="button" value="SignUp"></a></div> -->
                  <h3>Login with social media</h3>
                  <ul class="sci">
                      <li>
                          <a href="https://ja-jp.facebook.com/login" class="fa fa-facebook"></a>
                      </li>
                      <li>
                          <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                      </li>
                      <li>
                          <a href="https://mobile.twitter.com/i/flow/login" class="fa fa-twitter"></a>
                      </li>
                      <li>
                          <a href="https://slack.com/signin#/signin" class="fa fa-slack"></a>
                      </li>
                  </ul>         
                </div>
                
                </form>     
                
            </div> <!--end of login div-->
            
          </div>
                   
    </div>

</body>
</html>



<?php
// *************************************
// include 'app/views/templates/footer.php';
?>
