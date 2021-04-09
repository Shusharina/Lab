<!DOCTYPE html>
<html>
<head>
	<title>Задание 10</title>
</head>
<body>
	<?php 
		function mounths($day)
		{
			$res = '';

			switch ($day) {
				case '1':
					$res = 'Январь';
					break;
				case '2':
					$res = 'Февраль';
					break;
				case '3':
					$res = 'Март';
					break;
				case '4':
					$res = 'Апрель';
					break;
				case '5':
					$res = 'Май';
					break;
				case '6':
					$res = 'Июнь';
					break;
				case '7':
					$res = 'Июль';
					break;
				case '8':
					$res = 'Август';
					break;
				case '9':
					$res = 'Сентябрь';
					break;
				case '10':
					$res = 'Октябрь';
					break;
				case '11':
					$res = 'Ноябрь';
					break;
				case '12':
					$res = 'Декабрь';
					break;
			}

			return $res;
		}

		$str = mounths(3);

		echo "$str";
	 ?>
</body>
</html>