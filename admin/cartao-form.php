<h2>Cadastro de Cartão</h2>

<form action="?pg=cartao-cad" method="post">
    <label>Nome do Titular:</label>
    <input type="text" name="nome_titular" required><br>
    <label>Ultimos 4 Digitos:</label>
    <input type="number" name="ultimos_4_digitos" required ><br>
    <label for="bandeira">Escolha uma bandeira:</label>
    <select name="bandeira" id="bandeira" required>
        <option value="hiper">Hiper</option>
        <option value="visa">Visa</option>
        <option value="master">Master</option>
        <option value="american">American Express</option>
    </select><br>
    <label>Limite:</label>
    <input type="number" id="limite" name="limite" min="0" step="0.1"><br>
    <input type="submit" value="Cadastrar Cartão">
</form>