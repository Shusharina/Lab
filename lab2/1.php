<!DOCTYPE html>
<html>
<head>
	<title>Задание 1</title>
</head>
<body>
	<?php 
		$arr = array(1, 20, 15, 17, 24, 35);

		$result = 0;

		foreach ($arr as $value) {
			$result += $value;
		}

		echo "Сумма элементов массива: $result";
	?>
</body>
</html>