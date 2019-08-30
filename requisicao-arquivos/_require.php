<?php

/*
    require();
    similar ao include() com a diferença na manipulação de erros.
    Enquanto o include() produz um 'warning' o require() produzirá um 'fatal error'
    caso o arquivo não exista
*/
?>
<html>
<head></head>
<body>

    <div class="leftmenu">
        <?php require('menu.php'); ?>
    </div>

</body>
</html>
