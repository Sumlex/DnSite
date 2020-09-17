<?php

    require "db.php";        
    unset($_SESSION['logged_user']); //выгружает данные из сессии
    header('Location: index.php'); //перенаправляет на главную страницу

?>