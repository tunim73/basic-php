<?php

$telefones = ['(24) 99999 - 9999', '(21) 99999 - 9999', '(24) 2222 - 2222'];

foreach ($telefones as $telefone) {
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/'; //Basicamente criação de uma máscara para validação do telefone
    $telefoneValido = preg_match(
        $regex,
        $telefone,
        $correspondencia
    );

    if ($telefoneValido) {
        echo 'Telefone válido'. PHP_EOL;
    } else {
        echo 'Telefone inválido'. PHP_EOL;
    }
    // Com preg_replace consigo mudar o formato de uma string para outro
    echo preg_replace(
        $regex,
        '(XX) \2',
        $telefone
    ) . PHP_EOL;
}

//outro exemplo de preg_replace

$data = "2022-06-08";
$dataTransformada = preg_replace('/^([0-9]{4})-([0-9]{2})-([0-9]{2})/', '\3/\2/\1', $data);
echo $dataTransformada;




