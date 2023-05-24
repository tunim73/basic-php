<?php

$texto = 'Texto com qualquer coisa poxa e caramba';

//substitui cada paalavra, por seu correspodente no outro array
echo str_replace(
    ['poxa', 'caramba'],
    ['p', 'c'],
    $texto
) . PHP_EOL;

echo strtr($texto, 'poxa', '***@') . PHP_EOL; // substitui cada caracter por seu correspondente no 2º parâmetro
echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']) . PHP_EOL; // Faz o mesmo que o primeiro exemplo