<h1 class="titulo">Interface</h1>

<?php


interface Animal {
    function respirar();

}

interface Canino{
    function latir():string;
}


class Cachorro implements Animal, Canino {
    function respirar(){
        echo "irei usar O <br>";
    }

    function latir(): string{
        return "au au <br>";
    }
}


$animal1 = new Cachorro();
$animal1->respirar();
echo $animal1->latir();

echo "FIM!";

echo '<br>';

var_dump($animal1);
echo '<br>';
var_dump($animal1 instanceof Cachorro);