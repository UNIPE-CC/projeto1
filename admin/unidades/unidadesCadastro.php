<?php

    require_once "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $curso = $_POST['curso'];
        $nivel = $_POST['nivel'];
        $duracao = $_POST['duracao'];
        $modelo = $_POST['modelo'];

        $sql = "INSERT INTO unidades (curso, nivel, duracao, modelo)
                VALUES ('$curso', '$nivel', '$duracao', '$modelo')";
        if(mysqli_query($conexao, $sql)){
            echo "<h3>Unidade cadastrada com sucesso!</h3>";
            echo "<a href='?pg=unidades/unidadesAdmin'>Voltar</a>";
        }else{
            echo "<h3>Erro ao cadastrar o curso</h3>";
        }
    }else{
        echo "<h2>Acesso negado!</h2>";
        echo "<a href='?pg=unidades/unidadesAdmin'>Voltar</a>";
    }