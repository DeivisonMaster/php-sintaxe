<?php
$check = true;

g();

if($check){
    function f(){
        echo 'f() não existe até que o programa passe por aqui';
    }
}

function m(){
    echo 'm() existe desde o começo do programa';

    function n(){
        echo 'n() não existe até que m() seja chamada';
    }
}

m();
n();

function g(){
    echo 'g() existe desde o começo do programa';
    echo '<br/>';
}

echo '<br/>';


function imprimeCurso($curso, $disciplina){
    echo "Curso: $curso - disciplina: $disciplina";
}

$curso = "sistemas para internet";
$disciplina = "estrutura de dados";

imprimeCurso($curso, $disciplina);

echo '<br/>';

// concatenando
function concatenando(&$string){
    $string .= ' Dia!';
}

$str = 'Bom';
concatenando($str);
echo $str;

echo '<br/>';

function quadrado($num){
    return $num * $num;
}
echo quadrado(5);

echo '<br/>';

// funções variaveis
function mostra($string){
    echo $string;
}
$func = 'mostra';
$func('testando a função');