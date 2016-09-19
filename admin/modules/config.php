<?php
	$localhost = "localhost";
	$root ="root";
	$password = "";
	$webcongnghe = "webcongnghe";
	$conn = mysqli_connect($localhost,$root,$password) or die("Server Disconnect");
	mysqli_select_db($conn,$webcongnghe);
?>