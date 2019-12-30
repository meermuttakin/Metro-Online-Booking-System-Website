<?php
		if(isset($_POST['submit']))
		{
		
	 $TID    = $_POST['tid'];   
	 $PNAME   = $_POST['pname'];   	 
	 $PHONE =  $_POST['phone'];
     $JD = $_POST['jd'];
	 $SF =  $_POST['sf'];
     $ST =  $_POST['st'];
	 $CARD= $_POST['card']; 
     $CTYPE= $_POST['ctype']; 
    
      $con = mysqli_connect('localhost', 'root', '', 'metro');
    
    if($con){
        echo "we r connected";
    }
    
    else{
        die("connection failed");
    }
      
	 if(!empty($TID) && !empty($PNAME) &&  !empty($PHONE) && !empty($JD) && !empty($SF) && !empty($ST) && !empty($CARD) && !empty($CTYPE))
     {
        $query = "INSERT INTO purchase(tid,pname,phone,jd,sf,st,card,ctype)";
        $query .="VALUES('$TID', '$PNAME', '$PHONE', '$JD', '$SF', '$ST', '$CARD', '$CTYPE')";
    
    $result= mysqli_query($con, $query);
    
    if(!$result)
    {
        die('query failed' .mysqli_error());
    }
         
    
                
?>    
    