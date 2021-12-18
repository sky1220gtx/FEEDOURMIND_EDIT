<h1>USER</h1>

<?php
include mPath.'user/user.php';

// var_dump($x);
$x=User::show_user();

?>

<hr>

<a href="<?= rPath ?>login">user</a>