<h1 class="titulo">Desafio Recursividade</h1>

<?php
/**
 * $array = [1, 2 [3, 4, 5], 6, [7, [8, 9]]];
 * Exemplo de saida:
 * > 1
 * > 2
 * >> 3
 * >> 3
 * >> 5
 * > 6
 * >> 7
 * >>> 8
 * >>> 9 
 */

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]]];

function imprimirArray($array, $level = '>'){
    foreach($array as $elemento){
        if(is_array($elemento)){
            imprimirArray($elemento, $level . $level[0]);
        }else{
            echo "$level $elemento <br>";
        }
    }
}

imprimirArray($array);
imprimirArray($array, '#');