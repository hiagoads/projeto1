<h2>Cadastro de Cartão</h2>

<form action="?pg=cartao-cad" method="post">
    <label>Nome do Titular:</label>
    <input type="text" name="nome_titular" required><br>
    <label>Número do cartão:</label>
    <input type="text" name="numero_cartao" id="numero_cartao" maxlength="16" required ><br>
    <label for="bandeira">Escolha uma bandeira:</label>
    <select name="bandeira" id="bandeira" required>
        <option value="hiper">Hiper</option>
        <option value="visa">Visa</option>
        <option value="master">Master</option>
        <option value="american">American Express</option>
    </select><br>
    <label>Código de Segurança:</label>
    <input type="text" name="cod_seguranca" id="cod_seguranca" maxlength="3" required ><br></label>
    <label>Limite:</label>
    <input type="number" id="limite" name="limite" min="0" step="0.1"><br>
    <input type="submit" value="Cadastrar Cartão">
</form>

