<?php
	$username ="root";
	$password ="";
	$hostname = "localhost";
	$database_name = "db_user";

	$con = mysqli_connect($hostname , $username, $password);
	$selected = mysqli_select_db($con, $database_name);

	$data[0] = $_GET['name'];
	$data[1] = $_GET['office'];
	$data[2] = $_GET['email'];

	$result = mysqli_query($con, "INSERT INTO user(name,office,email) VALUES('$data[0]','$data[1]','$data[2]')");

	if ($result) {
	echo "sukses";
	} else {
	echo "gagal";
	}
?>
