<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2); // retorna a diferença entre os dois arrays
$nomesAlunos = array_keys($alunosFaltantes); // pega as chaves
$notasAlunos = array_values($alunosFaltantes); // pega apenas os valores e joga num array padrão

var_dump(array_combine($notasAlunos, $nomesAlunos)); // retorna array. a função recebe dois parâmetros, a chave e o valor
var_dump(array_flip($alunosFaltantes)); // retorna um array com inversão das chaves e dos valores
