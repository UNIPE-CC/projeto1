<h2>Cadastro de Unidade</h2>
<form action="?pg=unidades/unidadesCadastro" method="post">
    <label>Curso:</label>
    <input type="text" name="curso" id="curso" required><br>
    <label>Nivel:</label>
    <select name="nivel" id="nivel">
        <option value="Tecnologo">Tecnologo</option>
        <option value="Bacharel">Bacharel</option>
        <option value="Licenciatura">Licenciatura</option>
        <option value="Mestrado">Mestrado</option>
        <option value="Doutorado">Doutorado</option>
    </select><br>
    <label>Duracao:</label>
    <input type="text" name="duracao" id="duracao" required><br>
    <label>Modelo:</label>
    <input type="text" name="modelo" id="modelo" required><br>

    <input type="submit" value="Cadastrar Unidade">
</form>