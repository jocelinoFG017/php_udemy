<h1 class="titulo">Constantes</h1>

<?php 

// Criando CONSTANTES com a função define()
define('TAXA_DE_JUROS', 5.9);

echo TAXA_DE_JUROS;

// Utilizando const

const NOVA_TAXA = 2.5;
echo "<br>", NOVA_TAXA;

echo "<br>", PHP_VERSION;

$valorVariavel = 2.8;
// define('NEW_TAX', $valorVariavel);
// const NEW_TAX = $valorVariavel;
const NEW_TAX = 2.98 + 1.2;
echo '<br>', NEW_TAX;