<?php include('connect.php')?>

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
			width: 40%;
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
	<div class="container-fluid bar">
		<img src="./images/logo21.png">
	</div>

	<div class="form1">
	<div class="header">
		<h1>Registeration</h1>		
	</div>

	<table>
		<form method="post"  name="register">
		
			<tr>
				<td>
					<label>Full Name</label>
				</td>
				<td>
					<input type="varchar" name="user_name" value="">
				</td>
			</tr>

			<tr>
				<td>
					<label>Address</label>
				</td>
				<td>
					<input type="varchar" name="user_address" value="">
				</td>
			</tr>
			<tr>
				<td><label>Email Id</label></td>
				<td><input type="varchar" name="user_emailid" value=""></td>
			</tr>
			<tr>
				<td><label>Mobile Number</label></td>
				<td><input type="int" name="user_mobilenumber" value=""></td>
			</tr>

			<tr>
				<td><label>Password</label></td>
				<td><input type="password"  name="password1" value=""></td>
			</tr>

			<tr>
				<td><label>Confirm Password</label></td>
				<td><input type="password" name="password2" value=""></td>
			</tr>

		</table>
			<div><button type="submit" class="btn btn1" name="submit_register">REGISTER</button></div>
			
			<a href="login.php">Already a member? Login</a>
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
	include 'connect.php';
	if (isset($_POST['submit_register'])) {
		# code...
		$user_name=$_POST['user_name'];
			$user_address=$_POST['user_address'];
			$user_emailid=$_POST['user_emailid'];
			$user_mobilenumber=$_POST['user_mobilenumber'];
			$password1=$_POST['password1'];
			$password2=$_POST['password1'];

			if($password1 != $password2){
				?>
				<script type="text/javascript">
					alert("The passwords do not match");
				</script>
				<?php
			}else{
				$query = "INSERT INTO user_details(user_name,user_address,user_emailid,user_mobilenumber,user_password) VALUES ('$user_name','$user_address','$user_emailid','$user_mobilenumber','$password1')";
			mysqli_query($db,$query) or die('Error in updating database');
			?>
			<script type="text/javascript">
				window.location = 'login.php';
				alert("Successfully Added.");
			</script>
			<?php
			}

			
	}
?>
