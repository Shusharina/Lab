<?php session_start(); ?>

<form action="test.php" method="post" onsubmit="return false">

    <p>Введите имя:<br>

        <input type="text" name="name">
    </p>

    <p>Введите email:<br>

        <input type="text" name="email">
    </p>

    <p>Введите сообщение:<br>

        <textarea name="message" cols="40" rows="5"></textarea>

    </p>

    <p>Введите числа с картинки: <br>

        <?php require 'captcha.php'; ?><br><br>

        <input name="pr" style=" margin-bottom:11px" type="text" size="6" maxlength="5">
    </p>

    <p><input type="submit" name="bt1" value="Отправить сообщение"></p>

    <?php
        require 'test.php';
    ?>



</form>

