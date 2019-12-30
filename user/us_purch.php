<?php include"../dbcon.php";
 session_start();

echo $_SESSION['user'];

    
		if(isset($_POST['submit']))
		{
           
		        $tid = $_POST['tid'];   
                $jd = $_POST['jd'];
	            $sf =  $_POST['sf'];
                $st =  $_POST['st'];
                $rd=rand(0,9999999999);  
                $u_id=$_SESSION['user'];
                $bank = $_POST['bank'];   
                $account = $_POST['account'];
	            $pin =  $_POST['pin'];
                $scode =  $_POST['scode'];
	
            
   echo $_SESSION['user'];        
            
            
     if(!empty($tid) && !empty($jd) && !empty($sf) && !empty($st) && !empty($rd))
     {
         $sq = "SELECT count(userid) as ct from purchase where userid='$u_id' AND train='$tid' AND jd='$jd'";
         
         $rem = mysqli_query($con,$sq);
         
          if(!$rem)
         {
             echo mysqli_error();
         }
			
					while($row=mysqli_fetch_assoc($rem))
					{
						extract($row);
                        
                       
					}
        
     echo $_SESSION['user'];            
         
         $sql="SELECT count(userid) as cnt FROM `purchase` WHERE ((sfrom<=$sf AND sto>$sf) OR (sfrom<$st AND sto>=$st)) AND (jd=$jd)";
         
         
         
         $res = mysqli_query($con,$sql);
			
					while($row=mysqli_fetch_assoc($res))
					{
						extract($row);
                        
                       
					}
         
         
         
         echo $cnt;
         
    
         
         if($cnt>10 || $ct>=2)
         {
             echo "there is full";
         }
             
               
	 else
     {
         
          echo $_SESSION['user']; 
        $query = "INSERT INTO `purchase` (`userid`, `train`, `jd`, `sfrom`, `sto`, `scode`)";
        $query .= "VALUES ('$u_id', '$tid', '$jd', '$sf', '$st', '$rd')";
         
        $result= mysqli_query($con, $query);
	      
         
          
//             echo mysqli_error($con);
//        
         
         
        $query1 = "INSERT INTO `card` (`seat_id`, `bank`, `acc_num`, `pin`, `scode`)";
        $query1 .= "VALUES (NULL, '$bank', '$account', '$pin', '$scode')";
         
        $res= mysqli_query($con, $query1);
	      
         
         if(!$result || !$res)
         {
             echo mysqli_error($con);
         }
         
         
       else
       {
            session_start();
            $_SESSION['random']=$rd;
            echo $_SESSION['random'];
            header('Location: us_ticket.php');
       }
               
     }
    }
}
                
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
        
        <a class="navbar-brand" href="../index.php"><img src="../pic/images.png" alt="METRO">
        </a>
        
        
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../index.php"><i class="fa fa-home"></i><strong>HOME</strong></a></li>
        <li><a href="dashboard.php"><i class="fa fa-users"></i><strong>DASHBOARD</strong></a></li>
        <li><a href="us_purch.php"><i class="fa fa-road"></i><strong>PURCHASE</strong></a></li>  
        <li><a href="us_ticket.php"><i class="fa fa-ticket"></i><strong>TICKET</strong></a></li>
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-info"></i>MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
              
              <li><a href="uschange_pass.php">CHANGE PASSWORD</a></li>
              <li><a href="uslogout.php">LOGOUT</a></li>  
             
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
      <img src="../pic/k1.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>MIRPUR</h3>
      </div> 
    </div>

    <div class="item">
      <img src="../pic/k4.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>FARMGATE</h3>
      </div> 
    </div>

    <div class="item">
      <img src="../pic/k5.jpg" alt="Los Angeles">
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
    <br>
    <br>
    <br>
     
    <br>
    <br>
    <br>
    <br>
    

    
    
    <div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
        
        
        
 
    
        
        <form action="us_purch.php" method="post">
            
            <div class="form-group">
             <label for="tid">TRAIN NAME : </label>
            <select name="tid" class="form-control" >
                <option value="1">PADMA</option>
                <option value="2">MEGHNA</option>
                <option value="3">JAMUNA</option>
                <option value="4">KORNOFULI</option>
                <option value="5">SHITOLOKKHA</option>
                <option value="6">BRAHMMAPUTRA</option>
            </select>
            </div>
            
            <div class="form-group">
             <label for="jd">JOURNEY DATE : </label>
            <input type="date" name="jd" class="form-control">
            </div>
            
            
            <div class="form-group">
             <label for="sf">STATION FROM : </label>
            <select name="sf" class="form-control" >
                <option value="1">MIRPUR</option>
                <option value="2">KAZIPARA</option>
                <option value="3">FARMGATE</option>
                <option value="4">TEJGAO</option>
                <option value="5">SAYEDABAD</option>
                <option value="6">JATRABARI</option>
            </select>
            </div>
            
            
            
            <div class="form-group">
             <label for="st">STATION TO : </label>
            <select name="st" class="form-control" >
                <option value="1">MIRPUR</option>
                <option value="2">KAZIPARA</option>
                <option value="3">FARMGATE</option>
                <option value="4">TEJGAO</option>
                <option value="5">SAYEDABAD</option>
                <option value="6">JATRABARI</option>
            </select>
            </div>
            
            
            
            
            <div class="form-group">
             <label for="bank">MOBILE BANK : </label>
            <select name="bank" class="form-control" >
                <option value="1">BIKASH</option>
                <option value="2">ROCKET</option>
                <option value="3">MOBI-CASH</option>
                <option value="4">E-CASH</option>
                <option value="5">I-CASH</option>
            </select>
            </div>
            
            
            
            <div class="form-group">
             <label for="account">ACCOUNT NUMBER : </label>
            <input type="text" name="account" class="form-control">
            </div>
            
            <div class="form-group">
             <label for="pin">PIN NUMBER : </label>
            <input type="text" name="pin" class="form-control">
            </div>
            
            <div class="form-group">
             <label for="scode">SECURITY NUMBER : </label>
            <input type="text" name="scode" class="form-control">
            </div>
            
            
            <input class="btn btn-success" type="submit" name="submit" value="CONFIRM">
            
            
            
<!--        <input class="btn btn-success" type="submit" name="submit" value="PURCHASE">-->
        
        </form> 
        
        
        
        </div>
  <div class="col-sm-4"></div>
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
