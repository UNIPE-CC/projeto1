<?php

    require_once "config.inc.php";

    $sql = "SELECET * FROM unidades";

    $resposta = mysqli_query($conexao, $sql);

    echo "Listar Unidades";
    echo "<a href='?pg=admin/unidadesForm' >Cadastrar unidade</a>";

    if(mysqli_num_rows($resposta) > 0){
        while($dados = mysqli_fetch_array($resposta)){
            echo "ID: " . $dados['id'] . "<br>";
            echo "curso: " . $dados['curso'] . "<br>";
            echo "nivel: " . $dados['nivel'] . "<br>";
            echo "duracao: " . $dados['duracao'] . "<br>";
            echo "modelo: " . $dados['modelo'] . "<br>";
            echo "<a href='?pg=unidades/unidadesFormAlterar&id=$dados[id]'>Editar</a><br>";
            echo "<a href='?pg=unidades/unidadesExcluir&id=$dados[id]'>Excluir</a><br>";
        }
    }else{
        echo "Nenhum curso cadastrado!";
    }