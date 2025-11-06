<?php 

    // criando conexão com o servidor e salvando os dados na variável conexao
    $conexao = mysqli_connect('localhost:3306','root',''); // primeira '' servidor, depois '' usuario e por ultimo a senha

    // selecionando qual o banco de dados que vou selecionar dentro do servidor
    $db = mysqli_select_db($conexao,'projeto1'); // conectar o usuario ao banco de dados 

    if(!$conexao){ //se não conectar apresenta a mensagem de erro
        echo "<h2>Erro ao conectar ao banco de dados</h2>";
    }