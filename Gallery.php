
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
                
                    <input type="button" class="knopka01" value="About" onClick='location.href="About.php"';>
                
                <a href="logout.php" class="buttonR"   >Выйти</a>
        <?php 
            else : //иначе предлагает зарегистрироваться / авторизоваться
        ?>
                
                <a href="login.php" class="buttonR" style="width: 225px;">Вход</a>
                <br><br>
                    
                <input type="button" class="knopka01" value="Главная" onClick='location.href="index.php"';>
                     
                <input type="button" class="knopka01" value="Скачать" onClick='location.href="https://github.com/Sumlex/Dnevsky"';>
                
                

                
                <input type="button" class="knopka01" value="About" onClick='location.href="About.php"';>
                
                
            <br>
                        <a href="signup.php" class="buttonR"/>Регистрация</a>
                
        <?php endif; ?>

                
            </div>
        </div>
        
        <div class="container">
            <h1>
                
            </h1>
            <h2> 
                Official Dnevsky site gallery
            </h2> 
            <br>    
            <div class="info">
                На данной странице вы можете посмотреть некоторые, имеющиеся в игре спрайты(модели персонажа, врагов и т.д.), а так же сами скриншоты из игры. <br>
                
                Так же, вы можете скачать любую картинку себе на ПК.<br>
                
                 Пролистайте страницу ниже, чтобы увидеть их.
                
                <p style="margin-bottom: 150px;"></p>
                
                <a href="#Gallery"><i class="fa fa-arrow-down" aria-hidden="true" style="margin-bottom: 300px;"></i></a>
                

                
            </div>
        </div>
    <hr align="center" size="4" color="#349" />
    <br>
    
    <?php
    //Подключение картинок
    require_once("images.php");
    ?>
    
    </hr>

</body>
</html>