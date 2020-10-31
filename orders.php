<?php
	include 'connect.php';
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
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
	<style type="text/css">

		body{
			overflow-x: hidden;
			background-image: url(./images/bg11.jpg);
		}

		.logo img{
			height:55px;
		}

		.navbar{
			background-image: url(./images/bg1.jpg);
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
			background-image: url("./images/food61.jpg");
			background-position: left;
			height: 550px;
			margin-bottom: 50px;
		}

		.jumbtext{
			color: white;
			width: 30%;
			position: relative;
			top: 30%;
			left: 30%;
		}

		.sel p{
			text-align: center;
			color: #ff5c33;
			font-family: 'Merriweather', serif;
			/*letter-spacing: 1px;*/

		}

		.seller{
			margin-top: 0px;
			/*background-image: linear-gradient(to right top, #ff5c33 0%, #ffbf80 100%);*/
			/*background-color:#595959;*/
			background: rgb(0, 0, 0);
  			background: rgba(0, 0, 0, 0.20); 
			color: #ff3300;
			margin-bottom: 30px;


		}


		.seller h3{
			font-size: 32px;
			padding: 15px;
			text-align: center;
			margin: 15px;
			margin-top: 0px;
			font-family: 'Merriweather', serif;
			letter-spacing: 1px;
			font-weight: 900;

		}


		.col{
			width: 85%;
			height: 380px;
			margin: auto;
			display: block;
			margin-bottom: 10px;
			padding: 0px;
		}

		.chooseus{
			background-image: linear-gradient(to right top, #ff5c33 0%, #ffbf80 100%);
		}

		.chooseus h3{
			padding: 15px;
			text-align: center;
			margin: 20px;
			margin-top: 30px;
			font-family: "Times New Roman", Times, serif;

		}

		.cen{
			width: 75%;
			margin: auto;
			display: block;
		}

		.serve{
			width: 85%;
			margin: auto;
			display: block;
			margin-right: 0px;
		}

		
		.cheff{
			background-color: #404040;
			margin: auto;
			margin-top: 30px;
		}



		.serve h3{
			font-size: 32px;
			color: white;
		}

		.serve p{
			margin-top: 25px;
			font-size: 17px;
			font-style: italic;
			color: lightgrey;
		}

		.serve p,h3{
			text-align: center;
		}

		.serve button{
			margin-top: 30px;
			border: none;
			background-color: #ff5c33;
			padding: 10px;
			color: white;
			font-size: 18px;
		}


		.col1{
			width: 75%;
			margin: auto;
			margin-top: 20px;
			margin-bottom: 20px;
			display: block;
		}

/*		.chooseus h3{
			margin-top: 0px;
		}*/


		.choose p{
			text-align: center;
		}

		.choose{
			margin-bottom: 50px;
		}



		.adv1{
			width: 80%;
			padding: 10%;
			margin: auto;
			display: block;
			box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.1), 0 3px 3px 0 rgba(0, 0, 0, 0.1);
			margin-top: 40px;
			margin-bottom: 40px;
		}

		.adv h5{
			color: #ff5c33;
			text-align: center;
			font-family: 'Merriweather', serif;
		}

		.adv img{
			padding: 30px;
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
	<!-- <div class="content">
		<?php if (isset($_SESSION['success'])): ?>
			<div class="error success">
				<h3>
					<?php  
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif?>
	</div> -->

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
	      <li class="nav-item active px-2">
	        <a class="nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item px-2">
	        <a class="nav-link" href="menu.php">Menu</a>
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
	      	<a href="cart.php"><span style=" color:green; font-size:30px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
	      </li>

	    </ul>
	  	</div>
	  	</div>
	</nav>

<table border="3">
	<tr>
		<th>Order Number</th>
		<th>Product Name</th>
		<th>Product Price</th>
		<th>Product Quantity</th>
	</tr>
	<?php
	
		$query = mysqli_query($db,"SELECT * FROM orders WHERE order_uid = '$id'") or die(mysqli_error());
		$row = mysqli_fetch_array($query);
		if (!empty($query)) {
			while ($row=mysqli_fetch_array($query)) {
				$o_id = $row['order_id'];
				$pname = $row['order_pname'];
				$price = $row['order_price'];
				$qty = $row['order_qty'];
				?>
				<tr>
					<td><?php echo $o_id ?></td>
					<td><?php echo $pname ?></td>
					<td><?php echo $price ?></td>
					<td><?php echo $qty ?></td>
				</tr>
				<?php
			}
		}

	?>
</table>








	<!-- Footer -->
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
    <a href="#">BayView.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->