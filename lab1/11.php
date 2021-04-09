<html>
 <head>
  <title>Задание 11</title>
 </head>
 <body>
 	<?php
      $num = '123';
      $sum = 0;

      for ($i=0; $i < strlen($num); $i++) { 
      	$sum += $num[$i];
      }

      echo "$num <br>";
      echo "$sum";
	?>
 </body>
</html>