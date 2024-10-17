<?php 
namespace Desafio;
?>
<h1 class="titulo">Desafio Módulo</h1>

<?php
// echo __NAMESPACE__ . '<br>';
use User\Usuario;

include('d_usuario.php');

$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
$usuario->apresentar();


echo '<hr>';

/** Desafio proposto de namespace
 * a ser utilizado nesses arquivos
 */

// $user2 = new \User\Usuario('Mary Jane', 34, 'maryj');
// $user2->apresentar();
