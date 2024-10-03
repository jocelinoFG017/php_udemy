<h1 class="titulo">Array Multidimensional</h1>

<?php

$dados = [
    [
        "nome" => "Robert",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Marie",
        "idade" => 22,
        "naturalidade" => "Rio de Janeiro"
    ],
];

print_r($dados);
echo "<br>" . $dados[0]['idade']; // $dados[indice][chave] ou $dados[1ºArray, 2ºArray]

echo "<br>" . $dados[1]['idade'];

echo "<br>" ;
$dados[] = [
    "nome" => "Flor",
    "idade" => 36,
    "naturalidade" => "México"
];
print_r($dados);

echo "<br>" . $dados[2]['idade'];

echo "<br>" ;

$dados[2]["vizinho"] = "chaves"; // Adiciona um novo elemento(vizinho) no indice 2(flor) com o valor "chaves"

print_r($dados);
echo "<br>" ;
unset($dados[1]);
print_r($dados);
echo "<br>" ;

