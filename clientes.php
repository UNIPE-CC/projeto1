<?php

    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){

    echo "<h2>Clientes</h2>";

?>
<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($dados = mysqli_fetch_array($resultado)){
        ?>
            <tr>
                <th><?=$dados['cliente']?></th>
                <th><?=$dados['cidade']?></th>
                <th><?=$dados['estado']?></th>
            </tr>
                <?php
                    }
                ?>
        </tbody>
    </table>
    <?php 
            }else{
                echo "<h2>Sem clientes cadastrado</h2>";
            }
    ?>
</div>