<h1 class="titulo">While/Do While</h1>

<?php

const VALOR_LIMITE = 5;

$contador = 0;

while($contador < VALOR_LIMITE){
    echo "While $contador <br>";
    $contador++;
}

$contador = 0;

do {
    echo "Do-While $contador <br>";
    $contador++;
}while($contador < VALOR_LIMITE);
