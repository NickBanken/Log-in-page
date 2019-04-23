<?php 
session_start();

if(isset($_SESSION["username"])){

    echo'<h3>Login Succes, Welcome - '.$_SESSION["username"].'</h3>';
}else{
    header("location:log-in.php");
}

if(isset($_POST['logout'])){
    header("location:logout.php");
}
?>