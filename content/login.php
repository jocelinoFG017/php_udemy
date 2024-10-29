<?php
session_start();
ini_set("display_errors", 0);

$email = $_POST['email'];
// var_dump($_POST['email']);
$senha = $_POST['senha'];

if($_POST['email']) {
    $usuarios = [
      [
        "nome" => "Aluno Coder",
        "email" => "aluno@coder.com.br",
        "senha" => "123456",
      ],
      [
        "nome" => "Outro aluno",
        "email" => "outro@coder.com.br",
        "senha" => "654321",
      ]
    ];

  foreach ($usuarios as $usuario) {
    $emailValido = $email === $usuario['email'];
    $senhaValida = $senha === $usuario['senha'];

    if ($emailValido && $senhaValida) {
      $_SESSION['erros'] = null;
      $_SESSION['usuario'] = $usuario['nome'];

      $exp = time() + 60 * 60 * 24 * 30;
      setcookie('usuario', $usuario['nome'], $exp);

      header('Location: index.php');
    }
  }

  if (!$_SESSION['usuario']) {
    $_SESSION['erros'] = ['Usuario\senha inválida!'];
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@100..800&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/login.css" />
  <title>Curso PHP</title>
</head>

<body class="login">
  <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Seja Bem vindo</h2>
  </header>
  <main class="principal">
    <div class="conteudo">
      <h3>Identifique-se</h3>
      <?php 
        if ($_SESSION['erros']): 
      ?>
        <div class="erros">
          <?php foreach ($_SESSION['erros'] as $erro): ?>
            <p> <?= $erro ?> </p>
          <?php endforeach ?>
        </div>
      <?php endif ?>

      <form action="#" method="post">
        <div>
          <label for="email"> E-mail</label>
          <input type="email" name="email" id="email">
        </div>
        <div>
          <label for="senha">Senha</label>
          <input type="password" name="senha" id="senha">

        </div>
        <button> Entrar</button>
      </form>
    </div>
  </main>
  <footer class="rodape">
    CoD3r e Alunos @ <?= date('Y'); ?>
  </footer>

</body>

</html>