<?php
    include 'conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRenda - Entrar</title>
    <link rel="shortcut icon" href="./img/logo/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="./css/logcad.css">
</head>
<body>
    <div class="background"></div>
    <nav class="navegador-nouser">
        <a href="quemSomos.php">Quem Somos</a>
        <a href="#">Opção 1</a>
        <a href="#">Entrar</a>
    </nav>

    <main>
        <a href="index.php">
            <img src="./img/logo/imagem_eco_renda.png" alt="">

        </a>
        
        
        <h4>Login</h4>
        <div id="align-btn">
            <span class="gen"><</span>
            <div id="forms-validacao">
                <div class="forms">
                    <form action="entrar.php" method="post">
                        <input type="text" name="usermail" placeholder="Insira seu E-mail">
                        <input type="password" name="userpass" placeholder="Insira sua senha">
                        <input type="submit" value="ENTRAR">
                        <a href="">Esqueci minha senha</a>
                    </form>
                </div>
            
            
                <div class="forms no-display">
                    <form action="validacao.php" method="post">
                        <input type="text" name="nome" placeholder="Insira seu nome">
                        <input type="password" name="senha" placeholder="Insira sua senha">
                        <input type="email" name="email" placeholder="Insira seu email">
                        <input type="submit" value="CADASTRAR">
                    </form>
                </div>
            </div>
            <span class="gen">></span>
        </div>


        <script src="./js/switch.js"></script>
</main>
</body>
</html>