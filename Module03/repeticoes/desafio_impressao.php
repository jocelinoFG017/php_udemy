<h1 class="titulo">Desafio Impressão</h1>


<?php
/**
 * Enunciado:
 *  - Imprima apenas os valores do array que contém indice par
 *  - Resolver com for e foreach
 *  - Valores Esperados: AAA, CCC, EEE
 */


 $array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF",
 ];

 for ($i = 0; $i < count($array);$i++){
    
    if($i % 2 == 0){
        print_r($array[$i]);
    }

 }
echo "<hr>";

 foreach($array as $chave => $valor){
    if($chave % 2 == 0){
        print_r($valor);
    }
 }