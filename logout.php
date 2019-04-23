<?php session_start(); ?>
<?php

session_unset();
session_destroy();
session_start();
$_SESSION['message'] = "You succesfully logged out!";
$_SESSION['msg_type'] = "danger";
header("location: log-in.php");
?>