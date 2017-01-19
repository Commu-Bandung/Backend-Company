<?php
	$username ="root";
	$password ="";
	$hostname = "localhost";
	$database_name = "backend";

	$con = mysqli_connect($hostname , $username, $password);
	$selected = mysqli_select_db($con, $database_name);

	$data[0] = $_GET['kategori'];


	$result = mysqli_query($con, "INSERT INTO kategorikerjasama(kategori) VALUES('$data[0]')");

	if ($result) {
	echo "sukses";
	} else {
	echo "gagal";
	}
?>
