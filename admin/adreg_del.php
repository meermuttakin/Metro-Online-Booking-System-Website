<?php 
session_start();
include('../dbcon.php');
 echo $nid=$_GET['id'];


$sq=mysqli_query($con,"delete from registration where userid='$nid'");

if(!$sq)
{
    die('error' .mysqli_error($con));
}
header('location:adreg.php');

?>