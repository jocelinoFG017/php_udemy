<h1 class="titulo"> Classe Abstrata </h1>

<?php 

abstract class Abstrata{
    public abstract function metodo1();
    abstract protected function metodo2($parametro);

}

abstract class FilhaAbstrata extends Abstrata {
    public function metodo1(){
        echo "executando metodo1 <br>";
    }
    abstract public function metodo3();

}


class Concreta extends FilhaAbstrata{
    public function metodo1(){
        echo "executando m1 <br>";
        parent::metodo1();
    }

    // protected function metodo2($parametro){
    //     echo "executando m2<br>";
    // }

    public function metodo3(){
        echo 'executando m3<br>';
        $this->metodo2('interno');
    }
}

$c = new Concreta();
$c->metodo1();
$c->metodo3();

echo "Fim!";
