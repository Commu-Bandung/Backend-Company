<?php
	$username ="root";
	$password ="";
	$hostname = "localhost";
	$database_name = "backend";

	$con = mysqli_connect($hostname , $username, $password);
	$selected = mysqli_select_db($con, $database_name);

	$result = mysqli_query($con, "SELECT * FROM users");

	$json_response = array();

	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		$json_response[] = $row;
	}

	echo json_encode(array('Login' => $json_response));

?>
