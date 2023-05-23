<?php

echo "Arquivo de funções".PHP_EOL;
function soma (float $x, float $y):float {
    echo "Arquivo de funções".PHP_EOL;
    return $x+$y;
}

//Passagem por referência
function paraMaiusculo (string &$x){
    $x =  strtoupper($x);
}