<?php include 'dbcon.php';

if(isset($_POST['submit']))
{
    $user = $_POST['email'];
    $pass = $_POST['password'];    
    
   
    
    $query = "SELECT email,password FROM `registration` WHERE email='$user' AND password='$pass'";
    
    $result= mysqli_query($con, $query);
    
    if(!$result)
    {
        die('query failed' .mysqli_error());
    }
    
    else
    {
        session_start();
        $_SESSION['scd']=$pass;
        header('Location:user/dashboard.php');
        
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

      
      
      
   
.navbar-brand {
  padding: 0px;
    
}
.navbar-brand>img {
  height: 160%;
  padding: 15px;
  width: auto;
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
<!--    <a class="navbar-brand" href="index.php"></a>-->
        
        <a class="navbar-brand" href="index.php"><img src="./pic/images.png" alt="METRO">
        </a>
        
        
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><i class="fa fa-home"></i><strong>HOME</strong></a></li>
        <li><a href="./user/signin.php"><i class="fa fa-users"></i><strong>DASHBOARD</strong></a></li>
        <li><a href="route.php"><i class="fa fa-road"></i><strong>TRAIN ROUTE</strong></a></li>
<!--        <li><a href="purchase.php"><i class="fa fa-search"></i><strong>FARE QUERY</strong></a></li>  -->
        <li><a href="./user/signin.php"><i class="fa fa-ticket"></i><strong>PURCHASE TICKET</strong></a></li>
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-info"></i>MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
              
             
              <li><a href="./admin/admin.php">ADMIN</a></li>
              <li><a href="about.php">ABOUT</a></li>
              <li><a href="contact.php">CONTACT US</a></li>  
             
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

    
    
    
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="./pic/k1.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>MIRPUR</h3>
      </div> 
    </div>

    <div class="item">
      <img src="./pic/k4.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>FARMGATE</h3>
      </div> 
    </div>

    <div class="item">
      <img src="./pic/k5.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>KOMLAPUR</h3>
      </div> 
    </div>
  </div>
        
        
  

  
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
   
    <br>
    
    
    
    <div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-1 sidenav">
<!--
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
-->
    </div>
    <div class="col-sm-8 text-left"> 
      <center><h1 style="color:green">METRO RAILWAY MANAGEMENT</h1></center>
      <p>This is an integrated service which provide all information about the metro rail and its routes for public. The proposed system is a web based application which provides information regarding timings, routes, fair.
        </p>
        <p>
This system manages public feedback about services through its complaint management system. This system also contains an online ticket recharge module where users can recharge their smart cards online through the site. 
        </p>
        <p>

There is also an admin module where admin can add stations, trains, routes and also update the fairs. The admin is a panel consisting of a group of authorized persons.
</p>
      
    </div>
    <div class="col-sm-3 sidenav">
      
        
        <form action="index.php" method="post">
        
             <center> <img src="./pic/ic3.png" id="mgg" alt="Avatar" style="width:200px">
                </center>
            <br>
            <div class="form-group">
             <label for="email">EMAIL ADDRESS : </label>
            <input type="text" name="email" class="form-control">
            </div>
            
            <div class="form-group">
            <label for="password">PASSWORD : </label>
            <input type="password" name="password" class="form-control">
            </div>
            
            <input class="btn btn-success" type="submit" name="submit" value="SIGN IN" style="width:50">
            <a class="btn btn-primary" href="./user/signup.php">REGISTRATION</a>
        
        
        </form>
        
        
        
    </div>
  </div>
</div>
    
   <br>
    
    
    
    
    
<!--
    
    <div class="container-fluid text-center height=30%">    
  <div class="row content">
    
    <div class="col-sm-9 text-left"> 
      <h1><center>Welcome To My Project</center></h1>
      <p>This line was built after an approximately 20-year battle,[6] starting in 1983 when Houston voters rejected a rail plan by referendum.[7] A voter referendum in 1988 approved a 20-mile (32 km) light rail plan;[8] however, Bob Lanier was elected mayor in 1992 and stopped the plan.[7] In 1991, U.S. Rep. Tom DeLay removed $65 million in federal funding for the rail line.[7] Then, Houston drew up a rail plan with entirely local funding. In 2001, several groups sued to stop construction, claiming that the METRO organization was a "private business" and subject to Houston City Charter provisions regulating business use of its streets;[9] they obtained 2 temporary injunctions in January 2001, which were reversed by appeals court on March 9, 2001.[9]

</p>
      <hr>
      <h3>Test</h3>
      <p>By Meer Muttakin Alam</p>
    </div>
    <div class="col-sm-3 sidenav">
        
        <div>
        
        <form action="signin.php" method="post">
        
             <center> <img src="./pic/ic3.png" id="mgg" alt="Avatar" style="width:200px">
                </center>
            <br>
            <div class="form-group">
             <label for="email">EMAIL ADDRESS : </label>
            <input type="text" name="email" class="form-control">
            </div>
            
            <div class="form-group">
            <label for="password">PASSWORD : </label>
            <input type="password" name="password" class="form-control">
            </div>
            
            <input class="btn btn-success" type="submit" name="submit" value="SIGN IN" style="width:50">
            <a class="btn btn-primary" href="signup.php">REGISTRATION</a>
        
        
        </form>
        
        </div>
        <br>
        
      
        
    </div>
  </div>
</div>

-->

 
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
