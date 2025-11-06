<?php 

    require_once "config.inc.php";
    $id = $_GET["id"];
    $sql = "DELETE FROM cartoes_cliente WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado){
        echo"<h2> Registro excluido com sucesso!</h2>";
    }else{
        echo "<h2> Erro ao excluir cartão</h2>";
    }


    mysqli_close($conexao);

    