<?php

//Exemplo da função em PHP (uma função sempre tem retorno)

function somar (float $a, float $b): float{
    return $a + $b;
}
// Chamando a função
echo somar(4.5, 9.3);
echo"\n";

// Exemplo de procedimento (Não tem return, pois não calcula)
function saudacao(string $nome) {
    echo "Olá, $nome! Seja Bem-vindo(a)!!";
}
    

//Usando/exibindo (Procedimento)
saudacao("Maria Smart");
echo "\n";
saudacao("Mary Lost");