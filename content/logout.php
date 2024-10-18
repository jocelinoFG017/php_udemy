<?php
session_start();

session_destroy();

unset($_COOKIE['usuario']); // limpa o valor da variavel
setcookie('usuario', '');// limpa o cookie

header('Location: login.php');