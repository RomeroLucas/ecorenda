<?php
include 'conexao.php';

$nomeCadastrado = $_POST['nome'];
$senhaCadastrada = $_POST['senha'];
$emailCadastrado = $_POST['email'];

echo $nomeCadastrado; 
echo $senhaCadastrada; 
echo $emailCadastrado;

$addUser = "insert into 
            usuarios(nome, senha, email)
            values('{$nomeCadastrado}', '{$senhaCadastrada}', '{$emailCadastrado}')";




if($conn) {
    $cadastrar = mysqli_query($conn, $addUser);
    echo "Usuario cadastrado com sucesso!";
}

?>
<script src="./js/redirect.js"></script>
<script>
    redirect('logcad.php', 'Usuario cadastrado com sucesso')
</script>