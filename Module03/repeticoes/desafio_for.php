<h1 class="titulo">Desafio for</h1>

<?php
/**
 * Desafio Utilizando o laço for
 * Faça um código que mostre o # em cada iteração
 * a cada iteração vai adicionando um #
 * ex:
 * #
 * ##
 * ###
 * ####
 * #####
 * 
 * 1) Pode usar incremento $++
 * 2) Não pode usar incremento $i++
 */
$hashtag = '#';

for ($i = 0; $i < 5; $i++) {
   echo $hashtag;
   echo "<br>";
   $hashtag = $hashtag . "#";
   // $hashtag .= "#"; // alternativa a linha 23
}

echo '<hr>';

for ($impressao = '#'; $impressao !== "######"; $impressao .= "#") {
   echo $impressao;
   echo "<br>";
}
