<h1 class="titulo">Métodos Mágicos</h1>

<?php


class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        echo "Construtor Invocado! <br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo "Destructor invoked!";
    }

    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos";
    }

    public function apresentar(){
        echo $this . "<br>";
        
    }

    public function __get($atributo){
        echo "Lendo atributo não declarado: {$atributo} <br>";

    }

    public function __set($atributo, $valor){
        echo "<br>Alterando atributo não declarado: {$atributo}/{$valor} <br>";

    }

    public function __call($method, $args){
        echo "Tentando executar método {$method}.";
        echo "<br>, com os parametros: ";
        print_r($args);
    }
}

$p = new Pessoa('Richie', 34);// __construct

echo $p->apresentar();  // chamando o __toString, e chama o metodo sem o __call
echo "<hr>";
echo $p->nomeCompleto;  // __get
echo "<hr>";
$p->nomeCompleto = "muito Legal";  // __set
echo "<hr>";
echo $p->nome;          // acessa o atributo diretamentes sem o __get
$p->exec(1, 'teste', true, [1, 3, 4]); // chama o __call porque o método não existe no objeto
echo "<hr>";

$p = NULL;  // __desctruct