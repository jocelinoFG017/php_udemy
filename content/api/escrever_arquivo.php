<h1 class="titulo">Escrever Arquivo</h1>

<?php

// $file = fopen('teste.txt', 'w');

// fwrite($file, "Valor inicial \n");

// $str = "Segunda Linha \n";
// fwrite($file, $str);

// fclose($file);

// $arquivo = fopen('teste.txt', 'w');
// fwrite($arquivo, "Novo Conteudo \n");
// fclose($file);


$file = fopen('teste.txt', 'a');
fwrite($file, " Com novos valores \n");
fwrite($file, 'Adicionados em um 2º momento');

fclose($file);

ini_set('display_erros', 1);

// Flag X - sempre cria arquivos novos, se o arquivo já existe ele não escreve no arquivo existente e gera erros
// $file = fopen('teste.txt', 'x'); 