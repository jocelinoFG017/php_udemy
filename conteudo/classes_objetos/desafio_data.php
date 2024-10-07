<h1 class="titulo">Desafio Data</h1>

<?php
/**
 * Desafio da Classe data
 * Atributos: mes, dia, ano
 * dia = 1
 * mes = janeiro ou 1
 * ano = 1970
 */

class DesafioData
{
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentarData()
    {
        echo "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}


$data = new DesafioData();

$data->apresentarData();
echo "<hr>";
$natal = new DesafioData;
$natal->dia = 25;
$natal->mes = 12;
$natal->ano = 2024;

$natal->apresentarData();
