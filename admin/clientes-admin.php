<?php 

    require_once 'config.inc.php';

    $sql = "SELECT * FROM clientes"; //consulta

    $resultado = mysqli_query($conexao, $sql); //execução da consuta, e guarda o resultado na variavel

    echo "<a href='?pg=clientes-form'> || Cadastrar Clientes</a>";

    if(mysqli_num_rows($resultado) > 0 ){
        while($dados = mysqli_fetch_array($resultado)){
            echo "<br>","Id: ", $dados['id']. "<br>";
            echo "Nome: ", $dados['cliente']. "<br>";
            echo "Cidade: ", $dados['cidade']. "<br>";
            echo "Estado: ", $dados['estado']. "<br>";
            echo "<a href ='?pg=clientes-form-alterar&id=$dados[id]'>Editar cliente  |  </a>";
            echo "<a href ='?pg=clientes-excluir&id=$dados[id]'>Excluir Cliente</a>";
            echo "<hr>";
        }
    }else{
        echo "<h3> Nenhum cliente cadastrado!";

    }