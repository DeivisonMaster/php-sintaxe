<?php ################################## SCRIPT PHP ?>

<?php
    echo 'primeiro impressão PHP';
?>


<script language="php">
    echo 'segunda impressão PHP';
</script>



<?= $expressao = "terceira impressão PHP"?>
<? echo $expressao; ?>

<?php
################################## COMENTÁRIOS
// comentário de unica linha

/*
    múltiplo comentário
*/

# estilo de comentário de uma linha com shell script

################################## FIM COMENTÁRIOS
?>


<?php 
################################## VARIÁVEIS

// variáveis com escopo local
function funcao1(){
    $y = 2; // escopo local
    echo $y;
}
funcao1();

echo '<br/>';


// variáveis com escopo global
$a = 21;
$b = 11;
function soma(){
    global $a, $b;
    $b = $a + $b;
}
soma();
echo $b;

echo '<br/>';

// array com $GLOBALS
$c = 3;
$d = 21;
function subtracao(){
    $GLOBALS['d'] = $GLOBALS['c'] + $GLOBALS['d'];
}
subtracao();
echo $d;

echo '<br/>';

// variável estática
function estatica(){
    static $num = 100;
    return $num--;
}

for ($i = 0; $i < 10; $i++){
    echo estatica(); 
    echo '<br/>';
}

echo '<br/>';

// constantes
define("EXEMPLO1", "Exemplo de constante 1");
const EXEMPLO2 = 'Exemplo de constante 2';

echo EXEMPLO1;

echo EXEMPLO2;
?>
