<h1 class="titulo">Recursividade</h1>

<?php

function somaAteUm($numero) {
    $soma = 0;

    for (; $numero >= 1; $numero--){
        $soma += $numero;
    }
    return $soma;
}

echo somaAteUm(5) . '<br>';

function somaRecursiva($numero){
    // condição de parada
    if($numero === 1){
        return 1;
    }
    return $numero + somaRecursiva($numero - 1);
}

echo somaRecursiva(5) . '<br>';
function somaRecursivaEconomica($numero){
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}
echo somaRecursivaEconomica(5);