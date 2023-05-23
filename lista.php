<?php
/*
 Arrays no PHP internamente funcionam como um HashTables, então tem uma chave e um valor,
 sendo a chave por padão é um numero, como em outras linguagens, mas posso alterar para
 uma string, um cpf, etc.

 */



/*
$list_idade = ["hello",25,90];

for ($i = 0; $i<count($list_idade); $i++) {
    echo $list_idade[$i] . PHP_EOL;
}
*/



/*
Array associativo

Associação de uma chave a um valor, então no array abaixo
não posso chmar $conta1[0], por que eu alterei a a chave para uma string específica, mas
também poderia modificar a chave para uma um cpf em string ou valores numericos
*/
$conta1  = [
    'nome' => "Peralta",
    'saldo' => -15
];
$conta2  = [
    'nome' => "Amy",
    'saldo' => 1000
];
$conta3  = [
    'nome' => "Gina",
    'saldo' => 500
];


$contas = [$conta1, $conta2, $conta3];



for($i = 0; $i<count($contas); $i++){
    echo "conta: {$contas[$i]['nome']} ". PHP_EOL;
    //A forma de eu pegar o valor
}

/*
foreach ($contas as $conta) {
    echo $conta['saldo'] . PHP_EOL;
}
*/

echo "------------------------------------------------------";
$contasComCpf = [
    1234 => $conta1,
    5678 => $conta2,
    91011 => $conta3
];

/*
foreach ($contasComCpf as $cpf => $conta) {
    //para cada chave de $cpf tal, me passe o  seu valor

    echo $cpf.  " " . $conta['saldo'] . PHP_EOL;
}

*/

$listaDeNomes = ["Naruto", "sasuke"];
//adicionando um novo elemnto
$listaDeNomes[] = "sakura";
/*
 ou
 $listaDeNomes[count($listaDeNomes)] = 'sakura'
 ou
 $listaDeNomes[3] = 'sakura', mas de forma estática
*/

$listaDeNomes[1] = "Ino";

foreach ($listaDeNomes as $number => $li ){
    echo $li .PHP_EOL;
}

/*
 Função, aqui no php, a função pega cópia das informações de uma variável

 Importante: Por mais que seja uma linguagem dinamicamente tipada, em funções, a apartir do php 7 eu acho,
 posso tipar a entrada e o retorno de uma função
*/
$x = 10;

echo name($x) .PHP_EOL;
echo $x;

//
function name (float $entrada) : float
{
    $soma = 50 + $entrada;
    return $soma;
}

/*
 * Padrão chaves de funções na linha de baixa, de condicionais e laços em linha
 *
 *
 *
 * */

