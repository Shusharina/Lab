<html>
 <head>
  <title>Задание 3</title>
 </head>
 <body>
 	<?php
      $age = 98;

      if ((17 < $age) and ($age < 60)){
        echo "Вам ещё работать и работать.";
      }
      elseif ($age > 59) {
      	echo "Вам пора на пенсию.";
      }
	?>
 </body>
</html>