<h1 class="titulo">Include Once</h1>

<?php
ini_set('display_erros', 1);

include_once('include_once_arquivo.php');
// require_once('include_once_arquivo.php');

echo "Variável = '{$var}'. <br>";

$var = 'Variavel Alterada';

echo "Variável = '{$var}'. <br>";

// include_once('include_once_arquivo.php');

/**
 * include_once -> chama o arquivo somente uma vez, caso seja utilizado em outra parte do arquivo
 * o include percebe que o arquivo já foi chamado antes.
 * O mesmo vale para o require_once;
 * 
 * 
 * Caso haja erro no código o required para de funcionar, no caso do include
 * algumas coisas ainda rodam até o ponto/momento do erro.
 * 
 * 
 * OBS: Ao chamar um mesmo arquivo 2 vezes no mesmo código haverá redefinição de variaveis
 * e funções(exceto se os métodos forem criados com a verificação if_exists())
 */

