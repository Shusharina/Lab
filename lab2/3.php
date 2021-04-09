<!DOCTYPE html>
<html>
<head>
	<title>Задание 3</title>
</head>
<body>
	<?php 
		$arr = array();

		$n = 10;

		for ($i=0; $i < $n; $i++) { 
			$arr[$i] = $i*$i;
		}

		print_r($arr);
	 ?>
</body>
</html>