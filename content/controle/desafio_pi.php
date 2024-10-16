<h1 class="titulo">Desafio PI</h1>

<?php

echo pi();

$pi = 3.14;

// resposta

if($pi - pi() <= 0.01) {
    echo "Valor dentro do tolerado";
}else{
    echo "Valor não tolerado! Diferença muito grande";
}