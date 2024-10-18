<h1 class="titulo">Include X Required</h1>

<?php
ini_set('display_errors', 1);

echo "Usando include com arquivo inexistente... <br>";
include('arquivo_inexistente.php');

echo "Usando required com arquivo inexistente... <br>";
require('arquivo_inexistente.php');

echo "não achou mesmo";