<?php
setcookie('email','');
setcookie('pass','');
session_start();
session_destroy();
header('location:../connexion.php');
?>