<?php

    echo "<h1>Painel admin</h1>";

    echo "<a href='?pg=clientes-admin'>Listar Clientes  |</a>";
    echo "<a href='?pg=cartao-admin'>|  Listar Cartões</a>";
    
    if (empty($_SERVER["QUERY_STRING"])) {
       echo "<h2> Bem vindo ao paniel</h2>";
    } else { //se não estiver vazio pg recebe o valor da url que o usuario clicou na página
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }

