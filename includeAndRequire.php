<?php

/*
Quando eu quero importar funções de um arquivo, a princípio, eu preciso
importar o arquivo, e tudo que há nele, incluindo executar o que tiver fora de escopos de funções
*/
/*
Para importar, pode importar usando include ou require, a diferença é caso o arquivo não seja encontrado o require da erro de imediato.
Já o include não. Então se o arquivo a ser importado é de suma importância para o prosseguimento, recomenda-se utilizar o require.
*/
/*
É possóivel, sei lá por quê, que eu queira importar o mesmo arquivo duas vezes, pois não se sabe se deu certo na primeira vez.
Mas será lançado um erro caso, já tenha sido importado, então use, na segunda vez, require_once, só vai importar, caso não tenha
sido importado antes.
*/
require 'funções.php'; // ou include ('funções.php')
require_once 'funções.php';

$result = soma(5,5);

//echo "result = $result";
$minusculo = 'xuxa';

paraMaiusculo($minusculo);

echo $minusculo;