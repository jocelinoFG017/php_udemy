<h1 class="titulo">Switch</h1>

<?php

$categoria = 'luxo';
$preco = 0.0;
$carro =  '';

$categoria = 'luxo';

switch ($categoria) {
    case 'luxo':
        $carro = "Mercedes";
        $preco = 2500000;
        break;
    case 'suv':
        $carro = "Renegade";
        $preco = 120000;
        break;
    case 'sedan':
        $carro = "Etios";
        $preco = 88000;
        break;
    default:
        $carro = "Mobi";
        $preco = 33000;
}

$preco_formatado = number_format($preco, 2, ",", ".");

echo "$carro";
echo "<br>";
echo "$preco_formatado";