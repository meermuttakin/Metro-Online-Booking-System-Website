 <?php include"dbcon.php";
    
		
			if(isset($_POST['submit']))
			{
				$id=$_POST['scode'];
                
                $query="DELETE FROM purchase WHERE scode='$id'";
                
                $result= mysqli_query($con, $query);
                
                if(!$result)
                    {
                        die('query failed' .mysqli_error($con));
                    }
				
				else 
                {
                    echo "</p>Cancelation Successful</p>";
                }
						

			}
		
		
		?>
    








<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>CANCEL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

/* Add a gray color to all navbar links */
.navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
}

/* On hover, the links will turn white */
.navbar-nav li a:hover {
    color: #fff !important;
}

/* The active link */
.navbar-nav li.active a {
    color: #fff !important;
    background-color:#29292c !important;
}

/* Remove border color from the collapsible button */
.navbar-default .navbar-toggle {
    border-color: transparent;
}

/* Dropdown */
.open .dropdown-toggle {
    color: #fff ;
    background-color: #555 !important;
}

/* Dropdown links */
.dropdown-menu li a {
    color: #000 !important;
}

/* On hover, the dropdown links will turn red */
.dropdown-menu li a:hover {
    background-color: red !important;
}
      
      
      .carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: 0% 0% 30% 0%;
          
}

.carousel-caption h3 {
    color: #fff !important;
}

@media (max-width: 600px) {
    .carousel-caption {
        display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
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
      <a class="navbar-brand" href="#">METRO RAILWAY SITE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">HOME</a></li>
        <li><a href="#">DASHBOARD</a></li>
        <li><a href="#">TRAIN ROUTE</a></li>
        <li><a href="#">FARE QUERY</a></li>  
        <li><a href="#">PURCHASE TICKET</a></li>
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
              
              <li><a href="#">CHANGE PASSWORD</a></li>
              <li><a href="#">ADMIN</a></li>
              <li><a href="#">ABOUT</a></li>
              <li><a href="#">CONTACT US</a></li>  
             
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
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
        
        <form action="cancel.php" method="post">
        <div class="form-group">
            
            
            <div class="form-group">
             <label for="phone">SECURITY CODE : </label>
            <input type="text" name="scode" class="form-control">
            </div>
            
            <input class="btn btn-success" type="submit" name="submit" value="DELETE">
            </div>
        </form>
        
        </div>
    
    </div>
    
   

</body>
</html>
