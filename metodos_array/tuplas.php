<?php

$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24,
];
// ['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

extract($dados); // extrai os valores e coloca em variáveis de mesmo nome das chaves
var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade')); // pega os valores de cada variável e cria um array, sendo a chave o nome da variável
