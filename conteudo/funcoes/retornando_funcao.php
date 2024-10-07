<h1 class="titulo">Retornado Função</h1>

<?php

function soma($a){
    // Se não usar o use, o valor de $a
    // não é utilizado na 2ª função.
    return function($b) use ($a){
        return $a + $b;
    };
};


echo soma(3)(4);

// Aqui armazenamos um dos valores, pré-fixado
// da 1º função(valor de $a)
$doisMais = soma(2);

echo '<br>', $doisMais(10);