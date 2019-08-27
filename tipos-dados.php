<?php

// booleano
$verdadeiro = TRUE;
$falso      = FALSE;

// inteiro
$n1 = 210;
$n2 = -5;
$n3 = 0123;
$n4 = 0x1A;

// ponto flutuante
$n5 = .15;
//$n6 = 4e + 6;
//$n7 = 2e - 5;

//echo $n6;


// carecteres de escape
$string = "\n"; // quebra de linha
$string = "\t"; // tabulação
$string = "\""; // aspas duplas



// array
$vetor = array("cor" => "azul", 12 => true);

$vetor2 = array(5 => 1, 12 => 2);
$vetor2[] = 14;

$vetor2["x"] = "13";

var_dump($vetor2);

echo '<br/>';

// remover elemento do array
unset($vetor2[5]);
var_dump($vetor2);

echo '<br/>';

$matriz = array("vetor" => array(6 => 5, 13 => 9, "a" => 42));
echo json_encode($matriz);