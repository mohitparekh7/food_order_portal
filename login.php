<?php
	session_start();
	include 'connect.php';
	if(isset($_POST['submit_login'])){
		$email = $_POST['login_email'];
		$pass = $_POST['login_password'];
		$query = mysqli_query($db,"SELECT* FROM user_details WHERE user_emailid = '$email' AND user_password = '$pass'");
				$num_rows = mysqli_num_rows($query);
				$row = mysqli_fetch_array($query);
				if ($num_rows>0) {
					$_SESSION["id"] = $row['user_id'];
					$_SESSION["success"] = 'You are now logged in';
					echo $row['user_id'];
					?>
					<script>
						alert('Successfully logged in');
						document.location = 'index.php';
					</script>
					<?php
				}
				else
				{
					?>
					<script>
						alert('Invalid Username or Password');
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
			background-image: url(./images/food.jpeg);
			background-position: center;
		}

		.header{
			text-align: center;
			font-family: 'Merriweather', serif;
			letter-spacing: 1px;
		}

		.form1{
			margin-top: 20px;
			background-color: white;
			width: 30%;
			margin: auto;
			display: block;
			padding: 20px;
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
			padding: 15px;
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
	<div class="container-fluid bar">
		<img src="./images/logo21.png">
	</div>


	<div class="container form1">
	<div class="header">
		<h2>LOG IN</h2>		
	</div>


	<table>
		<form method="post">
			<tr>
				<td><label>Email Id</label></td>
				<td><input type="varchar" required="required"name="login_email" value=""></td>
			</tr>
			
			<tr>
				<td><label>Password</label></td>
				<td><input type="password" required="required" name="login_password" ></td>
			</tr>
			</table>
			<div><button type="submit" class="btn btn1" name="submit_login">Login</button></div>
			<a href="signup.php">Not a member? Sign Up</a>
			
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
