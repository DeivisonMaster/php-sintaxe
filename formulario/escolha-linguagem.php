<?php
    if(isset($_POST['enviar'])){
        print "Você gosta das linguagens: "."<br/>";

        foreach ($_POST['linguagens'] as $prog){
            print $prog."<br/>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Resultado Escolha do Curso</title>
</head>
<body>
    
    <form action="escolha-linguagem.php" method="POST">
        <h3>Quais linguagens você conhece?</h3>

        <input type="checkbox" name="linguagens[]" value="Java"/> Java
        <br/>

        <input type="checkbox" name="linguagens[]" value="C"/> C
        <br/>

        <input type="checkbox" name="linguagens[]" value="PHP"/> PHP
        <br/>

        <input type="submit" value="Enviar" name="enviar"/>
    </form>

</body>
</html>