<?php 
	$db = mysqli_connect('localhost','root','','food_order') or die('Unable to connect. Check your connection parameters.');
	mysqli_select_db($db,'food_order') or die(mysqli_error($db));
?>