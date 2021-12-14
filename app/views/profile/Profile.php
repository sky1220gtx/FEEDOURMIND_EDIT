<?php
include 'app/views/templates/header.php';
// *************************************
?>


<div class="quotes">
    <br><br><br>
        <h3>Profile Page</h3>
        <div class="quote-box">
        <P>“Welcome” </P>
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
