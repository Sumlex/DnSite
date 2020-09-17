
        
<?php
    //Подключение шапки
    require_once("header.php");
?>


<link rel="stylesheet" type="text/css" href="Code/Button.css">
</head>


    <body>


    <EMBED SRC="Code/music/Kavinsky - Nightcall.mp3" AUTOSTART="TRUE" CONTROLS="PAUSEBUTTON" WIDTH="70" HEIGHT="45" ALIGN="top-left" >




        <input class="open" id="top-box" type="checkbox" hidden>
       <label class="btn" for="top-box"></label>

                
                         
                   <?php
                    //Подключение выезжающей шапки
                    require_once("top_hat.php");
                    ?>       
                


        <p style="margin-bottom: 150px;"></p>

        <div class="container">
            <h1>
                
            </h1>
            <br>
            <h2> <br>
                Greetings 
            </h2> 
            
            <h3>
                Добро пожаловать на сайт, посвященный игре Dnevsky VS Aliens.
                <br>
                
                Здесь вы найдете всю необходимую информацию, посвященную данной игре:<br><br>
                            1. Краткую историю для  введения в историю    вселенной игры
                    <br>
                            2. Увидите видеоролики с игры
                    <br>
                            3.Галерею, со всеми скриншотами и спрайтами из игры   
                    <br>
                            4.Можете скачать последнюю(на данный момент) версию игры через GitHub.
                    <br>
                            Надеемся, что вам все понравится, и вы будете следить за дальнейшей разработкой игры:).
                    <br>
                            Приятного вам время препровождения на данном сайте.
                    </h3> 
            
            <p style="margin-bottom: 50px;"></p>
            
            <a href="#Video"><i class="fa fa-arrow-down" aria-hidden="true" style="margin-bottom: 300px;"></i></a>
            
        </div>
<p style="margin-bottom: 200px;"></p>
        <div id="Video"></div>
<table>
    <tr>
        <td width="60%"; style="padding-left: 25px;">
            
        <video width="600" controls>
  <source src="Code/Video/NevskiyVSAliens.mp4" type="video/mp4">
  <source src="mov_bbb.ogg" type="video/ogg">
            </video>
            </td>
            <td>
                <h3 style="padding-right: 50px;">
                    <h2>Краткая информация по сюжету: </h2><br>
                    События игры разворачиваются в далеком будущем. На планете земля воцарился мир благодаря "Железному Арни", который поддерживал порядок и процветание. Земля стала развиваться с неимоверной скоростью, и опередила в этом многие другие галактики.<br>
                    "Лягуцериум" испугавшись столь быстрого развития решили уничтожить нас, пока не стало слишком поздно.
                    Но Дневский прознал про это, и решил спасти планету во что бы то ни стало... 
                </h3>
            </td>
</table>
<p style="margin-bottom: 150px;"></p>
    
    

    </body>
</html>