<?php

//Criando variáveis 
$idade = 19;
$temDocumento = false;

// Estrutura de decisão (Operador E)
    if ($idade >= 18 && $temDocumento) {
        echo "Pode tirar carteira";
    } else {
        echo "Não pode tirar carteira";
    }

    // Estrutura de decisão (Operador OU)
    if ($idade >= 18 || $temDocumento) {
        echo "\nPode tirar carteira";
    } else {
        echo "Não pode tirar carteira";
    }

    // Operador negação 

    $presente = false; 

    if (!$presente) {
        echo "\nO aluno está presente";
    } else {
        echo "\nO aluno está ausente";
    }
