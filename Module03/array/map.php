<h1 class="titulo">MAPA</h1>

<?php

$dados = array(
    "idade" => 25,
    "cor"   => "verde",
    "peso"  => 49.80
);

print_r($dados);


echo '<br>' . $dados['idade'];
echo '<br>' . $dados['cor'];
echo '<br>' . $dados['peso'];


echo '<br>';
var_dump($dados['asdasdasd']);

$dados[] = "i"; // adicionar elemento no array

print_r($dados);