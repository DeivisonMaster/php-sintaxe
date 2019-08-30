<?php

// inclui e avalia o arquivo informado

/* 
    SINTAXE 
    include('nome do arquivo'); 
*/

print $c.'<br/>';  // erro ao imprimir antes de incluir o arquivo

include("variaveis.php");
print '<br/>';

print $a.'<br/>';
print $b.'<br/>';


// incluindo arquivo dentro de escopo local
function imprimeDadosFuncao(){
    include ("variaveis.php");
    print $c;
}

imprimeDadosFuncao();
print '<br/>';


// incluindo varios arquivos
$arquivos = array("arq1.php", "arq2.php");

for ($i = 0; $i < sizeof($arquivos); $i++) {
    include "$arquivos[$i]";
}