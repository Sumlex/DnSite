
<?php
    //Подключение шапки
    require_once("header.php");
?>
    <link rel="stylesheet" type="text/css" href="Code/Gallery.css">

    <link rel="stylesheet" type="text/css" href="Code/Button.css">
</head>
<body>
    
    <input class="open" id="top-box" type="checkbox" hidden>
       <label class="btn" for="top-box"></label>
        <div class="top-panel">
            <div class="message">

                <?php 
            if (isset($_SESSION['logged_user'])) : //если авторизован, то выводит сообщение с именем пользователя
        ?> 
                <a style="float: right; padding-right: 25px;"><h5>Привет, <?php echo $_SESSION['logged_user']->login; ?>!</h5></a> <br><br>
                
                
                <input type="button" class="knopka01" value="Главная" onClick='location.href="index.php"';>
                     
                <input type="button" class="knopka01" value="Скачать" onClick='location.href="https://github.com/Sumlex/Dnevsky"';>
                
                <input type="button" class="knopka01" value="Галерея" onClick='location.href="Gallery.php"';>
                
                
        <a href="logout.php" class="buttonR"   >Выйти</a>
        <?php 
            else : //иначе предлагает зарегистрироваться / авторизоваться
        ?>
                
                <a href="login.php" class="buttonR" style="width: 225px;">Вход</a>
                <br><br>
                    
                <input type="button" class="knopka01" value="Главная" onClick='location.href="index.php"';>
                     
                <input type="button" class="knopka01" value="Скачать" onClick='location.href="https://github.com/Sumlex/Dnevsky"';>
                
                

                
                <input type="button" class="knopka01" value="Галерея" onClick='location.href="Gallery.php"';>
                
                
            <br>
                        <a href="signup.php" class="buttonR"/>Регистрация</a>
                
        <?php endif; ?>
                
                
            <br>
                
            </div>
        </div>
        
        <div class="container">
            <h2> 
                About "Dnevsky VS Aliens" site
            </h2> 
            <div class="info">
                <h3>
                Данный сайт был написан для того, чтобы как можно больше людей могли узнать об этой игре.
                <br>
                
                Сайт, как и сама игра были выполнены студентом гр.34 Ултургашевым Александром Викторовичем в 2017 году.<br>
                
                В ходе выполнения данной курсовой работы над сайтом были получены навыки работы с различными web-технологиями. Навыки работы с которыми в дальнейшем будет большим плюсом
                    </h3>
                
                <p style="margin-bottom: 150px;"></p>
                
                <div class="info">
                сделано с любовью: <i class="fa fa-heart"></i> 
            </div>
                

                
            </div>
        </div>

</body>
</html>