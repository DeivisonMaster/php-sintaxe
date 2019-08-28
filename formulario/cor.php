<?php

switch($_GET["cor"]){
    case    "r":
        $background = "rgb(255,0,0)";
        break;
    case    "g":
        $background = "rgb(0,255,0)";
        break;
    case    "b":
        $background = "rgb(0,0,255)";
        break;
    default :
        $background = "rgb(255,255,255)";
        break;
    
}
?>
<html lang="pt-br">
<head>
    <title>Saida</title>
</head>
<body style="background-color: <?php print $background; ?>">

    <?php print "<h2>Olá, ".$_GET["nome"]."</h2>" ?>

</body>
</html>