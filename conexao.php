<?php 
    // $servername = "localhost";
    // $username = "id15317559_root";
    // $password = "OMN*jrUbpix0CD%l";
    // $database = "id15317559_ecorenda";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ecorenda";

    //criando conexao
    $conn = mysqli_connect($servername,$username,$password,$database);

    //verificando conexao
    if(!$conn){
        die("A conexao ao BD falhou" . mysqli_connect_error());
    };
?>
