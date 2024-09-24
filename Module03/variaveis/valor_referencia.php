<h1 class="titulo">Valor X Referência</h1>

<?php

$var = 'valor inicial';

echo $var;

// Atribuição por valor
$variavelValor = $var;
echo "<br>$variavelValor";

$variavelValor = 'Novo Valor';
echo "<br>$var";
echo "<br>$variavelValor";

// Atribuição por referencia

$varReferencia = &$var; // referencia
$varReferencia = 'mesma referencia'; // valor
echo "<br>$var";
echo "<br>$varReferencia";