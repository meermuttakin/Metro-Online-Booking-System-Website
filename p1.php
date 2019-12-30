<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>signup</title>
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


    <br>
    <br>
    <br>
    <br>
    <br>
    
    <div class="container">
    <div class="col-xs-6">
        
        <form action="p1.php" method="post">
        <div class="form-group">
             <label for="passenger">Passenger Name : </label>
            <input type="text" name="passenger" class="form-control">
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
             <label for="address">Address : </label>
            <input type="text" name="address" class="form-control">
            </div>
            
            <div class="form-group">
             <label for="phone">Phone : </label>
            <input type="text" name="phone" class="form-control">
            </div>
            
            <input class="btn btn-success" type="submit" name="submit" value="REGISTER">
        
        </form>
        
        </div>
    
    </div>
    
    
    
    
    <?php

if(isset($_POST['submit']))
{
    $user = $_POST['passenger'];
    $email = $_POST['email'];
    $pass = $_POST['password']; 
    $address = $_POST['address']; 
    $phone = $_POST['phone']; 
    $con = mysqli_connect('localhost', 'root', '', 'metro');
    
    if($con){
        echo "we r connected";
    }
    
    else{
        die("connection failed");
    }
    
    
    $query = "INSERT INTO registration(pname,email,password,address,phone)";
    $query .="VALUES('$user', '$email', '$pass', '$address', '$phone')";
    
    $result= mysqli_query($con, $query);
    
    if(!$result)
    {
        die('query failed' .mysqli_error());
    }
}

?>

<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>
    
    
    
</body>
</html>




/////////////////////////




    <?php include"dbcon.php";
    
     session_start();
        if(isset($_SESSION['random']))
           {  
            $md=$_SESSION['random'];
            
    $query = "select * from purchase where scode='$md'";
            
    $res = mysqli_query($con, $query);
    
    if(!$res)
    {
        die('query failed' .mysqli_error());
    }
    
    
   /* 
    while($row = mysqli_fetch_row($res))
    {
        print_r($row);
    }*/
    
    ?>
    
    <table class="table table-hover">
    <thead>
      <tr>
        <th>TRAIN ID</th>
        <th>PASSENGER NAME</th>
        <th>PHONE</th>
        <th>JOURNEY DATE</th>
        <th>STATION FROM</th>
        <th>STATION TO</th>
        <th>CARD</th>
        <th>CARD TYPE</th>
        <th>SECURITY CODE</th>
      </tr>
    </thead>
        
        
    <tbody>
          
        <?php 
			
					while($row=mysqli_fetch_assoc($res))
					{
						extract($row);
						echo '<tr><td>'.$tid .'</td>';
						echo '<td>'.$pname .'</td>';
						echo '<td>'.$phone .'</td>';
						echo '<td>'.$jd .'</td>';
                        echo '<td>'.$sf .'</td>';
                        echo '<td>'.$st.'</td>';
                        echo '<td>'.$card .'</td>';
						echo '<td>'.$ctype .'</td>';
                        echo '<td>'.$rd .'</td></tr>';
                       
					}
				
			
			?>
	
        
    </tbody>
  </table>
    <?php
          echo '<h1>Please note the secuirity code..........</h1>';
               echo '<a href="updates.php" style="color:black; font-size:30px;">Click here to update your booking</a>';
	}
        
	?>

