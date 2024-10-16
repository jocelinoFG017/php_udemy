<h1 class="titulo">Traits #1</h1>

<?php

trait validacao{
    public $a = "valor A";
    public function validarStringBasica($str){
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor{
    public $b = "valor B";
    protected $c = "valor C(privado)";
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor;

    public function imprimirValorC(){
        echo '<br>', $this->c;
    }
}

$usuario = new Usuario();

var_dump($usuario->validarStringBasica('   '));
echo "<br>";
var_dump($usuario->validarStringMelhor('   '));
echo "<br>";

echo $usuario->a, '<br>', $usuario->b;

echo $usuario->imprimirValorC();