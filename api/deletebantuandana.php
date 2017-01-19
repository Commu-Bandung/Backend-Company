<?php
	$username ="root";
	$password ="";
	$hostname = "localhost";
	$database_name = "backend";

	$con = mysqli_connect($hostname , $username, $password);
	$selected = mysqli_select_db($con, $database_name);

	$id_penerima = $_GET['id_penerima'];

	$result = mysqli_query($con, "DELETE FROM bantuandana WHERE id_penerima='$id_penerima'");

	if ($result) {
	echo "sukses";
	} else {
	echo "gagal";
	}
?>
