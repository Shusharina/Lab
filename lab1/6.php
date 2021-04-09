<html>
 <head>
  <title>Задание 6</title>
 </head>
 <body>
 	<?php
      $age = 63;
      $sex = 'female';

      switch ($sex) {
        case 'male':
            $up = 64;
          break;
        
        case 'female':
            $up = 59;
          break;
      }

      if (!is_numeric($age) || $age < 0) {
        echo "Неизвестное значение.";
      }

      elseif (18 <= $age and $age <= $up){
        echo "Вам ещё работать и работать.";
      }
      elseif ($age > $up) {
      	echo "Вам пора на пенсию.";
      }
      elseif (0 <= $age and $age <= 17) {
      	echo "Вам ещё рано работать.";
      }
	?>
 </body>
</html>