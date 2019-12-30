<?php include('../dbcon.php');;
    
    session_start();
    
    $nw=$_SESSION['scd'];
    
    $query = "SELECT * FROM admin where password ='$nw'";
            
    $result = mysqli_query($con, $query);
//    
//    if(!$res)
//    {
//        die('query failed' .mysqli_error());
//    }
//    
//    
   /* 
    while($row = mysqli_fetch_row($res))
    {
        print_r($row);
    }*/




    $sql1="SELECT * FROM purchase";

        $res=mysqli_query($con,$sql1);

    
    ?>
    








<!DOCTYPE html>
<html lang="en">
<head>
    <title>DASHBOARD</title>
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
        
        <a class="navbar-brand" href="index.php"><img src="../pic/images.png" alt="METRO">
        </a>
        
        
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin.php"><i class="fa fa-home"></i><strong>HOME</strong></a></li>
        <li><a href="signin.php"><i class="fa fa-users"></i><strong>DASHBOARD</strong></a></li>
        <li><a href="route.php"><i class="fa fa-road"></i><strong>USERS</strong></a></li>  
        <li><a href="purchase.php"><i class="fa fa-ticket"></i><strong>TICKET</strong></a></li>
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-info"></i>MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
              
              <li><a href="update.php">CHANGE PASSWORD</a></li>
              <li><a href="contact.php">CONTACT US</a></li>  
             
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

    
    
    
<br/>
<br/>
<br/>
<br/>
<br/>
     <h3 style="color:green"><strong>ADMIN INFOMATION</strong></h3>
    <center><b><h1 style="color:green">TICKET BOOKING INFORMATION</h1></b></center>
    <img src="../pic/ic3.png" class="img-responsive" alt="Avatar" style="width:200px">
        
    <br>

    
    
    <div class="container-fluid text-center height=30%">
<div class="row">
    
  <div class="col-sm-3">
    
     <br>
     
    
    <table class="table table-bordered" style="width:50%">
    <thead>

<!--
      <tr>
        <th>USER ID</th>
        <th>TRAIN NAME</th>
        <th>JOURNEY DATE</th>
        <th>STATION FROM</th>
        <th>STATION TO</th>
        <th>SECURITY CODE</th>
            </tr>
-->
    </thead>
        
        
    <tbody>
          
        <?php 
			
					while($row=mysqli_fetch_assoc($result))
					{
						extract($row);
                        
						echo '<tr><th>USER ID</th><td>'.$id .'</td></tr>';	
                        echo '<tr><th>ADMIN NAME</th><td>'.$name .'</td></tr>';
                        echo '<tr><th>PHONE</th><td>'.$phone .'</td></tr>';	
                        echo '<tr><th>EMAIL</th><td>'.$email .'</td></tr>';	
                       
					}
			?>
	
        
    </tbody>
  </table>
    
    
    
    
    
    
    
    </div>
    
    
  <div class="col-sm-9">
      
      
    
      <table class="table table-bordered" style="width:300%">
    <thead>
      <tr>
        <th>USER ID</th>
        <th>TRAIN ID</th>
        <th>JOURNEY DATE</th>
          <th>STATION FROM</th>
          <th>STATION TO</th>
          <th>DELETE</th>
        
      </tr>
    </thead>
    <tbody>
	
	<?php
        
        
        while($row=mysqli_fetch_assoc($res))
        {
            extract($row);
            
            echo "<tr>";
            
            echo '<td>' .$userid . '</td>';
            echo '<td>' .$train . '</td>';
            echo '<td>' .$jd . '</td>';
            echo '<td>' .$sfrom . '</td>';
            echo '<td>' .$sto . '</td>';
            
            ?>
        
        <td>
        <a class="btn btn-success" href="update.php" style="width:60%">DELETE</a>
        </td>
        <?php
            
            echo "</tr>";
        
        }
        
        ?>
        
          </tbody>  
	
  </table>
	  
     
    
    
    
    
    </div>
    

    
</div>
      
   
    <br/>
    
    
    
    
    
    
    
   </div> 
    
    
    
    
    
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
    
    
    
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
