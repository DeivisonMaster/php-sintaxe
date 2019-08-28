<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário GET</title>
</head>
<body>
    <form action="" method="GET">
        <label for="nome">Nome:</label>
        <input id="nome" type="text" name="nome"/>
        
        <label for="idade">Idade:</label>
        <input id="idade" type="text" name="idade"/>

        <input type="submit" value="Enviar" name="enviar"/>
    </form>

    <?php $_GET["nome"] != null ? print $_GET["nome"] : print "Nome não informado!" ?>
    
    <br/>

    <?php print $_GET["idade"] != null ? print $_GET["idade"] : print "Idade não informada!" ?>

</body>
</html>