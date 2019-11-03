<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Tela Inicial</title>
</head>
<link rel="stylesheet" type="text/css" href="estilo.css">
<body>
    <input type="checkbox" id="bt_menu">
    <label for="bt_menu">&#9776;</label>


    <nav class="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Quem Somos</a>
                <ul>
                    <li>
                        <a href="#">Objetivos</a>
                    </li>
                    <li>
                        <a href="#">Metodos</a>
                    </li>
                </ul>
            </li>
            <li><a href="#">Disciplinas</a>
                <ul>
                    <li>
                        <a href="#">Java</a>
                    </li>
                    <li>
                        <a href="#">Photoshop</a>
                    </li>
                    <li>
                        <a href="#">HTML/CSS</a>
                    </li>
                </ul>
            </li>
            <li><a href="#">Contato</a></li>
            <?php if (isset($_REQUEST['log']) == "S"){?>
                <li>
                    <div id="divfoto">
                        <img width="100" height="50" src="..\imagens\user-account-management-logo-user-icon.png">
                    </div>
                </li>
                <li>
                    <div id="divlogout">
                        <u><font><a style="border:0;" href="doLogout.php">logout</a></font></u>
                    </div>
                </li>
            <?php }?>
        </ul>
    </nav>
</body>
<body>
    <div align="center">
        <?php
        if (isset($_REQUEST['log'])){
            $Tela = "painel.php";
        }else{
            $Tela = "Menu.php";
        }

            include $Tela;
        ?>
    </div>
</body>
</html>