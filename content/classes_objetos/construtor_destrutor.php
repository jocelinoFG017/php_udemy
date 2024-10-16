<h1 class="titulo">Construtor e Destrutor</h1>

<?php

class Pessoa{
    public $nome;
    public $idade;

    function __construct($novoNome, $idade){
        echo 'Construtor invocado <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo "die!";
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}

$pessoa = new Pessoa('Emily', 23);
$pessoa->apresentar();

unset($pessoa); // libera memóra, limpa a variavel