<?php
    include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRenda -Perfil</title>
    <link rel="shortcut icon" href="./img/logo/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="./css/perfil.css">
</head>
<body>
        <header>
            <img src="./img/logo/icon.png" alt="Logo">

            <nav>
                <input type="button" value="Meus dados" class="btn btn-light nav-item">
                <input type="button" value="Favoritos" class="btn btn-light nav-item">
            </nav>
        </header>

        <main>
            <?php
                include 'teste.php';
            ?>
        </main>

        <aside>
            <button onclick="fechar()" id="fecha-aside">fechar</button>

        <form action="" method="get">
            <div class="meus-dados">
                <label>
                    <p>Nome</p>
                    <input type="text" >
                </label>

                <label>
                    <p>Cep</p>
                    <input type="text" >
                </label>

                <label>
                    <p>Bairro</p>
                    <input type="text" >
                </label>

                <label>
                    <p>Email</p>
                    <input type="text" >
                </label>

                <label>
                    <p>Logradouro</p>
                    <input type="text" >
                </label>

                <label>
                    <p>Bairro</p>
                    <input type="text" >
                </label>

                <label>
                    <p>Numero</p>
                    <input type="text" >
                </label>


                    <br>
                    <button type="button" class="btn btn-success botao">Salvar alterações</button>
                    <button type="button" class="btn btn-warning botao" id="logout">Sair</button>
                    <button type="button" class="btn btn-danger botao">Deletar conta</button>

            </div>
        </form>


        </aside>


        <script src="./js/menuPerfil.js"></script>
</body>
</html>