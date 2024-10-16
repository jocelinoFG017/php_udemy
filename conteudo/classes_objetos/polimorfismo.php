<h1 class="titulo">Polimorfismo</h1>

<?php

abstract class Comida{
    public $peso;
}

class Arroz extends Comida{

}

class Feijao extends Comida{

}

class Sorvete extends Comida{

}

class Pessoa{
    public $peso;

    function __construct($peso){
        $this->peso = $peso;
    }

    public function comer(Comida $comida){
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz();
$c1->peso = 0.56;

$p = new Pessoa(83.54);
$p->comer($c1);

echo $p->peso;
