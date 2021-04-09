<html>
 <head>
  <title>Задание 13</title>
 </head>
 <body>
 	<form action="13.php" method="post">
    	Число: <input type="text" name="d1"><br><br>
    	<input type="submit" name="submit" value="Расчитать" />
	</form>
 	<?php
    if (isset($_POST['submit']))
    {
    	$d1 = $_POST['d1'];
    	if (strlen($d1) == 1) {
    		echo "$d1 однозначное.";
    	}
    	elseif (strlen($d1) > 1) {
    		echo "$d1 многозначное.";
    	}
    }
	?>
 </body>
</html>