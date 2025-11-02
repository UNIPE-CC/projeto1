<?php

    require_once "config.inc.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM unidades WHERE id = '$id'";
    $resposta = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resposta) > 0){
        while($dados = mysqli_fetch_array($resposta)){
            $curso = $dados['curso'];
            $nivel = $dados['nivel'];
            $duracao = $dados['duracao'];
            $modelo = $dados['modelo'];
            $id = $dados['id'];
        }
    }
?>

<h2>Cadastro de Unidade</h2>
<form action="?pg=unidades/unidadesAlterar" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Curso:</label>
    <input type="text" name="curso" id="curso" value="<?=$curso?>" required><br>
    <label>Nivel:</label>
    <input type="text" name="nivel" id="nivel" value="<?=$nivel?>" required><br>
    <label>Duracao:</label>
    <input type="text" name="duracao" id="duracao" value="<?=$duracao?>" required><br>
    <label>Modelo:</label>
    <input type="text" name="modelo" id="modelo" value="<?=$modelo?>" required><br>

    <input type="submit" value="Atualizar Unidade">
    <a href='?pg=unidades/unidadesAdmin&id=$dados[id]'>Voltar</a><br>
</form>