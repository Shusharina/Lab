<html>
 <head>
  <title>Задание 10</title>
 </head>
 <body>
 	<?php
      for ($i=35; $i <= 87; $i++) { 
      	if (($i % 7 == 1) || ($i % 7 == 2) || ($i % 7 == 5)) {
      		echo "$i ";
      	}
      }
	?>
 </body>
</html>