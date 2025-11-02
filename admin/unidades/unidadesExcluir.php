<?php

    require_once "config.inc.php";

    $id = $_GET["id"];
    $sql = "DELETE FROM unidades WHERE id = '$id'";

    $resposta = mysqli_query($conexao, $sql);

    if($resposta){
        echo "Registro excluido com sucesso!";
        echo "<a href='?pg=unidades/unidadesAdmin'>Voltar</a>";
    }

    mysqli_close($conexao);
?>