<?php

    require_once "config.inc.php"; //conexão com servidor

    // se receber os dados do formulario deu certo
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["cliente"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        
        //comando que insere no banco
        $sql = "INSERT INTO clientes (cliente, cidade, estado)
                VALUES ('$nome', '$cidade', '$estado')";

        // verifica se conectou ao banco conexao

        if(mysqli_query($conexao, $sql)){
            echo "<h3> Cliente Cadastrado com Sucesso!</h3>";
            echo "<a href='?pg=clientes-admin'>Voltar</a>";
        }else{
            echo "<h3>Erro ao cadastrar cliente</h3>";
        }
    }

    mysqli_close($conexao);