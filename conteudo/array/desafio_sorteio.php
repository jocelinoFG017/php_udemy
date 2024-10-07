<h1 class="titulo">Desafio Sorteio</h1>

<?php

$nomes = ["Jon", "Jena", "Stuart", "Jack","Ellie"];


$index = array_rand($nomes);

echo "<div center><h1>$nomes[$index]</h1></div>";

?>

<style>
    [center]{
        display: flex;
        justify-content: center;
    }
</style>