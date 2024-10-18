<h1 class="titulo">Operações Aritméticas</h1>

<?php

echo 1 + 1, "<br>"; // soma

echo 1 + 0.25, "<br>"; // soma

echo 10 -2 ,"<br>"; // subtração

echo 2 * 5,"<br>"; // multiplicacao

echo 7 / 4,"<br>"; // divisao

echo intdiv(7, 4),"<br>"; // divisão de numero inteiro, trunca os valores(Nºs Quebrados/float não são mostrados)

echo  round(7 / 4),"<br>";

echo 7%4,"<br>"; // resto da divisão

//echo intdiv(7, 0),"<br>"; # erro!

echo 4**2,"<br>"; //potenciacao

echo "<p> Prêcendencia</p>";
// () => ** => / * % => + -
echo 2  + 3 * 4,"<br>";
