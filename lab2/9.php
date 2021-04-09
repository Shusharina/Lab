<!DOCTYPE html>
<html>
<head>
	<title>Задание 9</title>
</head>
<body>
	<?php 
		$arr = array(45, 'тест', 100);

		print_r($arr);
		echo "<br>";

		unset($arr[0]);
		array_push($arr, 'тест2');

		print_r($arr);

	 ?>
</body>
</html>