<?php

$url = 'http://alura.com.br/';

if (str_starts_with($url, 'https')) { // verifica se o inicio começa com determinada string
    echo 'É uma URL segura';
} else {
    echo 'Não é uma URL segura';
}

echo PHP_EOL;

if (str_ends_with($url, '.br')) { // verifica se o fim termina com determinada string
    echo 'É um domínio do Brasil';
} else {
    echo 'É não um domínio do Brasil';
}

echo PHP_EOL;
