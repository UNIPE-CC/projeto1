<?php

    require_once "config.inc.php";

    $sql = "SELECT * FROM clientes";

    $resultado = mysqli_query($conexao, $sql);

    echo "<a href='?pg=clientesForm'>Cadastrar Clientes</a>";

    echo "<h2>Lista de Clientes</h2><hr>";

    if (mysqli_num_rows($resultado) > 0) {
        while($dados = mysqli_fetch_array($resultado)) {
            echo "ID: " . $dados['id'] . "<br>";
            echo "Nome: " . $dados['cliente'] . "<br>";
            echo "Cidade: " . $dados['cidade'] . "<br>";
            echo "Estado: " . $dados['estado'] . "<br>";
            echo "<a href='?pg=clientesFormAlterar&id=$dados[id]'>Editar</a><br>";
            echo "<a href='?pg=clientesExcluir&id=$dados[id]'>Excluir</a><br>";
            echo "<hr>";
        }
    }else{
        echo "Nenhum cliente cadastrado!";
    }