<?php
/* 
    include_once() 
    semelhante ao include(), com a diferença que se o arquivo já foi incluido ele não será incluido novamente
*/

include_once('funcoes.php');

$c = soma(4.2, 2.5);
print $c;

include_once('funcoes.php');