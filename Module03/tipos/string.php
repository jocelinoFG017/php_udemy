<h1 class="titulo">Tipo Strings</h1>

<?php
echo 'Eu sou uma String';

echo '<br>';

var_dump("Eu também");
echo "<br>";


// Concatenação 
echo "Nós também" . ' SOMOS';
echo "<br>", "Também aceito", " virgulas";
echo "<br>";

echo "'Teste' " . '"Teste"';
echo "<br>";
echo '\'Teste\'' . " \"Teste\"";


print("<br> Também existe a função print");
print "<br> Também existe a função print";

// Algumas funções

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MaxImIZado');
echo '<br>' . ucfirst('somente a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas Letras?');
echo '<br>' . mb_strlen('Eu também?', "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7,6);
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso'); // troca isso por aquilo no texto Trocar isso


