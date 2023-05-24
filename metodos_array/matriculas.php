<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

$alunos2022 = [...$alunos2021, 'Carlos Vinicius', ...$novosAlunos]; //espalhamento dos elementos do array, para um novo array

array_push($alunos2022, 'Alice', 'Bob', 'Charlie'); //push
$alunos2022[] = 'Luiz'; //push

array_unshift($alunos2022, 'Stephane', 'Rafaela'); //push no início

echo array_shift($alunos2022) . PHP_EOL; // remover no início

echo array_pop($alunos2022) . PHP_EOL; // remover no fim

var_dump($alunos2022);
