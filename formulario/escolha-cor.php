<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário GET</title>
</head>
<body>
    <form action="cor.php" method="GET">
        <label for="nome">Nome: </label>
        <input id="nome" type="text" name="nome"/>

        <label>Escolha uma cor: </label>
        <input type="radio" name="cor" value="r"/> Vermelho
        <input type="radio" name="cor" value="g"/> Verde
        <input type="radio" name="cor" value="b"/> Azul

        <input type="submit" value="Enviar" name="enviar"/>
    </form>

</body>
</html>