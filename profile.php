
	<?php
		include 'connect.php';
		session_start();
		$id = $_SESSION['id'];
		$query = mysqli_query($db,"SELECT * FROM user_details WHERE user_id = '$id'") or die(mysqli_error());
		$row = mysqli_fetch_array($query)
	?>


<!DOCTYPE html>
<html lang="en-US">
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
	        <a class="nav-link " href="about_us.php">About</a>
	      </li>
	      <li class="nav-item px-2">
	        <a class="nav-link " href="contactus.php">Contact Us</a>
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


	    </ul>
	  	</div>
	  	</div>
	</nav>

	<h1>USER PROFILE</h1>
	<div class="profile-input-field">
		<h3>Fill out All the details</h3>
		<form method="post" , action="#">
			<div class="form-group">
				<label>Fullname</label>
				<input type="text" name="fname" style="width: 20em" placeholder="Enter your Fullname" value="<?php echo $row['user_name']; ?>" required />
			</div>

			<div class="form-group">
				<label>Address</label>
				<input type="text" name="address" style="width: 20em" placeholder="Enter your Address" value="<?php echo $row['user_address']; ?>" required />
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" style="width: 20em" placeholder="Enter your Email" value="<?php echo $row['user_emailid']; ?>" required />
			</div>

			<div class="form-group">
				<label>Mobile Number</label>
				<input type="text" name="number" style="width: 20em" placeholder="Enter your Address" value="<?php echo $row['user_mobilenumber']; ?>" required />
			</div>

			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary" style="width: 20em; margin: 0;">
			</div>
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
	        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
	          consectetur
	          adipisicing elit.</p>

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
		<!--     <li class="list-inline-item">
		      <a class="btn-floating btn-li mx-1">
		        <i class="fab fa-linkedin-in"> </i>
		      </a>
		    </li>
		    <li class="list-inline-item">
		      <a class="btn-floating btn-dribbble mx-1">
		        <i class="fab fa-dribbble"> </i>
		      </a>
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

	  <!-- <hr> -->

	  <!-- Call to action -->
	<!--   <ul class="list-unstyled list-inline text-center py-2">
	    <li class="list-inline-item">
	      <h5 class="mb-1">Register for free</h5>
	    </li>
	    <li class="list-inline-item">
	      <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
	    </li>
	  </ul> -->
	  <!-- Call to action -->

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
<?php 
	if (isset($_POST['submit'])) {
		# code...
		$fullname = $_POST['fname'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$number = $_POST['number'];
		$query = "UPDATE user_details SET user_name='$fullname', user_address = '$address', user_emailid='$email', user_mobilenumber = '$number' WHERE user_id = '$id'";
		$result = mysqli_query($db,$query) or die(mysqli_error($db));
		?>
		<script type="text/javascript">
			alert("Update Successfull");
			window.location = 'index.php'
		</script>

		<?php
	}
?>