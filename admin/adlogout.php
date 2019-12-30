<?php 
session_start();
unset($_SESSION['pass']);
header('location:../admin/admin.php');
?>