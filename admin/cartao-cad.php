<?php

    require_once "config.inc.php"; //conexão com servidor

    // se receber os dados do formulario deu certo
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $titular = $_POST["nome_titular"];
        $digitos = $_POST["ultimos_4_digitos"];
        $bandeira = $_POST["bandeira"];
        $limite = $_POST["limite"];

        //comando que insere no banco
        $sql = "INSERT INTO cartoes_cliente (nome_titular, ultimos_4_digitos, bandeira, limite)
                VALUES ('$titular', '$digitos', '$bandeira', '$limite')";

        // verifica se conectou ao banco conexao

        if(mysqli_query($conexao, $sql)){
            echo "<h3> Cartão Cadastrado com Sucesso!</h3>";
            echo "<a href='?pg=cartao-admin'>Voltar</a>";
        }else{
            echo "<h3>Erro ao cadastrar cartão</h3>";
        }
    }

    mysqli_close($conexao);