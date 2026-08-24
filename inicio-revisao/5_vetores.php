<?php
//vetor (array simples)
$frutas = ["Maça", "Banana", "Uva"];

//Exibir (Usando laço)
foreach ($frutas as $indice => $fruta) {
    echo "Posição $indice: $fruta \n";
}

//Matriz (array completa) "Linhas e colunas)
$matriz = [
    ["Max verstappen", "Lando Norris", "Oscar Piastri"],
    ["Charles Leclerc", "Lewis Halmiton", "George Russel"],
    ["Fenando Alonso", "Carlos Sainz", "Ayrton Senna"]
];

//Exibindo nome dos pilotos 
echo "\n";
echo "Melhores pilotos da F1: \n";
foreach ($matriz as $linha) {
    foreach($linha as $piloto){
        echo $piloto . " | ";
    }
}
