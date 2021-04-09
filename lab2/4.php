<!DOCTYPE html>
<html>
<head>
	<title>Задание 4</title>
</head>
<body>
	<?php 
		$arr = array(2, 5, 9, 15, 0, 4);

		for ($i=0; $i <= count($arr) ; $i++) { 
			if ($arr[$i] > 3 and $arr[$i] < 10) {
				echo "$arr[$i] <br>";
			}
		}
	 ?>
</body>
</html>