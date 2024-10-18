<?php

namespace Outro\Nome;
?>

<h1 class="titulo">Use/As</h1>

<?php

echo __NAMESPACE__ . '<br>';

include('use_as_arquivo.php');

function soma($a, $b)
{
    return $a . $b;  // apenas para diferenciar as funções e gerar conflito
}

class Classe
{
    public $var;

    function func()
    {
        echo __NAMESPACE__ . ' -> ' . __CLASS__ . ' -> ' . __METHOD__ . '<br>';
    }
}

echo \Nome\Bem\Grande\constante . '<br>';

use const \Nome\Bem\Grande\constante;

echo constante  . '<br>';


use \Nome\Bem\Grande as ctx;

echo soma(1,2) . '<br>';
echo ctx\soma(1,2) . '<br>';

// use function \Nome\Bem\Grande\soma; //conflito de nomes, nesses caso utilizamos o as, e damos um apelido para a função
use function \Nome\Bem\Grande\soma as somaReal;

echo somaReal(1, 3) . '<br>';


$a = new Classe();
$a->func();

$b = new \Nome\Bem\Grande\Classe();
$b->func();

$c = new ctx\Classe();
$c->func();

use \Nome\Bem\Grande\Classe as D;

$d = new D();
$d->func();