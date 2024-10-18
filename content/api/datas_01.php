<h1 class="titulo">Datas #01</h1>

<?php

echo time() . '<br>';

echo date('D, d  \d\e M \d\e Y');



// echo strftime('%A, %d de %B de %Y', time() . '<br>');  // depreciada

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');
echo '<br>';
echo date('D, d  \d\e M \d\e Y');

$amanha = time() + (60 * 60  * 24);
echo '<br>';
echo strftime('%A, %d %B', $amanha);

echo '<br>';

$proximaSemana = strtotime('+1 week');
echo strftime('%A, %d %B', $proximaSemana);
echo '<br>';

$dataFixa = mktime(15, 40, 50, 1, 25, 1975);
echo strftime('%A, %d %B de %Y - %H:%M:%S', $dataFixa);
