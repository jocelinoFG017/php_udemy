<h1 class="titulo">Desafio Palindromo</h1>

<?php
/** Escreva uma função que detecta palavras palindromas
 * Ex: Ana, arara.
 */

function palindromo($palavra){
    $lastIndex = strlen($palavra) - 1;

    for($i = 0; $i <= $lastIndex ; $i++){
        if($palavra[$i] !== $palavra[$lastIndex - $i]){
            return "Não";
        }
    }
    return "Sim";
}

echo palindromo('ana') . '<br>';
echo palindromo('bola') . '<br>';
echo palindromo('arara') . '<br>';

echo "<hr>";
function palindromoSimples($palavra){
    return $palavra === strrev($palavra) ? 'sim' : 'não';
}
echo palindromoSimples('ana') . '<br>';
echo palindromoSimples('bola') . '<br>';
echo palindromoSimples('arara') . '<br>';
