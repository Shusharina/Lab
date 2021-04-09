<html>
 <head>
  <title>Задание 12</title>
 </head>
 <body>
 	<form action="12.php" method="post">
    	Первое число: <input type="text" name="d1"><br><br>
    	Второе число: <input type="text" name="d2"><br><br>
    	<input type="submit" name="submit" value="Расчитать" />
	</form>
 	<?php
    if (isset($_POST['submit']))
    {
    	$d1 = $_POST['d1'];
		$d2 = $_POST['d2'];
       	$rez = $d1 * $d2;

       	echo "Произведение чисел равно: $rez";
    }
	?>
 </body>
</html>