<?php
    // array session
    session_start();

    $_SESSION['usuario1'] = array('usuario1' => 'João', 'usuario2' => 'Maria');
    
    $_SESSION['numeroDeVisitas'] = 0;
?>

<html lang="pt-br">
    <body>
        <?php 
            foreach ($_SESSION['usuario1'] as $arr) {
                print $arr.'<br/>';
            }
            
            /*  
                verifica se a variavel de sessão foi declarada e não é nula, 
                caso sim, atribui mais um, caso não, cria a variavel na sessão 
            */
            if(isset($_SESSION['y'])){
                $_SESSION['y'] = $_SESSION['y'] + 1;
            }else{
                $_SESSION['y'] = 1;
            }

            print "Número de visitas: ".$_SESSION['y'];
        ?>
    </body>
</html>


