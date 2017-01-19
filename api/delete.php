<?php
	$username ="root";
	$password ="";
	$hostname = "localhost";
	$database_name = "db_user";

	$con = mysqli_connect($hostname , $username, $password);
	$selected = mysqli_select_db($con, $database_name);

	$id = $_GET['id'];

	$result = mysqli_query($con, "DELETE FROM user WHERE id='$id'");

	if ($result) {
	echo "sukses";
	} else {
	echo "gagal";
	}
?>
