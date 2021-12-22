<?php
// outputs the username that owns the running php/httpd process
// (on a system with the "whoami" executable in the path)
$output=null;
$retval=null;
exec('git pull', $output, $retval);
echo "Returned status: $retval:\n";
echo '<br>';
echo 'output: <br>';
print_r($output);
?> 