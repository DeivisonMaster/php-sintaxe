<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário POST</title>
</head>
<body>
    <h3>Escolha um curso</h3>

    <form name="informacoes" action="curso.php" method="POST">
        <select name="curso">
            <option value="Banco de dados">
                Tecnologia em análise e desenvolvimento de sistemas
            </option>
            <option value="Automação">
                Tecnologia em Automação Industrial
            </option>
            <option value="Matemática">
                Matemática
            </option>
        </select>

        <input type="submit" value="Enviar" name="enviar"/>
    </form>

</body>
</html>