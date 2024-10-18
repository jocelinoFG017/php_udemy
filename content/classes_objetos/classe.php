<h1 class="titulo">Primeira Classe</h1>

<?php

class Cliente {
    // atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar(){
        echo "Nome: {$this->nome} <br>" . "Idade: {$this->idade}"; // $this aponta para o objeto atual

    }
}

$c1 = new Cliente();
$c1->nome = 'Ana Vitória';
$c1->idade = 17;
$c1->apresentar();

echo "<br>";

$c2 = new Cliente;
$c2->nome = 'Gabriela';
$c2->idade = "23";
$c2->apresentar();