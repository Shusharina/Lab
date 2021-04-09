<?php
	$servername = "lab16";
	$database = "lab16";
	$username = "root";
	$password = "root";

	$conn = mysqli_connect($servername, $username, $password, $database);

	if (!$conn) {
    	die("Подключение не успешно: " . mysqli_connect_error());
	}
	echo "Подключение успешно";
	mysqli_close($conn);
?>