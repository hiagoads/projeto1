<?php

    // vetor consegue armazenar mais de um valor, identificados por indices começando pelo zero

    require_once 'config.inc.php'; //garante o acesso ao banco de dados
    $id = $_GET['id']; //tras o id do registro do cliente

    $sql = "SELECT * FROM clientes WHERE id =   '$id";// traga todas as colunas dos clientes onde o id seja igual a variável id
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            $nome = $dados['cliente']; //pegando os dados que vem do banco de cada coluna e armazenando na array
            $cidade = $dados['cidade'];
            $estado = $dados['estado'];
            $id = $dados['id'];
        }
    

?>

<h2>Alterar Cadastro de Cliente</h2>

<form action="?ph=clientes-alterar" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome:</label> <!-- o value serve para autopreencher o dado contido na variável em php -->
    <input type="text" name="cliente" value="<?=$nome?>"><br>
    <labe>Cidade:</labe>
    <input type="text" name="cidade" value="<?=$cidade?>"><br>
    <label>Estado:</label>
    <input type="text" name="estado" value="<?=$estado?>"><br>
    <input type="submit" value="Cadastrar Cliente">
</form>

<?php
    }else{
        echo "<h2>Nenhum cliente encontrado!</h2>";
    }
?>