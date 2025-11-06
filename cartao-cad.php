<?php

    require_once "config.inc.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //se os dados enviados for via post, recebe os dados do formulário
        $nome_titular = $_POST["nome_titular"];
        $numero_cartao = $_POST["numero_cartao"];
        $bandeira = $_POST["bandeira"];
        $cod_seguranca = $_POST ["cod_seguranca"];
        $limite = $_POST["limite"];

        $sql = "INSERT INTO cartoes (nome_titular, numero_cartao, bandeira, cod_seguranca, limite)
        VALUES ('$nome_titular', '$numero_cartao', '$bandeira', '$cod_seguranca', '$limite')";

    if(mysqli_query($conexao, $sql)){
            echo "<div class='cta-section'>";
            echo "<h3> Solicitação enviada com Sucesso!</h3>";
            echo "<a href='?pg=principal' class='cta-button'>Voltar</a>";
        }else{
            echo "<h3>Erro ao enviar solicitação cartão</h3>";
        }
    }

    mysqli_close($conexao);