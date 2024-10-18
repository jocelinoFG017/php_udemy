<h1 class="titulo"> Funções & Escopo</h1>


<?php

function imprimirMensagem(){
    echo "Olá! ";
    echo "Até a próxima!<br>";
}

imprimirMensagem();
imprimirMensagem();

$var = 1;

function trocaValor(){
    $var = 2;
    echo "Durante: $var </br>";
}

echo "Antes: $var <br>";
trocaValor();
echo "Depois: $var <br>";

echo "<hr>" ;

function trocaValorDeVerdade(){
    global $var;
    $var = 3;

    echo "Durante a função : $var <br>";
}

echo "Antes: $var <br>";
trocaValorDeVerdade();
echo "Depois: $var <br>";

