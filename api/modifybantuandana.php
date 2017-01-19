<?php
	$username ="root";
	$password ="";
	$hostname = "localhost";
	$database_name = "backend";

	$con = mysqli_connect($hostname , $username, $password);
	$selected = mysqli_select_db($con, $database_name);

	$data[0] = $_GET['id_penerima'];
	$data[1] = $_GET['nama_organisasi'];
	$data[2] = $_GET['nama_penerima'];
	$data[3] = $_GET['jumlah_dana'];

	$result = mysqli_query($con, "UPDATE bantuandana SET nama_organisasi='$data[1]', nama_penerima='$data[2]', jumlah_dana='$data[3]' WHERE id_penerima='$data[0]'");

	if ($result) {
	echo "sukses";
	} else {
	echo "gagal";
	}
?>
