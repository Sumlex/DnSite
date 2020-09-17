        <div class="top-panel">
            <div class="message">

<?php
            //Регистрация и авторизация пользователей
                
        ?>
                
        <?php 
            if (isset($_SESSION['logged_user'])) : //если авторизован, то выводит сообщение с именем пользователя
        ?> 
                        <a style="float: right; padding-right: 25px;"><h5>Привет, <?php echo $_SESSION['logged_user']->login; ?>!</h5></a> <br><br>
                
                
                <input type="button" class="knopka01" value="Галерея" onClick='location.href="Gallery.php"';>
                     
                <input type="button" class="knopka01" value="Скачать" onClick='location.href="https://github.com/Sumlex/Dnevsky"';>
                
                <input type="button" class="knopka01" value="About" onClick='location.href="About.php"';>
                
        <a href="logout.php" class="buttonR"   >Выйти</a>
        <?php 
            else : //иначе предлагает зарегистрироваться / авторизоваться
        ?>
                
                <a href="login.php" class="buttonR" style="width: 225px;">Вход</a>
                <br><br>
                    
                <input type="button" class="knopka01" value="Галерея" onClick='location.href="Gallery.php"';>
                     
                <input type="button" class="knopka01" value="Скачать" onClick='location.href="https://github.com/Sumlex/Dnevsky"';>
                
                

                
                <input type="button" class="knopka01" value="About" onClick='location.href="About.php"';>
                
                
            <br>
                        <a href="signup.php" class="buttonR"/>Регистрация</a>
                
        <?php endif; ?>

            </div>
        </div>