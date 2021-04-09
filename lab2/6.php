<!DOCTYPE html>
<html>
<head>
	<title>Задание 6</title>
</head>
<body>

	<form action="6.php" method="post">
	<?php 
		$arr = array('Груша', 'Яблоко', 'Персик');
	 ?>

	 <select name="fruits">

	 <?php 
	 	foreach ($arr as $value) {

	 		echo '<option value="'.$value.'">'.$value.'</option>';
	 	}
	  ?>
	</select>
</form>
</body>
</html>