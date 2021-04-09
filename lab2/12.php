<!DOCTYPE html>
<html>
<head>
	<title>Задание 12</title>
</head>
<body>
	<?php 
		$a = 1;
		$b = 4;
		$c = 1;

		echo "a = $a| b = $b| c = $c <br>";

		$d = pow($b, 2) - 4 * $a * $c;

		if ($d < 0) {
			echo "Корней нет";
		}
		if ($d == 0) {
			$x1 = (-$b)/(2*$a);
			$x1 = round($x1, 3);
			echo "Один корень, равный = $x1";
		}
		if ($d > 0) {
			$x1 = ((-$b) + sqrt($d))/(2*$a);
			$x1 = round($x1, 3);
			$x2 = ((-$b) - sqrt($d))/(2*$a);
			$x2 = round($x2, 3);
			echo "Два корня. $x1 и $x2";
		}
	 ?>
</body>
</html>