<?php
        
        include 'dbcon.php';
        
        if(isset($_POST['submit1']))
        {
            $name=$_POST['Name'];
            $email=$_POST['Email'];
            $msg=$_POST['Message'];
            
            
            $sql="INSERT INTO `contact` (`cid`, `name`, `email`, `msg`)";
            $sql .="VALUES (NULL, '$name', '$email', '$msg')";
            
            $result= mysqli_query($con,$sql);
            
            if($result)
            {
                echo "Successful";
            }
            
          else
          {
              die('EROR' .mysqli_error($con));
          }
            
        }
        
        ?>






<!DOCTYPE html>
<html lang="en">
<head>
  <title>CONTACT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
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
      
      
      
      
      
      body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('1.jpg');
    min-height: 100%;
    width: 100%;
}


    
.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
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
    <div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center", style="color:green">CONTACT INFORMATION</h3>
  

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Dhaka, Bangladesh<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +8801521456529<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: meermuttakin@gmail.com<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave us a note  <i class="fa fa-handshake-o"></i>  :</p>
      <form action="contact.php" method="post">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit" name="submit1">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>
    

    
    <br>
    <br>
    <br>
    <br>
         <br>
    <br>
    <br>
    <br>
    <br>
        
    



 
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
