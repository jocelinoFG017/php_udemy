<h1 class="titulo">Variáveis</h1>

<?php

$numeroA = 13;

echo $numeroA;

echo "<br>";

var_dump($numeroA);
echo "<br>";
$a = 3;
$b = 16;
$soma = $a + $b;

echo $soma;

echo "<br>";
echo isset($soma);

echo "<br>";

unset($soma);
// var_dump($soma);

$var = 10;
echo "<br>" . $var;
$var = "Agora sou string";
echo "<br>" . $var;

// Variáveis parte 02 (segundo video)

// Nomes de variavel

$var = 'valid';
$var2 = 'valid';
$VAR3 = 'valid';
$var_4 = 'valid';
$vâr5 = 'valid'; // Evitar acentos
// $6var = 'invalid';
// $%var5 = 'invalid';
// $var8% = 'invalid';

echo '<br>';
var_dump($_SERVER['SERVER_NAME']);
