<?php
session_start();

print_r($_SESSION);

?>

<p> 
    <b> Nome: </b> <?= $_SESSION['nome'] ?> <br>
    <b> Email: </b> <?= $_SESSION['email'] ?>
</p>

<?php

$_SESSION['email'] = 'gabi-alt@zmail.com';

?>
<p> <a href="basico.php"> Voltar</a> </p>
<p>
    <a href="basico_sessao_limpar.php" > Limpar Sessao</a>
</p>
