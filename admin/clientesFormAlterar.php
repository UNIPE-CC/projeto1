<?php
    require_once 'config.inc.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            $nome = $dados['cliente'];
            $cidade = $dados['cidade'];
            $estado = $dados['estado'];
            $id = $dados['id'];
        }
    }
?>

<h2>Cadastro de Cliente</h2>

<form action="?pg=clientesAlterar" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome:</label>
    <input type="text" name="cliente" value="<?=$nome?>"><br>
    <label>Cidade:</label>
    <input type="text" name="cidade" value="<?=$cidade?>"><br>
    <label>Estado:</label>
    <input type="text" name="estado" value="<?=$estado?>"><br>
    <input type="submit" value="Atualizar Cliente">
    <a href='?pg=clientesAdmin&id=$dados[id]'>Voltar</a><br>
</form>