<h1 class="titulo">Argumento Padrão</h1>

<?php

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    echo "Bem-vindo, $nome $sobrenome! <br>";
}

saudacao();
saudacao(NULL);
saudacao(NULL,NULL);
saudacao('Mestre', 'Yoda');

echo "<hr>";
function anotarPedido($comida, $bebida = "Água"){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');


echo "<hr>";
function anotarPedido2($bebida = "Água", $comida){ // recomendável que os parametros opcionais sejam colocados no final da declaração de argumentos
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}
// anotarPedido2('Hamburguer');
anotarPedido2('Refrigerante2', 'Pizza2');