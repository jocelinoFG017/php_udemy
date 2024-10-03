<h1 class="titulo"> Array </h1>

<?php

$lista = array(1, 2.0, 4, 5, 'texto');

var_dump($lista);

$texto = "Esse é um texto";

// echo $texto[6]; // cuidado!
echo $texto[11];
echo mb_substr($texto, 10, 1); // Leva em consideração o encoding utf-8 mb_substr(STRING, INICIO, TAMANHO)