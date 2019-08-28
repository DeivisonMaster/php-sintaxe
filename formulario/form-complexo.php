<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Resultado Escolha do Curso</title>
</head>
<body>
    
    <form action="dados.php" method="POST">
        <label for="nome">Nome</label>
        <input id="nome" type="text" name="dados[nome]"/>

        <label for="idade">Idade</label>
        <input id="idade" type="text" name="dados[idade]"/>

        <select multiple name="curso[]">
            <option value="segurança da informação">segurança da informação</option>
            <option value="analise de sistemas">analise de sistemas</option>
            <option value="banco de dados">banco de dados</option>
        </select>

        <input type="submit" value="Enviar" name="enviar"/>
    </form>

</body>
</html>