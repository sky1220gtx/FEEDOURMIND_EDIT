<?php
include 'app/views/templates/header.php';
// *************************************
?>



<?php
// call services
include 'app/services/fomSession.php';
?>


<div class="quotes">
    <br><br><br>
        <h3>Profile Page</h3>
        <div class="quote-box">
        <?php
        if($_SESSION['fom_user_name'] != ''){
            echo '<P>“Welcome” '.$_SESSION['fom_user_name'].'</P>';
        } else {
            echo '<P>“Please Login First” </P>';
        }
        ?>
        <P>
        <?php
            // select from user
            include 'app/models/user/user.php';
            User::show_user();
        ?>
        </P></div>
    </div>
<br><br>


<?php
// *************************************
include 'app/views/templates/footer.php';
?>
