<?php
    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM unidades";
    $resposta = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resposta) > 0){

    echo "<h2>Unidades</h2>";
?>

<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th><h4>Curso</h4></th>
                <th><h4>Nivel</h4></th>
                <th><h4>Duracao</h4></th>
                <th><h4>Modelo</h4></th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($dados = mysqli_fetch_array($resposta)){
            ?>
            <tr>
                    <th><?=$dados['curso']?></th>
                    <th><?=$dados['nivel']?></th>
                    <th><?=$dados['duracao']?></th>
                    <th><?=$dados['modelo']?></th>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
        <?php
            }else{
                echo "<h2>Sem curso cadastrado!</h2>";
            }
        ?>
</div>

<?php
    mysqli_close($conexao);
?>