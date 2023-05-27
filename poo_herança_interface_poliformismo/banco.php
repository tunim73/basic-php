<?php


/*
O "use" abaixo, não funciona sem o require, o use não importa a classe.
Ao usar o namespace na classe, que é usado para diferenciar classes genéricas internas de externas,
caso tenham o mesmo nome. Ele, de certa forma, renomeia a classe para o namespace que for colocado.

E o "use" serve para pegar o nome correto da classe, para que, inclusive, não precise colocar essa
nomecaltura toda ao usar o "new".

O autoload serve para transformar o nome da classe, em "use", em um require _once. Isso só funciona,
caso o nome da classe, seja o nome do arquivo que ela esteja, o que é o padrão.

*/

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\{ContaCorrente};

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new ContaCorrente($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new ContaCorrente($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new ContaCorrente(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
;
echo ContaCorrente::recuperaNumeroDeContas();
