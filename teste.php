<?php


    $consulta = 'select * from estabelecimentos;';
    $resultado = $conn->query($consulta);

    

    while($imprimir = $resultado->fetch_assoc()) {
        echo "
                <div class='itemLista'>
                    <p>{$imprimir['nome']}</p>
                    <span>{$imprimir['endereco']}</span>
                    <span>9:00 até 18:00</span>    
                </div>
        ";
    }

?>
