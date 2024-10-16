<?php 

include('d_pessoa.php');
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
