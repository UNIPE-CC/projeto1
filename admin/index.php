<?php

    echo "<h1>Painel administrativo</h1>";

    echo "<a href='?pg=clientes/clientesAdmin'>Listar Clientes</a> | ";
    echo "<a href='?pg=unidades/unidadesAdmin'>Listar Unidades</a> | ";

    // área de conteúdo
    if(empty($_SERVER['QUERY_STRING'])){
       echo "<h3>Bem-vindo ao painel admin.";
    }else {
        $pg = "$_GET[pg]";
        include_once "$pg.php";
    }