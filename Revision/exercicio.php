<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@100..800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/estilo.css" />
    <link rel="stylesheet" href="assets/css/exercicio.css" />
    <title> Exercício</title>
  </head>
  <body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ;?> class="verde"> Sem Formatação</a>
        <a href="index.php" class="vermelho"> Voltar</a>
    </nav>
    <main class="principal">
      <div class="conteudo">
        <?php
        // include($_GET['dir'] . "/" . $_GET['file'] . "php");
        include("{$_GET['dir']}/{$_GET['file']}.php");
        // include("teste/teste.php");
        
        ?>
      </div>
    </main>
    <footer class="rodape">
        CoD3r e Alunos @ <?= date('Y');?>
    </footer>
    
  </body>
</html>
