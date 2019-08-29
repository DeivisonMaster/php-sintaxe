<?php

/* 
    SINTAXE:

    setcookie(nome, valor, tempoExpiracao, caminho, dominio); 
*/

setcookie("usuario1", "aluno1");    // tem duração relacionada ao tempo de vida do navegador

setcookie("usuario2", "aluno2", time() + 3600); // expira após 1 hora

$tempo  = time() + 60*60*24*30;
setcookie("usuario3", "aluno3", $tempo);  // expira após 1 mês


// Variável $_COOKIE
if(isset($_COOKIE["usuario1"])){
    print "Olá ".$_COOKIE["usuario1"];
}else{
    print "Olá";
}

// array de cookie

setcookie("cookie[um]", "IFSP");
setcookie("cookie[dois]", "Guarulhos");
setcookie("cookie[tres]", "São Paulo");

if(isset($_COOKIE['cookie'])){
    foreach($_COOKIE['cookie'] as $indice => $valor){
        print "$indice : $valor <br/>\n";
    }
}

// excluindo cookie

setcookie("usuario");
setcookie("usuario", "", time() -3600);  // tempo de expiração expirado

