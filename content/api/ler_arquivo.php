<h1 class="titulo">Ler arquivo </h1>

<?php

$file = fopen('teste.txt', 'r');
echo fread($file, 10);

$tamanho = filesize('teste.txt');
echo "\n $tamanho \n";
echo fread($file, $tamanho);

fclose($file);



$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo);

while(!feof($arquivo)){
    echo fgets($arquivo);
}
fclose($arquivo);

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo);

while(!feof($arquivo)){
    echo fgetc($arquivo); // caractere por caractere
}
fclose($arquivo);

// r+ possibilita a leitura e alteração do arquivo
$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo); // ler a 1º linha do arquivo
echo fgets($arquivo);// ler a 2º linha do arquivo

fwrite($arquivo, "Adicionando durante a leitura");

fclose($arquivo);

echo "Fimm!";