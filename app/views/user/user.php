<h1>USER</h1>

<?php
include 'app/models/user/user.php';

// var_dump($x);
$x=User::show_user();

?>

<hr>

<a href="./login">user</a>