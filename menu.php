<?php
  session_start();
  $id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bay View</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
  <style type="text/css">

    body{
      overflow-x: hidden;
      background-image: url(./images/bg11.jpg);
    }

    .logo img{
      height:55px;
    }

    .nav-link{
      padding: 8px 10px 8px !important;
    }

    .navigation a{
      font-size: 17px;
      color: black;
    }

    .navigation a:hover{
      color: #ff5c33;
    }


    .navigation a.active-link{
      background-color: #ff5c33;
      color:  white;
      border-radius: 5px;
      
    }


    .dropdown-menu a:active{
      background-color: #404040;
    }

    .nav-item .fa{
      font-size: 35px;
      margin-top: 2px;
      color: #ff5c33;
    }

    .navbar-center { 
            position: relative; 
            left: 27%;
        } 
        .navi{
          background-color: #404040;
        }

        .navi nav{
          padding: 0px; 
           margin-bottom: 40px;
        }

        .navi li{
          margin-left: 20px;
        }

    .navi a{
      font-family: 'Merriweather', serif;
      color: #ff4040;
      font-size: 20px;
    }

    .navi a:hover{
      color: white;
      background-color: #ff5c33;
    }

    .vmenu{
      background-color: #404040;
      overflow-x: hidden;
      padding: 10px;
    }

    .vmenu a{
      color: #ff3030;
    }

    .vmenu a:hover{
      background-color: white;
    }

    .card img{
      height: 270px;
    }

    .card {
      /*height: 82.5%;*/
      margin-bottom: 20px;
      text-align: center;
    }

    .card-text{
      font-style: italic;
      font-size: 16px;
      color: #404040;
    }

    .card a:hover{
      color: #404040;
    }

    .btn{
      color: white;
      background-color: #ff5c33;
    }


    .btn1:hover{
      background-color: #404040;
    }


    .modal-header h4{
      text-align: center;
      font-family: 'Merriweather', serif;
      letter-spacing: 1px;
      font-weight: 900;
    }

    .cart-price{
      margin-top: 10px;
    }

    .cart-total{
      margin-top: 20px;
      margin-bottom: 10px;
    }

    .fa{
      font-size: 30px;
      margin-right: 10px;
    }

    .foot{
      background-color: lightgrey;
    }
  </style>
</head>
<body >
  <nav class="navbar navbar-expand-lg">
  <div class="container navigation">
    <a class="navbar-brand logo" href="index.php">
      <img src="./images/logo21.png">
    </a>
    <button class="navbar-toggler" type="button dropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item px-2">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link active-link" href="#">Menu</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="about_us.php">About</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            My Account
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="profile.php">Profile</a>
            <a class="dropdown-item" href="#">My Orders</a>
            <a class="dropdown-item" href="logout.php">LogOut</a>
          </div>
        </li>
        <li class="nav-item px-2">
          <a href="cart.php"><span style=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
        </li>


      </ul>
      </div>
      </div>
  </nav>


<!-- <div class="jumbotron">
  <div class="jumbtext">
    </div>
  </div>
 -->
<div class="container-fluid">
<div class="row">
<div class="col-lg-2">
<div class="vmenu" id="vmenus">

<ul class="nav flex-column menu">
  <li class="nav-item">
    <a class="nav-link active-link" href="?page=special">Chef's Special</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="?page=bestsellers">Bestsellers</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="?page=breakfast">Breakfast</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="?page=starter">Starter</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="?page=maincourse">Main Course</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="?page=desserts">Desserts</a>
  </li>

   <li class="nav-item">
    <a class="nav-link" href="?page=beverages">Beverages</a>
  </li>

</ul>
</div>
</div>


<div class="col-lg-10">
<form method=POST>

<?php
if (isset($_GET['page'])){
  $p = $_GET['page'];
  $page = $p.".php";
 
  if(file_exists($page))
    include($page);

  }

  else{
  include 'special.php';
}
?>
</form> 
</div>

<?php

  if(isset($_POST['add'])){
    include('connect.php');
    $pid=$_POST["add"];
    $res= mysqli_query($db,"SELECT * FROM products WHERE p_id='$pid'");
    $row=mysqli_fetch_array($res);

    $price=$row[2]; //price
    $pname=$row[1]; //pname
    $img=$row[4];
    
    $create = "CREATE TABLE IF NOT EXISTS cart (c_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,u_id INT, pid INT, pname VARCHAR(255) NOT NULL, price VARCHAR(255) NOT NULL, qty INT, p_path VARCHAR(255) NOT NULL)";
    if (mysqli_query($db, $create)) 
    {

        $result = mysqli_query($db,"SELECT * FROM cart WHERE pid = '$pid' ");
        if (!$result) {
            printf("Error: %s\n", mysqli_error($db));
            exit();
        }
        $res1=mysqli_fetch_array($result);
        $num_rows = mysqli_num_rows($result);

        if($num_rows == 0) 
        {
            $query = "INSERT INTO cart (u_id,pid,pname,price,qty,p_path) VALUES('$id','$pid','$pname','$price','1','$img')"; 
            if(mysqli_query($db, $query))  
                {  
                echo '<script>alert("Item added to cart successfully!")</script>'; 
                }  

                else
                {
                  echo '<script>alert("Failed to add item to cart. Try again.")</script>'; 
                  echo "Error: <br>" . mysqli_error($db); 
                }

                } 
        else {
            $q=$res1[5];
            $q = $q + 1;
            $query = "UPDATE cart SET qty= '$q' WHERE pid='$pid' ";
          
            if(mysqli_query($db, $query))  
                { 
                echo '<script>alert("Item added to cart successfully!")</script>';  
                }  

                else
                {
                  echo '<script>alert("Failed to add item to cart. Try again.")</script>';  
                  // echo "Error: <br>" . mysqli_error($db);
                }

            }
    } 
    else 
    {
            echo "Error creating table: " . mysqli_error($db);
    }
  }
?>



</div>
</div>


<footer class="page-footer font-small stylish-color-dark pt-4 foot" id="footer">

  <!-- Footer -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Bay View Cafe</h5>
        <p>Hotel Harbour View rooftop, PJ Ramchandani Marg, Apollo Bandar, Colaba, Mumbai, Maharashtra 400001</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- -->
        <h5 class="font-weight-bold mt-3 mb-4">Opening Hours</h5>

        <ul class="list-unstyled">
          <li>
            <p>Monday to Friday : 9 am to 11 pm</p>
          </li>
          <li>
            <p>Saturday : 11 am to 11 pm</p>
          </li>
          <li>
            <p>Sunday : 9 am to 12 am</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- -->
        <h5 class="font-weight-bold mt-3 mb-4">Our Social Media</h5>

         <ul class="list-unstyled list-inline">
      <li class="list-inline-item">
        <a>
          <i class="fa fa-facebook-square"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a>
          <i class="fa fa-instagram"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a>
          <i class="fa fa-youtube-play"> </i>
        </a>
      </li>
    </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <hr>

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#">BayView.com</a>
  </div>
  <!-- Copyright -->

</footer>

<!-- Footer -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>