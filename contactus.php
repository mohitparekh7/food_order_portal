<?php include('connect.php')?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Bay View</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">

		.navbar{
			background-color: white;
			background-image: linear-gradient(to right top, #ff471a 0%, #ffb366 100%);
		}
		.navbar-brand{
			color: black;
			font-size: 24px;
			font-family: "Times New Roman", Times, serif;

		}

		.navigation a:hover{
			color: #4a4a4a;
		}

		.links a{
			font-size: 17px;
			color: black;
		}


	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container navigation">
		  <a class="navbar-brand" href="#">Bay View Cafe</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>


		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item active px-2 links">
			        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			      </li>

			      <li class="nav-item px-2 links">
			        <a class="nav-link" href="#">Menu</a>
			      </li>

			      <li class="nav-item px-2 links">
			        <a class="nav-link" href="#">About Us</a>
			      </li>

			      <li class="nav-item px-2 links">
			        <a class="nav-link" href="contactus.php">Contact Us</a>
			      </li>

			      <li class="nav-item px-2 links">
			        <a class="nav-link" href="#">Log in</a>
			      </li>

			      <li class="nav-item px-2 links">
			        <a class="nav-link" href="#">Sign Up</a>
			      </li>

			    </ul>
		  	</div>
		 </div>
	</nav>

	<table>
		<form method="post"  name="register">
	<!--display validation errors here-->
		<?php include('errors.php') ?>
		
			<tr>
				<div class="input-group">
					<td>
						<label>FULL NAME</label>
					</td>
					<td>
						<input type="varchar" name="contact_name" value="">
					</td>
				</div>
			</tr>

			<tr>
				<div class="input-group">
					<td><label>EMAIL ID:</label></td>
					<td><input type="varchar" name="contact_emailid" value=""></td>
				</div>
			</tr>
			<tr>
				<div class="input-group">
					<td><label>MOBILE NUMBER:</label></td>
					<td><input type="int" name="contact_mobilenumber" value=""></td>
				</div>
			</tr>
			<tr>
				<div class="input-group">
					<td><button type="submit" class="btn" name="submit_contactus">Send</button></td>
				</div>
			</tr>
		</form>		
	</table>

</body>
</html>