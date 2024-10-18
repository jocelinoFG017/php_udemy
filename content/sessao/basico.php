<h1 class="titulo">Sessão</h1>

<?php

session_start(); // inicia a sessão


print_r($_SESSION);

echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Gabi';
}

if(!$_SESSION['email']){
    $_SESSION['email'] = 'Gabi@gmail.com';
}

?>

<p>
    <a href="/php_udemy/content/sessao/basico_sessao_alterar.php" > Alterar Sessao</a>
</p>