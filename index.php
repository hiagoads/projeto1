<?php

    //garante que importe apenas 1 vez o arquivo
    include_once("topo.php");
    include_once("menu.php");
    
    // verifica se o query_string que é o parametro da url no metodo get esta vazio, se for verdadeiro abre por padrão a pagina principal.php
    if (empty($_SERVER["QUERY_STRING"])) {
        $pg = "principal";  // pg é uma variável que recebe o valor da página
        include_once ("$pg.php");
    } else { //se não estiver vazio pg recebe o valor da url que o usuario clicou na página
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }

    include_once ("rodape.php");
?>