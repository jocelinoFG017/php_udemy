<h1 class="titulo">Map e Filter</h1>

<?php

/** array_map('funcao', $array) -> recebe uma função/array e retorna um outro array com a mesma 
 * quantidade de elementos
 * 
 * array_filter($array, 'funcao') -> Receba uma array/função e retorna um novo array 
 * com os elementos Verdadeiros.
 * 
 */


$notas = [5.8, 7.3, 9.8, 6.7];

$notasFinais1 = [];

// Arredonda as notas
foreach($notas as $nota){
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1);

echo '<hr>';

$notasFinais2 = [];

$notasFinais2 = array_map('round', $notas);

print_r($notasFinais2);
echo '<hr>';

$apenasAprovados = [];

// implemento o filter
foreach($notas as $nota){
    if($nota >= 7){
        $apenasAprovados[] = $nota;
    }
    
}
echo '<br>';

print_r($apenasAprovados);

// usando o filter

function aprovados($nota){
    return $nota >= 7;
}
echo '<hr>';

$apenasAprovados = array_filter($notas, 'aprovados' );

print_r($apenasAprovados);

function calculoTop($nota){
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}
echo '<hr>';

$notasFinais3 = array_map('calculoTop', $notas);

print_r($notasFinais3);
