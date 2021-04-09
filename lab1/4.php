<html>
 <head>
  <title>Задание 4</title>
 </head>
 <body>
 	<?php
      $age = 8;

      if ((17 < $age) and ($age < 60)){
        echo "Вам ещё работать и работать.";
      }
      elseif ($age > 59) {
      	echo "Вам пора на пенсию.";
      }
      elseif (0 <= $age and $age < 18) {
      	echo "Вам ещё рано работать.";
      }
	?>
 </body>
</html>