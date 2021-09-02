<?php

echo "<h1>OPERADORES</h1>";

$anonascimento = 2009;

$idade = 2021 - $anonascimento;
echo "a idade do cliente é $idade anos";

echo "<br>";

if($idade < 18){
    echo "CLIENTE MENOR DE IDADE.";
    echo "<br>"
;}
else{
    echo "cliente autorizado.";
}
$aposentadoria = $idade + 35;
echo "se o cliente iniciar o trabalho com $idade anos,ele se aposentará com $aposentadoria anos.";

echo "<br>";
$HT = 8;
$salario = 500 * $HT;
echo "o salário de João é $salario reais.";

echo "<br>";

$RF = $salario / 6;
echo "a renda por pessoa no familia é $RF reais";

echo "<br>";

$troco = $RF%20;
echo "o valor do troco da compra foi $troco reais";

echo "<br>";

$investimento = $troco**2;
echo "o valor premiado foi $investimento reais.";

echo "<br>";

$liquido = $investimento *= .60;
echo "o valor liquido recebido foi $liquido reais.";

echo "<br>";

$resultado = 10 + 3/2 - 5*3**2;

echo $resultado;

echo "<br>";

$f = 1;
$g = 1;
$h = 0;

if ($f == 1 && $g == 1 && $h == 1){

    echo "verdade E";

}
else{

    echo "mentira E";

}

echo "<br>";

if ($f == 1 || $g == 1 || $h == 1){

    echo "verdade OU";

}
else{

    echo "mentira OU";

}

function somar($a, $b){

    return $a + $b;

}

function sub($a, $b){

    return $a - $b;

}

echo somar(10,34);

echo "<br>";

$resultado2 = sub(10, 45);
echo $resultado2;

echo "<br>";

echo somar(190, 34);

echo "<br>";

?>