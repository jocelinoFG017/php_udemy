<h1 class="titulo">Usando Tipos</h1>

<?php

function soma($a, $b){
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo soma(1, 2) . "<br>";
echo soma(1.7, 2.5) . "<br>";
echo soma(1, '4dois') . "<br>";

function soma2(int $a, int $b){
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}
echo "<hr>";
echo soma2(1, 2) . "<br>";
echo soma2(1.7, 2.5) . "<br>";
// echo soma2(1, '4dois') . "<br>";

/**
 * Função de soma que pode receber valores float
 * Apenas o retorno é int
 * @param mixed $a
 * @param mixed $b
 * @return int
 */
function soma3($a, $b): int{
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo "<hr>";
echo soma3(1, 2) . "<br>";
echo soma3(1.7, 2.5) . "<br>";
echo soma3(1, '4dois') . "<br>";