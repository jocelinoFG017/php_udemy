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
    <title>Curso PHP</title>
  </head>
  <body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos exercícios</h2>
    </header>
    <main class="principal">
      <div class="conteudo">
        <nav class="modulos">
          <div class="modulo verde">
            <h3>Módulo 01 - Básico</h3>
            <ul>
              <li><a href="exercicio.php?dir=teste&file=teste">Exercicio A</a></li>
              <li><a href="#">Exercicio B</a></li>
              <li><a href="#">Exercicio C</a></li>

            </ul>
          </div>
          <div class="modulo vermelho">
            <h3>Módulo 02 - Básico</h3>
            <ul>
              <li><a href="#">Exercicio A</a></li>
              <li><a href="#">Exercicio B</a></li>
              <li><a href="#">Exercicio C</a></li>

            </ul>
          </div>
          <div class="modulo amarelo">
            <h3>Módulo 03 - Básico</h3>
            <ul>
              <li><a href="#">Exercicio A</a></li>
              <li><a href="#">Exercicio B</a></li>
              <li><a href="#">Exercicio C</a></li>

            </ul>
          </div>
          <div class="modulo azul">
            <h3>Módulo 04 - Básico</h3>
            <ul>
              <li><a href="#">Exercicio A</a></li>
              <li><a href="#">Exercicio B</a></li>
              <li><a href="#">Exercicio C</a></li>

            </ul>
          </div>
          <div class="modulo pink">
            <h3>Módulo 05 - Básico</h3>
            <ul>
              <li><a href="#">Exercicio A</a></li>
              <li><a href="#">Exercicio B</a></li>
              <li><a href="#">Exercicio C</a></li>

            </ul>
          </div>
          <div class="modulo orange">
            <h3>Módulo 06 - Básico</h3>
            <ul>
              <li><a href="#">Exercicio A</a></li>
              <li><a href="#">Exercicio B</a></li>
              <li><a href="#">Exercicio C</a></li>

            </ul>
          </div>
        </nav>
      </div>
    </main>
    <footer class="rodape">
        CoD3r e Alunos @ <?= date('Y');?>
    </footer>
    
  </body>
</html>
