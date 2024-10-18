<div class="titulo">Include Função</div>

<?php

echo 'Carregando: Include_funcao<br>';

function carregarArquivo(){
    include('include_arquivo.php');

    echo $var . '<br>';

    echo soma(2, 5) . '<br>';
}

echo "novamente no arquivo include_arquivo <br>";

// echo soma(1, 8);

carregarArquivo();

echo soma(2, 6);