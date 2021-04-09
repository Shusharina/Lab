<!DOCTYPE html>
<html>
<head>
	<title>Задание 2</title>
</head>
<body>
	<?php 
		$arr = array('Коля' => 200, 
					 'Вася' => 300,
					 'Петя' => 400
		);

		foreach ($arr as $key => $value) {
			echo "$key - зарплата $value долларов. <br>";
		}
	 ?>
</body>
</html>