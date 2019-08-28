<html>
    <body>
    <?php

    print '<pre>';
    print htmlspecialchars(print_r($_POST, true));
    print '</pre>';

    print "<br> Nome: ".$_POST["dados"]["nome"];
    print "<br> Idade: ".$_POST["dados"]["idade"];
    print "<br/>";
    var_dump($_POST["curso"]);
    ?>
</body>
</html>