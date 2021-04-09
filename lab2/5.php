<!DOCTYPE html>
<html>
<head>
	<title>Задание 5</title>
</head>
<body>
	<?php 
		$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

		foreach ($arr as $value) {
			if ($value % 3 == 0) {
				echo "$value";
				echo "<br>";
			}
			else {
				echo "$value, ";
			}
		}
	 ?>
</body>
</html>