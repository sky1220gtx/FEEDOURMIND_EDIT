<?php
include vPath.'templates/header.php';
// *************************************
?>

<?php

if( isset($_SESSION['fom_user_name']) ){
  //header('Location: '.rPath.'profile');
}

if ( isset($_POST['username']) ){
  ?><br><br><br><br><br><br><br><br><br><br><?php
  $chk=mSignup::check_login();

  if($chk[0]==NULL){
    //check if user is doesnt exist
    $dataUser=mSignup::insert();
    $_SESSION['fom_user_name'] = $dataUser[0]['userID'];
    $_SESSION['fom_user_password'] = $dataUser[0]['password'];
    header('Location: '.rPath.'login');
  } else {
    $_SESSION['fom_user_name'] = $chk[0]['userID'];
    $_SESSION['fom_user_password'] = $chk[0]['password'];
    header('Location: '.rPath.'login');
  }
  
  
  
}
?>
    <div class="wrapper">
          <div class="main">
              <div class="register">
                <form action="<?= rPath.'signup' ?>" method="post" class="form-cont">
                  <h1>R<span>!</span>gister</h1>
                  <?= $_SESSION['error_password'] ?>
                  <input type="text" placeholder="username" id="username" name="username">
                  <input type="email" placeholder="email" id="email" name="email">
                  <input type="password" placeholder="password" class="password" name="password">
                  <input type="password" placeholder="confirm password" class="password" name="cpassword">            
                  
                  <div id="container">
                    <input id="buttonLogin1" type="submit" value="Submit">
                  </div>
                  
                  <div class="inputBx">
                    <p style="color: rgb(255, 255, 255);margin-top: -15px;">Already have an account?<a href="./login"> Login</a></p>
                </div>
                </form>
              </div>
          </div>
                   
    </div>

</body>
</html>



<?php
// *************************************
// include 'app/views/templates/footer.php';
?>
