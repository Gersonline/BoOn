<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Tela Inicial</title>
</head>
<link rel="stylesheet" type="text/css" href="estilo.css">
<body>
<body>
    <input type="checkbox" id="bt_menu">
    <label for="bt_menu">&#9776;</label>


    <nav class="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Serviçoes</a>
                <ul>
                    <li>
                        <a href="#">Criação de Sites</a>
                    </li>
                    <li>
                        <a href="#">Arte Visual</a>
                    </li>
                </ul>
            </li>
            <li><a href="#">Cursos</a>
                <ul>
                    <li>
                        <a href="#">Java</a>
                    </li>
                    <li>
                        <a href="#">Photoshop</a>
                    </li>
                    <li>
                        <a href="#">´HTML/CSS</a>
                    </li>
                </ul>
            </li>
            <li><a href="#">Contato</a></li>
        </ul>
    </nav>
        <?php include 'Menu.html';?>
</body>
</html>