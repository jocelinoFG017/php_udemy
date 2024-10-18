<h1 class="titulo">Operador Ternário</h1>

<?php

$idade = 70;
$status;

if($idade >= 18){
    $status = "maior de idade";
}else{
    $status = "menor de idade";
}

echo "$status";
echo "<br>";
$status = $idade >= 18 ? "Maior de idade": "Menor de idade";

echo "$status";