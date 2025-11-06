<?php 

    require_once 'config.inc.php';

    $sql = "SELECT * FROM cartoes_cliente"; //consulta

    $resultado = mysqli_query($conexao, $sql); //execução da consuta, e guarda o resultado na variavel

    echo "<a href='?pg=cartao-form'> | Cadastrar Cartão</a>";

    if(mysqli_num_rows($resultado) > 0 ){
        while($dados = mysqli_fetch_array($resultado)){
            echo "<br>","Id: ", $dados['id']. "<br>";
            echo "Nome: ", $dados['nome_titular']. "<br>";
            echo "Número do Cartão: **** **** **** ", $dados['ultimos_4_digitos']. "<br>";
            echo "Bandeira: ", $dados['bandeira']. "<br>";
            echo "Limite: ", $dados['limite']. "<br>";
            echo "<a href ='?pg=cartao-form-alterar&id=$dados[id]'>Editar cartao  |  </a>";
            echo "<a href ='?pg=cartao-excluir&id=$dados[id]'>Excluir Cartão</a>";
            echo "<hr>";
        }
    }else{

        echo "<h3> Nenhum Cartão cadastrado!";

    }