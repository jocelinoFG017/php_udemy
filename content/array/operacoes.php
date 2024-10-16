<h1 class="titulo">Operações</h1>

<?php

$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dadosCompletos = $dados1 + $dados2;

print_r($dadosCompletos);

echo "<br>" . is_array($dadosCompletos); // verifica se é um array
echo "<br>" . count($dadosCompletos); // conta os elementos do array

$indice =  array_rand($dadosCompletos); // pega um dado de forma aleatoria
echo "<br>";
echo "$indice = $dadosCompletos[$indice]";

echo "<br>";

echo "{$dadosCompletos['idade']}";
echo "${dadosCompletos['idade']}"; // forma depreciada

unset($dadosCompletos['nome']);
echo "<br>";
print_r($dadosCompletos);

unset($dadosCompletos); // Libera espaço em memória, deixa a variavel limpa
echo "<br>";
// var_dump($dadosCompletos); // O warning aparece por causa do unset(), porque resetamos o valor da variavel pra NULL



$impar = [1, 3, 5, 7, 9];
$par = [0, 2, 4, 6, 8];

echo"<br>";

$decimais = $par + $impar;

echo"<br>";

print_r($decimais);

echo"<br>";

$decimais = array_merge($par, $impar);


print_r($decimais);

echo"<br>";
sort($decimais); // coloca os elementos do array em ordem

print_r($decimais);
