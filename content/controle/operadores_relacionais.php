<h1 class="titulo">Operadores Relacionais</h1>

<?php

var_dump(1 ==1 );
echo '<br>';
var_dump(1 > 1);
echo '<br>';
var_dump(1 < 7);
echo '<br>';
var_dump(1 >= 1);
echo '<br>';
var_dump(1 <> 1);
echo '<br>';
var_dump(1 != 1);
echo '<br>';
var_dump(4 <= 23);
echo '<br>';
var_dump(111 == '111');
echo '<br>';
var_dump(111 === '111');
echo '<br>';

$age = 17;

if ($age < 18){
    echo "<p class='divisao'>Menor de idade</p><hr>";
}else if($age <= 65){
    echo "Adulto";
}else{
    echo "terceira idade";
}

echo '<p>Spaceship</p><hr>';

var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);