<h1 class="titulo">Desafio 7 erros </h1>

<?php
/**
 * Resolver os erros de código apresentado pelo professor
 * No código abaixo
 * 
 interface Template {
    function metodo1();
    public function metodo2($parametro);
 }


 abstract class ClasseAbstrata extends Template {
    public function metodo3(){
        echo "estou funcionando";

    }
 }

class Classe implementes ClasseAbstrata{
    function __construct($parametro){

    }
 }

 $exemplo = Classe();
 $exemplo.metodo3();
 */

 interface Template {
    function metodo1();
    public function metodo2($parametro);
 }

// não se extende interface, há implementa, logo utiliza-se o implements
 abstract class ClasseAbstrata implements Template {
    public function metodo3(){
        echo "estou funcionando";
    }
 }

 // Aqui é o extends
class ClasseConcreta extends ClasseAbstrata{
    function __construct($parametro){
        echo "contruct funcionando <br>";
    }
    function metodo1(){
        echo "metodo 1 <br>";
    }
    function metodo2($parametro){
        echo "metodo2 <br>";
    }

 }

 $exemplo = new ClasseConcreta('parametro');
 $exemplo->metodo3();