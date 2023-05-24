<?php

$anoNascimento = '1997';

$idade = 2022 - $anoNascimento;

echo $idade . PHP_EOL;

if ($anoNascimento == 1997)
    echo 'SIM' . PHP_EOL;
 else
    echo 'NÃO' . PHP_EOL;


// Conversão de string para nummero inteiro
$string = "12345";
$numeroInteiro = intval($string);
echo $numeroInteiro; // Saída: 12345

//Conversão de string para ponto flutuante
$string = "3.14";
$numeroFloat = floatval($string);
echo $numeroFloat; // Saída: 3.14

//Conversão de numero para string
$numero = 12345;
$string = strval($numero);
echo $string; // Saída: "12345"