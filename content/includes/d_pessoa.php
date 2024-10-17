<?php 
namespace Persona;

// echo __NAMESPACE__ . '<br>';

class Pessoa
{
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Pessoa criada! <br>";
    }

    function __destruct(){
        echo "<br>Bye bye person";
    }

    public function apresentar()
    {
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}
