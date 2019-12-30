<?php 
session_start();
unset($_SESSION['pass']);
header('location:../user/signin.php');
?>