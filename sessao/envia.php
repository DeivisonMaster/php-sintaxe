<?php

session_start();

$_SESSION['nome']   = 'Aluno';
$_SESSION['idade']  = 20;
$_SESSION['data']   = time();

print "<br> <a href='recebe.php'>recebe.php</a>";

print '<br> <a href="recebe.php?'.SID.'">recebe.php com SID </br>';

