<h1 class="titulo">Modificador Final</h1>

<?php
/**
 * Metodos ou classes com o modificador final não podem ser herdados
 * 
 */

 abstract class Abstrata {
    abstract public function metodo1();

    final public function metodo2(){
        echo "Não vou mudar <br>";

    }
 }

 class Classe extends Abstrata{
    public function metodo1(){
        echo "executando método 1<br>";
    }

    // public function metodo2(){
    //     echo "extendendo método 2 <br>";
    // }

 }

 $classe = new Classe();
 $classe->metodo1();
 $classe->metodo2();


 final class Unica {
    public $att = "Valor único";
 }

 $unica = new Unica();
 echo $unica->att;


//  class Duplicata extends Unica{
//     public $att2;
//  }