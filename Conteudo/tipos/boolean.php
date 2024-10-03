<h1 class="titulo">Tipo Boolean</h1>

<?php 

echo TRUE;
echo "<br>";
echo FALSE; // não retorna nada

var_dump(FALSE);
echo "<br>";
var_dump(true);
echo "<br>";
echo var_dump('false');

echo "<br>" . is_bool(true);

// regras para conversão

echo '<p> Regras: </p>';
echo '<br>' . var_dump((bool) 0); // Apenas zero é false
echo '<br>' . var_dump((bool) 20); // true
echo '<br>' . var_dump((bool) -2); // true
echo '<br>' . var_dump((bool) -0.0); // false
echo '<br>' . var_dump((bool) 0.00000001); // true
echo '<br>' . var_dump((bool) ""); // false
echo '<br>' . var_dump((bool) " "); // true
echo '<br>' . var_dump((bool) "0"); // false
echo '<br>' . var_dump((bool) "00"); // true
echo '<br>' . var_dump((bool) "false"); // true