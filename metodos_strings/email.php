<?php

function geraEmail(string $nome): void
{
    //sintaxe usada para criar strings e menter a identação, sem que a esta interfira na string em sí.
    $conteudoEmail = <<<FIM
    Olá, $nome!
    
    Estamos entrando em contato para
    {motivo do contato}
    
    {assinatura}

    FIM;

    echo $conteudoEmail;
}

geraEmail('Vinicius Dias');