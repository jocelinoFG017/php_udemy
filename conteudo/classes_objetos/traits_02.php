<h1 class="titulo">Traits #2</h1>

<?php

trait validacao{
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor{
    public function validarString($str){
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacaoMelhor, validacao{
        validacaoMelhor::validarString insteadof validacao;
        // validacao::validarString insteadof validacaoMelhor;

        validacao::validarString as validacaoSimples; //Adiciona um alias, como no sql. o método validarString agora chama-se validacaoSimples
    }

}

$user  = new Usuario();

var_dump($user->validarString('  '));
var_dump($user->validacaoSimples('  '));