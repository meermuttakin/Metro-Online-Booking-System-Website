<?php require '../dbcon.php';
   
		if(isset($_POST['submit']))
		{
		
	    
	 $pname   = $_POST['passenger'];   	 
	 $phone =  $_POST['phone'];
     $email = $_POST['email'];
     $password = $_POST['password'];
	 $card= $_POST['card'];
    $scode= $_POST['scode'];

            
//     $con = mysqli_connect('localhost', 'root', '', 'metro');
//    
//    if($con){
//        echo "we r connected";
//    }
//    
//    else{
//        die("connection failed");
//    }

     if(!empty($pname) &&  !empty($phone)  && !empty($email) && !empty($password) && !empty($card))
     {
         $sql="UPDATE registration SET pname='$pname', phone='$phone', email='$email', password='$password' WHERE scode='$scode'";
	       $result=mysqli_query($con,$sql);
         
         
         
	 if(!$result)
	 {
		 echo mysql_error();
	 }
		
		else
		{
            session_start();
            $_SESSION['random']=$scode;
            echo $_SESSION['random'];
            header('Location: show_update.php');
		}
     }
            
            else
            {
                echo '<div style="position:fixed;top:0;left:0;">plz fill all the blanks</div>';
            }
        }
          
             ?>
             























<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .container {
      padding: 80px 120px;
  }
  
  .navbar {
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity:0.9;
}


.navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
}


.navbar-nav li a:hover {
    color: #fff !important;
}


.navbar-nav li.active a {
    color: #fff !important;
    background-color:#29292c !important;
}


.navbar-default .navbar-toggle {
    border-color: transparent;
}


.open .dropdown-toggle {
    color: #fff ;
    background-color: #555 !important;
}


.dropdown-menu li a {
    color: #000 !important;
}


.dropdown-menu li a:hover {
    background-color: red !important;
}
      
      img {
          width: 500%;
          height: auto;
      }
      
      
.carousel-caption h3 {
    color: #fff !important;
}

@media (max-width: 600px) {
    .carousel-caption {
        display: none; 
    }
}
      
      
      footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
      
      
      .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
      .white
      {
          color: white;
      }
      
    .carousel-inner img {
    
         width:100%;
        
}  
    
      
    .fa {
    padding:5px;
    font-size: 30px;
    width: 50px;
    text-align: center;
    text-decoration: none;
}

      
      
      

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

      .fa-skype {
  background: #00aff0;
  color: white;
}
      
      
      
      
  </style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../index.php"><i class="fa fa-home"></i><strong>HOME</strong></a></li>
        <li><a href="signin.php"><i class="fa fa-users"></i><strong>DASHBOARD</strong></a></li>
        <li><a href="route.php"><i class="fa fa-road"></i><strong>TRAIN ROUTE</strong></a></li>
        <li><a href="purchase.php"><i class="fa fa-search"></i><strong>FARE QUERY</strong></a></li>  
        <li><a href="purchase.php"><i class="fa fa-ticket"></i><strong>PURCHASE TICKET</strong></a></li>
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-info"></i>MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
              
              <li><a href="update.php">CHANGE PASSWORD</a></li>
              <li><a href="logins.php">ADMIN</a></li>
              <li><a href="about.php">ABOUT</a></li>
              <li><a href="contact.php">CONTACT US</a></li>  
             
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

    
   
    
     <br>
    <br>
    <br>
    <br>
    <br>
    
    <div class="container">
    <div class="col-xs-6">
        
        <form action="us_update.php" method="post">
        <div class="form-group">
             <label for="passenger">Passenger Name : </label>
            <input type="text" name="passenger" class="form-control">
            </div>
            
            <div class="form-group">
             <label for="phone">Phone : </label>
            <input type="text" name="phone" class="form-control">
            </div>
            
            <div class="form-group">
             <label for="email">Email Address : </label>
            <input type="text" name="email" class="form-control">
            </div>
            
            <div class="form-group">
            <label for="password">Password : </label>
            <input type="password" name="password" class="form-control">
            </div>
            
            
            <div class="form-group">
             <label for="card">CARD NUMBER : </label>
            <input type="text" name="card" class="form-control">
            </div>
            
            <div class="form-group">
             <label for="scode">SECURITY NUMBER : </label>
            <input type="text" name="scode" class="form-control">
            </div>
            
            
            
            <input class="btn btn-success" type="submit" name="submit" value="UPDATE">
        
        </form>
        
        </div>
    
    </div>
    
    
    

                   
	
    
    
    
    
    
    
    
    
    
    
    


 
<footer class="page-footer center-on-small-only blue-grey lighten-5 pt-0">

    <div style="background-color: #21d192;">
        <div class="container">
            
            <div class="row py-4 d-flex align-items-center">

                
                <div class="col-12 col-md-5 text-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text text-center text-md-left"><h4>Get connected with us on social networks!</h4></h6>
                </div>
                
                <div class="col-12 col-md-7 text-center text-md-right">
                    
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-google"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-skype"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    
                    
                   
                </div>
                

            </div>
            
        </div>
    </div>

    
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            
            <div class="col-md-3 col-lg-4 col-xl-3 mb-r dark-grey-text">
                <h6 class="title font-bold"><strong>Get started</strong></h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="#!" class="dark-grey-text">Home</a></p>
                <p><a href="#!" class="dark-grey-text">Sign up</a></p>
                <p><a href="#!" class="dark-grey-text">Downloads</a></p>
                
            </div>
            
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-r dark-grey-text">
                <h6 class="title font-bold"><strong>Legal</strong></h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="#!" class="dark-grey-text">Terms of Service</a></p>
                <p><a href="#!" class="dark-grey-text">Terms of Use</a></p>
                <p><a href="#!" class="dark-grey-text">Privacy Policy</a></p>
                
            </div>
           
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-r dark-grey-text">
                <h6 class="title font-bold"><strong>Support</strong></h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="#!" class="dark-grey-text">FAQ</a></p>
                <p><a href="#!" class="dark-grey-text">Help desk</a></p>
                <p><a href="#!" class="dark-grey-text">Forums</a></p>
                
            </div>
           
            
            <div class="col-md-4 col-lg-3 col-xl-3 dark-grey-text">
                <h6 class="title font-bold"><strong>Contact</strong></h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p> Mirpur-2, Dhaka , Bangladesh</p>
                <p> meermuttakin@gmail.com</p>
                <p> +880 1741449006</p>
                <p> +880 1521456529</p>
            </div>
            

        </div>
    </div>
    


    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 <a href="https://www.google.com"><strong> MEER MUTTAKIN ALAM</strong></a>
        </div>
    </div>
    
    
</footer>
 
    

</body>
</html>
