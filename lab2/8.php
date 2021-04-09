<!DOCTYPE html>
<html>
<head>
	<title>Задание 8</title>
</head>
<body>
	<?php 
		$arr = array('asd', 'qtrt', 'gfd', 'dfg', 'nbv', 'yuj', 'pbvc', 'qwe');
	 ?>

	<div style="border-width: 5px; border-style: solid; display: inline-block;">
		<?php 
			foreach ($arr as $value) {
				echo "$value <br>";
			}
		 ?>
	</div>
</body>
</html>