<!DOCTYPE html>
<html>
<head>
	<title>Задание 11</title>
</head>
<body>
	<?php 
		$str = 'text_var_test_str_qwe';

		$arr = explode('_', $str);

		$res = '';

		foreach ($arr as $value) {
			$value = ucfirst($value);

			$res .= $value;
		}

		$res = lcfirst($res);

		echo "$res";
	 ?>
</body>
</html>