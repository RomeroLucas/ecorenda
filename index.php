<?php
    include 'conexao.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRenda - Home</title>
    <link rel="shortcut icon" href="./img/logo/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
    <div class="background"></div>
    <main>
        <nav class="navegador-nouser">
            <a href="quemSomos.php">Quem Somos</a>
            <a href="logcad.php">Entrar</a>
        </nav>
        <img src="./img/logo/logo2.png">

        <section>

            <h3>Encontre um local de coleta perto de você!</h3>
            <div id="section-menu">
                <label>
                    <p>Selecionar endereço</p>
                    <input type="text" >
                </label>

                <label>
                    <p>Selecionar material</p>
                    <input type="text" >
                </label>
                <label>
                    <p class="invisible">asdasd</p>
                    <input type="button" value="PESQUISAR" class="align-menu">
                </label>
            </div>
    
            <div id="show-locations">
                Lista de locais pertos
                <div class="itemLista">
                    <p>Nome Local</p>
                    <span>endereço Local</span>
                    <span>9:00 até 18:00</span>    
                </div>

                <?php
                    include 'teste.php';
                ?>
            </div>
        </section>


       
    </main>
</body>
</html>