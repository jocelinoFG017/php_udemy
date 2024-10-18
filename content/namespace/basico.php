<?php namespace contexto; ?>
<h1 class="titulo">Exemplo Básico</h1>

<?php

/** O namespace deve ser definido na primeira linha do código
 * 
 */


 echo __NAMESPACE__ . '<br>';

 const constante1 = 123;

 define('contexto\constante2', 234);
 define(__NAMESPACE__ . '\constante3', 456);

 define('outro_contexto\constante4', 567);

 echo constante1 . '<br>';
 echo constante2 . '<br>';
//  echo contexto\constante3 . '<br>'; // caminho relativo, equivalente a contexto/contexto/constante3
//  echo \contexto\constante3 . '<br>';
 echo constant(__NAMESPACE__ . '\constante3') . '<br>';

 echo \outro_contexto\constante4 . '<br>';

 
 function soma($a, $b){
    return $a + $b;
 }

 echo \contexto\soma(1,2) . '<br>';
 echo soma(12, 4) . '<br>';

 function strpos($str, $text){
    echo "buscando o texto '{$text}' em '{$str}' <br>";
    return 1;
 }

 echo strpos('Texto genérico para busca', 'busca') . '<br>';  // pega a função criada anteriormente
 echo \strpos('Texto genérico para busca', 'busca') . '<br>'; // pega do namespace raiz do php, a funcção strpos do php