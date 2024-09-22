<h1 class="titulo">Conversões</h1>

<?php
// Apresenta os erros 
/*
error_reporting(E_ALL);
ini_set('display_errors', 1);
*/

echo is_int(PHP_INT_MAX);

// int para float

echo '<p> int para Float</p>';
echo "<br>";

var_dump(PHP_INT_MAX + 1);
echo "<br>";

var_dump(1 + 1.0);

echo "<br>";

var_dump((float) 3); // casting

echo "<br>";

// float para int

echo '<p> Float para int </p>';

var_dump((int) 7.5);
echo "<br>";

var_dump(intval(2.8, 10));
echo "<br>";

var_dump((int) round(2.8)); // round() faz o arredondamento
echo "<br>";


// Operações com String
echo '<p> Strings </p>';
echo "<br>";

var_dump(3 + "2");
echo "<br>";

var_dump("4" + 2);

echo "<br>";

var_dump("3". 2);
echo "<br>";

// echo "<br>", is_string("3" . 2);
// echo "<br>", is_string("3" + 2);
// echo "<br>";

// var_dump(1 + "cinco");
echo "<br>";

var_dump(1 + "5 cinco");
echo "<br>";

var_dump(1 + "2 + 5");
echo "<br>";

var_dump(1 + "-3.2e2");
echo "<br>";

var_dump((int) "10.5");
echo "<br>";

var_dump((float) "10.5");
