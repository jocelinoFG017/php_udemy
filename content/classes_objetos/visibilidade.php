<h1 class="titulo">Visibilidade</h1>

<?php

class A {
    public $publico = 'Público';
    protected $protegido = "protegido";
    private $privado = "privado";


    public function mostrarA(){
        echo "a) Publico = {$this->publico}<br>";
        echo "a) Protegido = {$this->protegido}<br>";
        echo "a) Privado = {$this->privado}<br>";
    }

    private function naoMostrar(){
        echo "Não vou imprimir";
    }
}

$a = new A();
$a->mostrarA();


class B extends A{
    public function mostrarB(){
        echo "Class B) Publico = {$this->publico} <br>";
        echo "Class B) Protegido = {$this->protegido} <br>";
        // echo "Class B) Private = {$this->privado}"; // privados são reservados da própria classe, nesse caso a class A.
    }
}

$b = new B();
$b->mostrarB();