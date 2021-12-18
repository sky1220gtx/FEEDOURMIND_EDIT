<?php
include vPath.'templates/header.php';
// *************************************
?>



<?php
// call services
include sPath.'Session.php';

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
    </div>
    </div>
<br><br>
Clickl <a href="<?= rPath.'logout' ?>">Here</a> to logout


<?php
// *************************************
include vPath.'templates/footer.php';
?>
