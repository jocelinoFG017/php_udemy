<h1 class="titulo">Argumentos Variáveis</h1>

<?php

function soma($a, $b){
    return $a + $b;
}

echo soma(4, 5) . "<br>";

function somaCompleta(...$numeros){
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 5, 6);


$array = [2, 4 , 5];

// echo somaCompleta($array); // pega o array inteiro para a função (array dentro do $array)
echo somaCompleta(...$array); // pega os elementos do array(elementos dentro do $array)


function membros($titular, ...$dependentes){
    echo "Titular: $titular <br>";
    if($dependentes){
        foreach($dependentes as $dep){
            echo "Dependentes: $dep <br>";

        }
    }

}
echo "<hr>";
echo "<br>";
membros("Ana", "Pedro", "Rafaela", "Amanda");
echo "<br>";
membros("Roberta");