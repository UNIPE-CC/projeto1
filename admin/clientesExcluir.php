<?php

    require_once "config.inc.php";
    $id = $_GET["id"];
    $sql = "DELETE FROM clientes WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "Registro excluido com sucesso";
        echo "<a href='?pg=clientesAdmin></a>";
    }

    mysqli_close($conexao);
?>