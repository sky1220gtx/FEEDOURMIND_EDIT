<?php
include vPath.'templates/header.php';
// *************************************
?>

<div class="quotes">
    <br><br><br>
        <h3>Profile Page</h3>
        <div class="quote-box">
        <?php
        if($_SESSION['fom_user_name'] != ''){
            echo '<P>“Welcome” '.$_SESSION['fom_user_name'].'</P>';
            global $dataUser;
            $_POST['username']=$_SESSION['fom_user_name'];
            $_POST['password']=$_SESSION['fom_user_password'];
            $dataUser = mLogin::check_login();
        } else {
            echo '<P>“Please Login First” </P>';
        }
        ?>
    </div>
</div>
<hr>

<br>
<table style="width:50%;">
    <tr>
        <td>User ID</td>
        <td><?= $dataUser[0]['userID'] ?></td>
    </tr>
    <tr>
        <td>First Name</td>
        <td><?= $dataUser[0]['FirstName'] ?></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><?= $dataUser[0]['LastName'] ?></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><?= $dataUser[0]['Gender'] ?></td>
    </tr>
    <tr>
        <td>Birthday</td>
        <td><?= $dataUser[0]['Birthday'] ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?= $dataUser[0]['Email'] ?></td>
    </tr>
    <tr>
        <td>Website</td>
        <td><?= $dataUser[0]['Site'] ?></td>
    </tr>
</table>
<br><br>
Clickl <a href="<?= rPath.'logout' ?>">Here</a> to logout


<?php
// *************************************
include vPath.'templates/footer.php';
?>
