<?php

namespace Alura\Banco\Modelo;

/*
O trait ele, ao ser usado por uma classe, serve como um, copia as funções daqui e cole numa outra classe.

Por exemplo, o método __get, do jeitinho que ele tá, eu gostaria de compartilhar com outras classes,
então utilizo o trait.
*/
trait AcessoPropriedades
{
    /*
    Esse método aqui é um método mágico,
    que ao você fazer " objeto -> atributo", mesmo que o atributo seja privado,
    consiga pegar. Pois ele pega o nome do atributo e chama o método get correspondente.
    */
    public function __get(string $nomeAtributo)
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}
