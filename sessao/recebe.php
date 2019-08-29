<?php

session_start();

print "Olá ".$_SESSION['nome'].'<br/>';
print "Idade ".$_SESSION['idade'].'<br/>';
print "Data ".date('Y m d H:i:s', $_SESSION['data']).'<br/>';

