<?php

echo "<h1>variaveis em PHP</h1>";
echo "<br>";
$nome = "João";
$primeirosobrenome = " Victor";
$segundosobrenome = " Pereira";
$terceirosobrenome = " do";
$quartosobrenome = " Nascimento";
$nomecompleto = $nome.$primeirosobrenome.$segundosobrenome.$terceirosobrenome.$quartosobrenome;
echo $nomecompleto;

echo "<br>";

var_dump($nomecompleto);
echo "<br>";

$anodenascimento = 2009;
echo "$nome nasceu em ";
echo $anodenascimento

?>