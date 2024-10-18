<h1 class="titulo">Laço for</h1>

<?php


for ($i = 1; $i <= 5; $i++) {
    echo $i;
}
echo "<br>";

// se $i não for declarado no primeiro elemento do for, ele inicia do 0
// se $ já tiver sido declarado em um for anterior ele começa a partir do ultimo numero do for anterior
for (; $i <= 10; $i++) {
    echo $i;
}


$array = [1 => 'domingo', 'segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sabado'];

print_r($array);

echo '<br>';
echo '<hr>';

for ($i = 0; $i <= count($array); $i++) {
    echo "{$array[$i]} <br>";
}

$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd'],
];
echo '<hr>';
for ($i = 0; $i < count($matriz); $i++) {
    for ($j = 0; $j < count($matriz[$i]); $j++) {
        echo "{$matriz[$i][$j]}";
    }
    echo "<br>";
}
