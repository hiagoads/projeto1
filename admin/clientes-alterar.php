<?php

    require_once "config.inc.php"; //conexão com servidor

    // se receber os dados do formulario deu certo
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["cliente"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $id = $_POST["id"];

        //comando que insere no banco
        $sql = "UPDATE clientes SET 
            cliente = '$nome',
            cidade = '$cidade',
            estado = $estado'
            WHERE id = '$id'"; // so altera os dados do id selecionado

        // verifica se conectou ao banco conexao

        if(mysqli_query($conexao, $sql)){
            echo "<h3> Cliente Alterado com Sucesso!</h3>";
            echo "<a href='?pg=clientes-admin'>Voltar</a>";
        }else{
            echo "<h3>Erro ao alterar cadastro cliente</h3>";
        }
    }else{
        echo "<h2> Acesso Negado </h2>";
    }

    mysqli_close($conexao);