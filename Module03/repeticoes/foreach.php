<h1 class="titulo">Foreach</h1>

<?php
/**
 * Não importa o Indice o foreach percorre todos os elementos do array
 */

$array = [100 => 'domingo', 'segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sabado'];

foreach($array as $valor){
    echo "$valor <br>";
}

foreach($array as $indice  => $valor){
    echo "$indice => $valor <br>";

}


$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd'],
];

foreach($matriz as $linha){
    foreach($linha as $letra){
        echo $letra;
    }
    echo "<br>";

}


$numeros =[1, 2, 3, 4, 5];

// foreach($numeros as &$dobrar){ // pega a referencia dos elementos, uso não muito popular
foreach($numeros as $dobrar){ 
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r($numeros);