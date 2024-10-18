<h1 class="titulo">Required & Return</h1>

<?php


$valorRetorno = require('return_usado.php');
echo "$valorRetorno <br>";
echo "$variavelRetornada<br>";

echo __DIR__ . '<br>'; // __DIR__Representa a pasta atual

$valorRetorno = require(__DIR__ . '/return_nao_usado.php');

echo $valorRetorno . "<br>";

echo "$variavelDeclarada";

