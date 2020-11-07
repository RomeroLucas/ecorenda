<?php
    include 'conexao.php';


    $usermail = $_POST['usermail'];
    $userpass = $_POST['userpass'];

    $sql = "select email, senha from usuarios 
    where email = '{$usermail}' and senha = '{$userpass}'";

    
    $verificacao = mysqli_query($conn, $sql);
    $registro = mysqli_num_rows($verificacao);

    if($registro == 1) {
        header('Location: perfil.php');
    } else {
        echo "Usuário ou senha invalidos ";
        echo $registro;
    }

?>

<script src="./js/redirect.js"></script>
<script>
    redirect('logcad.php', 'Usuario ou senha incorretos')
</script>