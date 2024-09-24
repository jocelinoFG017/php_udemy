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
          <h3>Básico</h3>
          <ul>
            <li>
              <a href="exercicio.php?dir=basico&file=ola">
                Olá PHP
              </a>
            </li>
            <li>
              <a href="exercicio.php?dir=basico&file=html">
                Integração HTML
              </a>
            </li>
            <li>
              <a href="exercicio.php?dir=basico&file=css">
                Integração CSS
              </a>
            </li>
            <li>
              <a href="exercicio.php?dir=basico&file=comentarios">
                Comentários PHP
              </a>
            </li>
            <li>
              <a href="exercicio.php?dir=basico&file=desafio">
                Desafio
              </a>
            </li>
          </ul>
        </div>
        <div class="modulo vermelho">
          <h3>Tipos</h3>
          <ul>
            <li>
              <a href="exercicio.php?dir=tipos&file=int">
                Tipo Inteiro
              </a>
            </li>
            <li>
              <a href="exercicio.php?dir=tipos&file=float">
                Tipo Float
              </a>
            </li>
            <li>
              <a href="exercicio.php?dir=tipos&file=aritmeticas">
                Op. Aritméticas
              </a>
            </li>
            <li>
              <a href="exercicio.php?dir=tipos&file=desafio_precedencia">
                Desafio Precedência
              </a>
            </li>
            <li>
              <a href="exercicio.php?dir=tipos&file=string">
                Tipo String
              </a>
            </li>
            <li>
              <a href="exercicio.php?dir=tipos&file=desafio_string">
                Desafio String
              </a>
            </li>
            <li>
              <a href="exercicio.php?dir=tipos&file=boolean">
                Tipo Boolean
              </a>
            </li>
            <li>
              <a href="exercicio.php?dir=tipos&file=conversoes">
                Conversões
              </a>
            </li>
          </ul>
        </div>
        <div class="modulo azul">
          <h3>Variáveis</h3>
          <ul>
            <li>
              <a href="exercicio.php?dir=variaveis&file=basico">
                Variáveis
              </a>
            </li>
            <li>
              <a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                Desafio Equação
              </a>
            </li>
            <li>
              <a href="exercicio.php?dir=variaveis&file=atribuicao">
                Atribuição
              </a>
            </li>
            <li>
              <a href="exercicio.php?dir=variaveis&file=interpolacao">
                Interpolação
              </a>
            </li>
            <li>
              <a href="exercicio.php?dir=variaveis&file=var_variaveis">
              Var_variaveis
              </a>
            </li>
            <li>
              <a href="exercicio.php?dir=variaveis&file=desafio_variaveis">
              Desafio variaveis
              </a>
            </li>
            <li>
              <a href="exercicio.php?dir=variaveis&file=valor_referencia">
              Valor X Referência
              </a>
            </li>
            <li>
              <a href="exercicio.php?dir=variaveis&file=constantes">
              Constantes
              </a>
            </li>
            
          </ul>
        </div>
        <div class="modulo pink">
          <h3>Controle #1</h3>
          <ul>
            <li>
              <a href="exercicio.php?dir=controle&file=if_else">
                IF ELSE
              </a>
            </li>           
            <li>
              <a href="exercicio.php?dir=controle&file=operadores_relacionais">
                Operadores Relacionais
              </a>
            </li>  
            <li>
              <a href="exercicio.php?dir=controle&file=desafio_pi">
                Desafio PI
              </a>
            </li>  
          </ul>
        </div>
      </nav>
    </div>
  </main>
  <footer class="rodape">
    CoD3r e Alunos @ <?= date('Y'); ?>
  </footer>

</body>

</html>