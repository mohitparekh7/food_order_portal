<?php
	include 'connect.php';
	session_start();
	$id = $_SESSION['id'];
	if (isset($_POST['submit_contactus'])) {
		# code...
		$fullname = $_POST['contact_name'];
		$email = $_POST['contact_emailid'];
		$number = $_POST['contact_mobilenumber'];
		$feedback = $_POST['feedback'];

		$query = "INSERT INTO contact(contact_uid,contact_fname,contact_email,contact_mobilenumber,contact_query) VALUES ('$id','$fullname','$email','$number','$feedback')";
		$result = mysqli_query($db,$query);
		if ($result) {
			?>
			<script type="text/javascript">
				alert("Your query has been sent. You will be contacted shortly");
				window.location = 'index.php';
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				alert("Error in sending your request. Please try again after a while");
				window.location = 'index.php';
			</script>
			<?php
		}



	}
?>



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
			overflow-x: hidden;
			background-image: url(./images/food.jpeg);
			background-position: center;
		}

		.logo img{
			height:55px;
		}

		.navbar{
			background-image: url(./images/bg1.jpg);
			margin-bottom: 40px;
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

		.header{
			text-align: center;
			font-family: 'Merriweather', serif;
			letter-spacing: 1px;
		}

		.form1{
			margin-top: 20px;
			background-color: white;
			width: 40%;
			margin: auto;
			display: block;
			padding: 25px;
			margin-bottom: 40px;
		}

		.bar{
			background-image: url(./images/bg11.jpg);
			margin-bottom: 40px;
		}

		.bar img{
			width: 20%;
			margin: auto;
			display: block;
			margin-bottom: 10px;
			padding: 5px;
		}

		td{
			padding: 10px;
		}

		.btn1{
			background-color:#ff5c33;
			color: white;
			width: 30%;
			margin: auto;
			display: block;
			margin-top: 10px;
			margin-bottom: 20px
		}

		.btn1:hover{
			background-color: #404040;
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
	        <a class="nav-link " href="about_us.php">About</a>
	      </li>
	      <li class="nav-item px-2">
	        <a class="nav-link active-link" href="#">Contact Us</a>
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
	      	<a href="cart.php"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
	      </li>


	    </ul>
	  	</div>
	  	</div>
	</nav>

<div class="jumb">
</div>
<form method="post"  name="register">
	<div class="form1">
	<table>
		<tr>
			<td><label>Full Name:</label></td>
			<td><input type="varchar" name="contact_name" value=""></td>
		</tr>
		<tr>
			<td><label>Email Id:</label></td>
			<td><input type="varchar" name="contact_emailid" value=""></td>
		</tr>
		<tr>
			<td><label>Mobile Number:</label></td>
			<td><input type="int" name="contact_mobilenumber" value=""></td>
		</tr>
		<tr>
			<td><label>Your query/feedback:</label></td>
			<td><textarea rows="4" cols="23" name="feedback" value=""></textarea></td>
		</tr>
		</table>
			<button type="submit" class="btn btn1" name="submit_contactus">Send</button>
	</form>
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
	    <a href="#">BayViewCafe.com</a>
	  </div>
	  <!-- Copyright -->

	</footer>
	<!-- Footer -->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>

