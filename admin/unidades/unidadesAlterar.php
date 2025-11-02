<?php

    require_once "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $curso = $_POST["curso"];
        $nivel = $_POST["nivel"];
        $duracao = $_POST["duracao"];
        $modelo = $_POST["modelo"];
        $id = $_POST["id"];

        $sql = "UPDATE unidades SET
                curso = '$curso',
                nivel = '$nivel',
                duracao = '$duracao',
                modelo = '$modelo'
                WHERE id = '$id'";

        if(mysqli_query($conexao, $sql)){
            echo "<h3>Curso alterado com sucesso!</h3>";
            echo "<a href='?pg=unidades/unidadesAdmin'>Voltar</a>";
        }else{
            echo "<h3>Erro ao alterar o curso</h3>";
        }
    }else{
        echo "<h2>Acesso negado</h2>";
        echo "<a href='?pg=unidades/unidadesAdmin'>Voltar</a>";
    }