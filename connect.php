<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php 
		$errors = array();

		$db = mysqli_connect('localhost','root','','food_order');
		//  if($db){
		// 	echo "db connect successful";
		// 	$sql="select count from user;";
		// 	mysqli_query($db,$sql);
		// } 

		// register
		if(isset($_POST['submit_register'])){
			// echo "inside isset";
			// create the database and add the table and the feilds then add the variable append here
			$user_name=mysqli_real_escape_string($db,$_POST['user_name']);
			$user_address=mysqli_real_escape_string($db,$_POST['user_address']);
			$user_emailid=mysqli_real_escape_string($db,$_POST['user_emailid']);
			$user_mobilenumber=mysqli_real_escape_string($db,$_POST['user_mobilenumber']);
			$password1=mysqli_real_escape_string($db,$_POST['password1']);
			$password2=mysqli_real_escape_string($db,$_POST['password1']);

			if($password1 != $password2){
				array_push($errors,"the two passwords do not match");
			}
			if(count($errors)==0){
				$user_password = $password1;

				$sql = "INSERT INTO user_details(user_name,user_address,user_emailid,user_mobilenumber,user_password) VALUES ('$user_name','$user_address','$user_emailid','$user_mobilenumber','$user_password')";

				if(mysqli_query($db,$sql)){
					Header( 'Location: index.php?success=1' );
				}
				else{
					echo "Error: <br>" . mysqli_error($db);
				}

			}


		}
		if(isset($_POST['submit_login'])){
			$login_email=mysqli_real_escape_string($db,$_POST['login_email']);
			$login_password=mysqli_real_escape_string($db,$_POST['login_password']);
			if(empty($login_email)){
				array_push($errors,"Email ID is required");
			}
			if(empty($login_password)){
				array_push($errors,"Password is required");
			}
			if(count($errors)==0){
				$sql = "SELECT * FROM user_details WHERE user_emailid='$login_email'AND user_password = '$login_password'"; 
				$results = mysqli_query($db,$sql);

				if (mysqli_num_rows($results) == 1){
					echo "inside results";
			  	  $_SESSION['username'] = $username;
			  	  $_SESSION['success'] = "You are now logged in";
			  	  header('location: index.php');
			  	}else {
			  		array_push($errors, "Wrong username/password combination");
			  	}
			}
		}
	?>
</body>
</html>
