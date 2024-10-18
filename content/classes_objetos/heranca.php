<h1 class="titulo">Herança</h1>

<?php

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

class Usuario extends Pessoa{
    public $login;

    function __construct($nome, $idade, $login){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->login = $login;
        echo "Usuário criado! <br>";
    }

    function __destruct(){
        echo "<br>user byebye";
        parent::__destruct();
    }

    public function apresentar() {
        parent::apresentar(); // chama/utiliza o metodo direto da classe pai(Pessoa)
        // echo "@{$this->login}: {$this->nome}, {$this->idade} anos";
        echo "@{$this->login}: ";
    }
}

$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
$usuario->apresentar();

unset($usuario);