<?php

// Passando valores pela URL (Método GET)
// http://localhost/php-exemplos-basicos/2_opera_variaveis.php?numero1=10&numero2=5

// Recebe 2 valores
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];

// Verifica se os valores foram passados corretamente 
// A função nativa do PHP "isset" faz isso
if (isset($numero1) && ($numero2) ){
    $numero1 = (float)$numero1;
    $numero2 = (float)$numero2;


//Calculos 
$soma = $numero1 + $numero2;
$subtração = $numero1 - $numero2;
$multiplicação = $numero1 * $numero2;
$divisão = $numero1 / $numero2;

//Exibindo Resultados 
echo "Soma: $soma \n";
echo "Subtração: $subtração \n";
echo "Multiplicação: $multiplicação \n";
echo "Divisão: $divisão \n";


} else {
    echo "Por favor, forneça os valores pela URL." ;
}
