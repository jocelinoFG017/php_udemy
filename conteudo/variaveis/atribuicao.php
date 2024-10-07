<h1 class="titulo">Atribuição</h1>

<?php

$title = "Atribuição";

$n = 10;
echo '<br>' . $n;

$n = $n -1;
echo '<br>' . $n;

$n = $n + 1.3;
echo '<br>' . $n;

$n--; // decremento
echo '<br>' . $n;

--$n; // decremento -> $n = $n - 1
echo '<br>' . $n;
$n++; // incremento -> $n = $n + 1
echo '<br>' . $n;
++$n;
echo '<br>' . $n;

$n -=  5;
echo '<br>' . $n;

$n +=  5;
echo '<br>' . $n;

$n *=  10;
echo '<br>' . $n;

$n /=  2;
echo '<br>' . $n;

$n %=  6;
echo '<br>' . $n;

$n **=  4;
echo '<br>' . $n;

$n .= 4; // apenas concatenação
echo '<br>' . $n;

$texto = 'Esse é um texto';
echo '<br>' . $texto;
$texto = $texto . ' qualquer';
echo '<br>' . $texto;
$texto .= ' de verdade';
echo '<br>' . $texto;


// $varInexistente = 'valor existente';
echo '<br>' . $varInexistente;
$valor = $varInexistente ?? 'valor default'; // Define o valor padrão a uma variavel, caso o primeiro valor esteja indisponível.
echo '<br>' . $valor;
