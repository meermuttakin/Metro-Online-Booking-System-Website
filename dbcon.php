<?php
 
    $con = mysqli_connect('localhost', 'root', '', 'metro');
    
    if($con){
        //echo "we r connected";
    }
    
    else{
        die("connection failed");
    }

?>

