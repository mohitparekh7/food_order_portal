<?php
	include 'connect.php';
	session_start();
	$id = $_SESSION['id'];


	if (isset($_POST['plus'])) {
		# code...
		// header('location: index.php');
		$pid = $_POST['plus'];
		// echo $pid;
		$res = mysqli_query($db,"SELECT * FROM cart WHERE pid = '$pid'");
		$row = mysqli_fetch_array($res);

		$quantity = $row[5];
		$quantity = $quantity +1;

		$query = "UPDATE cart SET qty = '$quantity' WHERE pid = '$pid'";
		if (mysqli_query($db,$query)) {
			# code...
			?>
			<?php
		}
		else{
			?>
				<script type="text/javascript">
					alert("failed!")
				</script>
			<?php
		}

	}
	if (isset($_POST['minus'])) {
		# code...
		// header('location: index.php');
		$pid = $_POST['minus'];
		// echo $pid;
		$res = mysqli_query($db,"SELECT * FROM cart WHERE pid = '$pid'");
		$row = mysqli_fetch_array($res);

		$quantity = $row[5];
		$quantity = $quantity - 1;

		$query = "UPDATE cart SET qty = '$quantity' WHERE pid = '$pid'";
		if (mysqli_query($db,$query)) {
			# code...
			?>
			<?php
		}
		else{
			?>
				<script type="text/javascript">
					alert("failed!")
				</script>
			<?php
		}

	}

	if (isset($_POST['checkout'])) {
		# code...
		$u_id = $id;
		$query = mysqli_query($db,"SELECT * FROM cart WHERE u_id = '$u_id'and rowstate = 1 and qty > 0");
		if (!empty($query)) {
			# code...
			while ($row=mysqli_fetch_array($query)){
				$pid = $row['pid'];
				$qty = $row['qty'];
				$pname = $row['pname'];
				$product_price = $row['qty'] * $row['price'];
				$query1 = "INSERT INTO orders (order_uid,order_pid,order_pname,order_price,order_qty)VALUES ('$u_id','$pid','$pname','$product_price','$qty')";
				if (mysqli_query($db,$query1)) {
					?>
						<script type="text/javascript">
							alert("Success!");
						</script>
					<?php
					$query2 = "DELETE FROM cart WHERE u_id = '$u_id'";
					if (mysqli_query($db,$query2)) {
						?>
							<script type="text/javascript">
								document.location = 'index.php';
							</script>
						<?php
					}
				}
				else{
					?>
						<script type="text/javascript">
							alert("failed!");
						</script>
					<?php
				}
			}
		}
		else{
			echo "No Records.";
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
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
	<script type="text/javascript" async src="cart.js"></script>
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

		.card {
			margin-bottom: 20px;
	      text-align: center;
	    }
	    
	    .card img{
	      height: 270px;
	    }

	    .btn1{
			background-color:#ff5c33;
			color: white;
			width: 15%;
			border-color: #ff5c33;
			margin-left: 10px;
		}

		.pr{
			background-color: #ff5c33;
			text-align: right;
			padding: 8px;
			color: white;
			font-weight: 700;
			font-size: 20px;
		}

		.pr p{
			margin-bottom: 0px;
		}

		.btn2{
			background-color:#ff5c33;
			color: white;
			float: right;
			margin-top: 20px;
			margin-bottom: 20px;
			font-size: 18px;
		}
		.fa{
			font-size: 30px;
			margin-right: 10px;
		}

		.foot{
			clear: both;
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
	      <li class="nav-item px-2 ">
	        <a class="nav-link" href="about_us.php">About</a>
	      </li>
	      <li class="nav-item px-2">
	        <a class="nav-link" href="contact_us.php">Contact Us</a>
	      </li>
	      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"a-expanded="false">
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



<div style="text-align: center; margin-bottom: 20px; font-size: 25px;background: rgb(0, 0, 0); background: rgba(0, 0, 0, 0.20);">
  <h3 style="color: #ff3030; padding: 10px; font-family: 'Merriweather', serif;">My Cart</h3>
</div>
     <div class="container">
      <div class="row">

    <?php
        $product= mysqli_query($db,"SELECT * FROM cart WHERE u_id='$id' and qty>=1"); 
        $total_price = 0;
        if (!empty($product)) { 
        while ($row=mysqli_fetch_array($product)) {
        	$product_price = $row['qty'] * $row['price'];
        	$total_price = $total_price + $product_price;
        ?>
        <form method="post">
	        <div class="col-lg-4">
		        <div class="card" style="width: 18rem;">
			        <img class="card-img-top shop-item-image" src="<?php echo $row['p_path']?>">
			        <div class="card-body">
			          <h5 class="card-title shop-item-title"><?php echo $row['pname']?>
			          </h5>
			          <div class="shop-item-details">
				          <p class="shop-item-price">Quantity: <?php echo $row['qty'] ?>
				       		<button type="submit" name="minus" class="btn1" value="<?php echo $row['pid'] ?>">-</button>
				          	<button type="submit" name="plus" class="btn1" value="<?php echo $row['pid'] ?>">+</button>
				          </p>
				          <p class="shop-item-price">Price: <?php echo "Rs ".$product_price ?></p>
			          </div>
			        </div>
		      	</div>
	      	</div>
	      </form>
       <?php
      }
      ?>
  </div>
</div>
<div class="container">
      	<form method="post">
      		<div class="pr">
      		<p>Total Price: <?php echo $total_price?></p>
      		</div>
      		<button type="submit" class="btn btn2" name="checkout">Checkout</button>
      	</form>
      <?php
  }  else {
 echo "No Records.";

  }
  ?>
  
</div>



<footer class="page-footer font-small stylish-color-dark pt-4 foot">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Bay View Cafe</h5>
        <p> Hotel Harbour View rooftop, PJ Ramchandani Marg, Apollo Bandar, Colaba, Mumbai, Maharashtra 400001</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
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

        <!-- Links -->
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