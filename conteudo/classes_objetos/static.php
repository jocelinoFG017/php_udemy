<h1 class="titulo">Membros Estáticos</h1>

<?php

class A{
    public $noStatic = 'variavel de instância';

    public static $static =  'variavel de classe(estática)'; // atributo restrito da classe

    public function mostrarA(){
        echo "Não estático: {$this->noStatic} <br>";

        // tentativa 01 - Não vai mostrar
        // echo "Estático: {$this->static} <br>";
        // tentativa 02 - Não funciona com o {}
        // echo "Estático: {self::$static} <br>";
        echo "Estático: " . self::$static . "<br>";

    }


    public static function mostrarStatic(){
        // echo "Não estático: {$this->noStatic} <br>";
        // echo "Estática = {$static} <br>"; // não acessa dessa forma
        echo "Estática = " . self::$static . "<br>";
    }

}


// $objetoA = new A();
// $objetoA->mostrarA();

// $objetoA->mostrarStatic(); // não é a forma ideal

// acessar função estática de forma correta(forma ideal, acessar diretamente pela classe)
A::mostrarStatic(); // não é necessário ter uma instancia da classe ao utilizar esta forma

echo "<hr>";

echo A::$static, '<br>';
A::mostrarStatic();

echo "<hr>";

A::$static = 'Alterando membro de classe!';
echo A::$static, '<br>'; // acessar diretamente pela classe