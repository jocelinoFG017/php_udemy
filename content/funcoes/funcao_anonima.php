<h1 class="titulo">Função Anônima</h1>

<?php


$soma = function ($a, $b){
    return $a + $b;
};

echo $soma(1, 2);

echo "<hr>";

function executar($a, $b, $op, $funcao ){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>";
};

executar(2, 3, '+', $soma);


$multiplica = function ($a, $b){
    return $a * $b;
};

echo "<hr>";

executar(2, 3, '*', $multiplica);

echo "<hr>";

$divisao = function ($a, $b){
    return $a / $b;
};

executar(1, 3, '/', $divisao);