<?php

    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM cartoes_cliente";
    $resultado = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($resultado) > 0) {

    echo "<h2>Cartões dos Nossos Clientes</h2>";
?>
<div>
    <table class="table">
        <thead>
            <tr>
                <th>Titular</th>
                <th>Número do Cartão</th>
                <th>Bandeira</th>
                <th>Limite</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($dados = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td><?=$dados['nome_titular']?></td>
            <td> **** **** **** <?=$dados['ultimos_4_digitos']?></td>
            <td><?=$dados['bandeira']?></td>
            <td><?=$dados['limite']?></td>
        </tr>
        <?php
            }
        ?>

        </tbody>
    </table>
</div>
<?php
    }else{
        echo "<h2>Nenhum cartão cadastrado</h2>";
    }
?>