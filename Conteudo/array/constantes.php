<h1 class="titulo">Array Constantes</h1>

<?php
/*
    Arrays constantes no PHP
    - Não é possivel adicionar ELEMENTOS em arrays constantes no php via atribuição
    - Não é possível mexer no conteúdo interno do array
    - OBS: Se fizer vai quebrar o código
*/

const FRUTAS = ['Laranja', 'Manga'];


//FRUTAS[0] = 'Macã'; // Não é permitido pelo php
//FRUTAS[] = 'Macã'; // Não é permitido pelo php

echo FRUTAS[0];

const CARROS = [
    "fiat" => "Uno",
    "ford" => "Fiesta"
];
// CARROS["BMW"] = '325i';

echo '<br>' . CARROS["fiat"];

define('CIDADES', array("Belo horizonte", "Recife"));

// CIDADES[] = "Rio de janeiro";// Não é permitido pelo php
echo '<br>' . CIDADES[1];