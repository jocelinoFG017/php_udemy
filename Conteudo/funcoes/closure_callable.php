<h1 class="titulo">Closure/Callable</h1>

<?php

$soma1 = function ($a, $b){
    return $a + $b;
};

function soma2($a, $b){
    return $a + $b;
};

echo $soma1(2, 3) . ' ';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';
echo "<hr>";

// $soma = 1;

// // echo "<hr>";
// echo is_callable($soma) ? 'Sim' : 'Não' . '<br>';

// echo soma2(2, 3) . ' ';
// echo is_callable(soma2) ? 'Sim' : 'Não' . '<br>';


function executar($a, $b, $op, Callable $funcao ){
    $resultado = $funcao($a, $b) ?? 'nada';
    echo "$a $op $b = $resultado <br>";
};

executar(2, 3, '+', $soma1);
// executar(2, 3, '+', soma2);
echo "<hr>";
function executar2($a, $b, $op, Closure $funcao ){
    $resultado = $funcao($a, $b) ?? 'nada';
    echo "$a $op $b = $resultado <br>";
};

executar2(23, 3, '+', $soma1);
// executar2(22, 3, '+', soma2);