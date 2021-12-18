<?php
include sPath.'Session.php';
fomSession::Destroy();
header('Location: '.rPath);