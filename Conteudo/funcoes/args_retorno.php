<h1 class="titulo">Argumentos e Retorno</h1>

<?php

function obterMensagem(){
    return 'Seja bem-vindo';
}

$m = obterMensagem();
echo $m;


function obterMensagemComNome($nome){
    return "Bem-vindo, {$nome}!";
}
echo "<br>", obterMensagemComNome('yuri');

function soma($a, $b){
    $soma = $a + $b;
    return $soma;
}
echo "<br>", soma(4,6);


function trocaValor($a, $novoValor){
    $a = $novoValor;
}
$var = 1;

trocaValor($var, 3);
echo "<br>", $var;

// A função abaixo recebe a referencia da variavel e não a copia.
function trocaValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocaValorDeVerdade($var, 400);
echo "<br>", $var;