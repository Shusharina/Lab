<?php  
        if (isset($_POST['pr']) && ($_POST['pr'] == $_SESSION['keystring'])){
            echo('Капча верна!');
        }
        else{
            echo('Капча не верна!');
        }
?>