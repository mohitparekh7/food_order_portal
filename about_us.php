<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Bay View</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
	<style type="text/css">

		body{
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
			color: 	white;
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

		.jumbotron{
			background-image: url('./images/restuarant.jpg');
			height: 400px;
			background-position: center;
			opacity: 85%;
			filter: blur(5px);

		}

		.detail{
			margin-top: 50px;
			margin-bottom: 20px;
		}

		.detail h6{
			font-size: 14px;
		}

		.detail p{
			font-style: italic;
			text-align: center;
		}

		.im{
			height: 450px;
			margin-bottom: 10px;
		}


		.leads{
			margin-top: 10px;
			text-align: center;
			font-size: 30px; 
			font-weight: 700;
			background: rgb(0, 0, 0);
  			background: rgba(0, 0, 0, 0.15); 
			color: #ff3300;
			font-family: 'Merriweather', serif;
		}


		.foodv video{
			width: 90%;
			margin: auto;
			display: block;
			margin-right: 0px;
			margin-bottom: 30px;
		}

		h3{
			font-family: 'Merriweather', serif;
			margin-top: 30px;
			text-align: center;
			margin-bottom: 40px;
			padding: 10px;
			font-weight: bolder;

		}

		.cheff{
			font-family: 'Merriweather', serif;
			background: rgb(0, 0, 0);
  			background: rgba(0, 0, 0, 0.15); 
			color: #ff3300;
			margin-top: 30px;
			}

		.chef{
			margin-bottom: 50px;

		}

		.chef p{
			font-family: 'Merriweather', serif;
			margin-top: 10px;
			font-style: italic;
			text-align: center;
			font-size: 18px;
		}

		.test{
			font-family: 'Merriweather', serif;
			background: rgb(0, 0, 0);
  			background: rgba(0, 0, 0, 0.15); 
			color: #ff3300;
			font-weight: bolder;
		}

		.col{
			margin: auto;
			display: block;
		}

		.card{
			background-color: #d9d9d9;
			margin-top: 20px;
			border: 0px;
			margin-bottom: 40px;
		}

		.card img{
			width: 70%;
			border-radius: 50%;
			margin: auto;
			margin-top: 20px;
		}

		.card p{
			font-style: italic;
			padding: 10px;
		}


		.name{
			color: #ff471a;
			font-weight: bold;
			text-align: right;
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
<body>
	<nav class="navbar navbar-expand-lg">
	<div class="container navigation">
	  <a class="navbar-brand logo" href="index.php">
	  	<img src="./images/logo21.png">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>


	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item px-2">
	        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item px-2">
	        <a class="nav-link" href="menu.php">Menu</a>
	      </li>
	      <li class="nav-item px-2">
	        <a class="nav-link active-link" href="#">About</a>
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
	          <a class="dropdown-item" href="orders.php">My Orders</a>
	          <a class="dropdown-item" href="logout.php">LogOut</a>
	        </div>
	      </li>
	      <li class="nav-item px-2">
	      	<a href="cart.php"><span style=" color:green; font-size:30px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
	      </li>


	    </ul>
	  	</div>
	  	</div>
	</nav>



<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner im">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/restuarant.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/view11.jpg" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true" style="width: 30px; height: 30px; opacity: 100%;"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true" style="width: 30px; height: 30px; opacity: 100%;"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

</div>
</div>
</div>


<div class="leads align-text-center">
	  <h3>ABOUT US</h3>
</div>

<div class="container detail">
	<div class="row">
	<div class="col-lg-4 align-self-center">
	<center><h4>WELCOME TO BAYVIEW</h4></center>
	<center><h6><i>PREMIUM RESTAURANT IN THE HEART OF MUMBAI</i></h6></center>
	<p>Our vision goes beyond just preparing quality, authentic, hygenic and mouth watering food.We specialise in preparing traditional pan-asian dishes from the asian subcontinent with a sophiticated approach and maintaing authencity so you can experince something unique.</p>
	<p>Let us take you on a jouney to sublime your senses, tease your taste buds and discover true cultural food that cant be matched or replicated.
	</p>
	</div>

	<div class="col-lg-8">
		<div class="foodv">
			<video muted controls autoplay>
				<source src="./images/foodvideo1.mp4" type="video/mp4">
 				Your browser does not support the video tag.
			</video>
		</div>
	</div>
</div>
</div>


<div class="container-fluid cheff">
	<h3>OUR CHEFS</h3>
</div>

<div class="container-fluid chef">
	<div class="row">
		<div class="col-lg-3">
			<img src="./images/c1.jpg" class="col">
			<p>Hriday Shetty</p>
		</div>
		<div class="col-lg-3">
			<img src="./images/c2.jpg" class="col">
			<p>Ken Wellington</p>
		</div>
		<div class="col-lg-3">
			<img src="./images/c3.jpg" class="col">
			<p>Samaayra Singh</p>
		</div>
		<div class="col-lg-3">
			<img src="./images/c4.jpg" class="col">
			<p>Mohit Doshi</p>
		</div>
	</div>
	
</div>

<div class="container-fluid test">
	<h3>TESTIMONIALS</h3>
</div>

<div class="container">
	<div class="row">
	<div class="col-lg-4">
	<div class="card" style="">
  <img class="card-img-top" src="./images/cust41.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">"The restaurent service and presentation was amazing the staff was efficient and so well mannered and kind.The service was quick and way professional the view is gorgeous!</p>
    <p class="name"> -Kirti Kulhari</p>
  </div>
</div>
</div>

<div class="col-lg-4">
<div class="card" style="">
  <img class="card-img-top" src="./images/cust2.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">"I loved this hidden little gem , the food is delicious it has chilled vibe and the restaurent itself is absolutely beautiful. I would always prefer this restaurent over others."</p>
    <p class="name"> -Rohit Khandelwal</p>
  </div>
</div>
</div>

<div class="col-lg-4">
<div class="card" style="">
  <img class="card-img-top" src="./images/cust3.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">"Been coming here for more than 10 years now and still love this place. I refuse to go to any other restaurent. Owners are always friendly and very welcoming to everyone."</p>
    <p class="name"> -Dolly Singh</p>
  </div>
</div>
</div>

</div>


</div>

<footer class="page-footer font-small stylish-color-dark pt-4 foot">

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

	    </li> -->
 		</ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer -->


  <hr>

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/">BayViewCafe.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
