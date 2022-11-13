<?php
if(!session_id()){
    session_start();
}

unset($_SESSION['oauth_status']);
unset($_SESSION['userData']);
$_SESSION = array();

session_destroy();
header("Location:./");
exit;
?>