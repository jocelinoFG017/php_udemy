<h1 class="titulo">Operadores Lógicos</h1>

<?php
// operadores unários

var_dump(!true); // ! similar ao not

// Operador  AND 

var_dump(true && true);
var_dump(true AND true);


// operador OR
var_dump(value: true || true);
var_dump(true OR true);

var_dump(true XOR true);

echo "<p class='divisao'> Exemplo</p><hr>";
$age = 62;
$sex = 'F';

$pagouPrevidencia = true;

$podeAposentar = $pagouPrevidencia &&
                (
                    ($age >= 60 && $sex === 'F' ||
                    $age >= 65 && $sex === 'M' )
                );

echo "Pode se aposentar -> $podeAposentar.<br>";

if($age >= 60 && $sex === 'F'){
    echo "Pode aposentar-se -> $sex";
}elseif($age >= 65 && $sex === 'M'){
    echo "Pode aposentar-se -> $sex";
}else{
    echo "Senta e chora";
}
