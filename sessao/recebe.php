<?php

session_start();

print "Olá ".$_SESSION['nome'].'<br/>';
print "Idade ".$_SESSION['idade'].'<br/>';
print "Data ".date('d m Y H:i:s', $_SESSION['data']).'<br/>';

