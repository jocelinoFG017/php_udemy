<h1 class="titulo">Error Handler</h1>

<?php
ini_set('display_errors', 1);

// echo 4 / 0 . '<br>';

error_reporting(E_ERROR);

// echo 4 / 0 . '<br>';

error_reporting(E_ALL);

// echo 4 / 0 . '<br>';

error_reporting(~E_ALL);
// echo 4 / 0 . '<br>';

echo "<hr>";

error_reporting(E_ALL);

include 'arquivo_inexistente.php';


function filtrarMensagens($errno, $errstring){
    $text = 'include';
    // $text = 'by zero';
    return !!stripos(" $errstring", $text);

}

set_error_handler('filtrarMensagens', E_WARNING);

echo '<hr>';

// echo 4 / 0 . '<br>';

include 'arquivo_inexistente.php';

restore_error_handler(); // 

// echo 4 / 0 . '<br>';

include 'arquivo_inexistente.php';
