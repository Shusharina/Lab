<!DOCTYPE html>
<html>
<head>
	<title>Задание 7</title>
</head>
<body>
	<?php 
		$arr = array();

		$n = 10;



		for ($i=0; $i < $n; $i++) { 
			$arr[$i] = rand(0, 50);
		}

		print_r($arr);
		echo "<br><br>";

		$min = array_search(min($arr), $arr);
		$max = array_search(max($arr), $arr);

		$buf = $arr[$max];
		$arr[$max] = $arr[$min];
		$arr[$min] = $buf;

		print_r($arr);

	 ?>
</body>
</html>