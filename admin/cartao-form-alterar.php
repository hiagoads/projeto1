<?php

    // vetor consegue armazenar mais de um valor, identificados por indices começando pelo zero

    require_once 'config.inc.php'; //garante o acesso ao banco de dados
    $id = $_GET['id']; //tras o id do registro do cliente

    $sql = "SELECT * FROM cartoes_cliente WHERE id =   '$id";// traga todas as colunas dos clientes onde o id seja igual a variável id
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            $titular = $dados['nome_titular']; //pegando os dados que vem do banco de cada coluna e armazenando na array
            $digitos = $dados['ultimos_4_digitos'];
            $bandeira = $dados['bandeira'];
            $limite = $dados['limite'];
            $id = $dados['id'];
        }
    

?>

<h2>Alterar Cadastro de Cartão</h2>

<form action="?ph=cartao-alterar" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Titular:</label> <!-- o value serve para autopreencher o dado contido na variável em php -->
    <input type="text" name="nome_titular" value="<?=$titular?>"><br>
    <labe>Últimos 4 dígitos do cartão:</labe>
    <input type="text" name="ultimos_4_digitos" value="<?=$digitos?>"><br>
    <label for="bandeira">Escolha uma bandeira:</label>
    <select name="bandeira" id="bandeira" required>
        <option value="hiper">Hiper</option>
        <option value="visa">Visa</option>
        <option value="master">Master</option>
        <option value="american">American Express</option>
    </select><br>
    <label>Limite:</label>
    <input type="number" id="limite" name="limite" min="0" step="0.1"><br>
    <input type="submit" value="Alterar Cartão">
</form>

<?php
    }else{
        echo "<h2>Nenhum cliente encontrado!</h2>";
    }
?>