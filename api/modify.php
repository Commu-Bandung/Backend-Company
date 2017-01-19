<?php
	$username ="root";
	$password ="";
	$hostname = "localhost";
	$database_name = "db_user";

	$con = mysqli_connect($hostname , $username, $password);
	$selected = mysqli_select_db($con, $database_name);

	$data[0] = $_GET['id'];
	$data[1] = $_GET['name'];
	$data[2] = $_GET['office'];
	$data[3] = $_GET['email'];

	$result = mysqli_query($con, "UPDATE user SET name='$data[1]', office='$data[2]', email='$data[3]' WHERE id='$data[0]'");

	if ($result) {
	echo "sukses";
	} else {
	echo "gagal";
	}
?>
