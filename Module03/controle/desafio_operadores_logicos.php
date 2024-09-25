<h1 class="titulo"> Desafio Operadores Lógicos</h1>

<!--
    2 trabalhos - > Terça e quinta
    Se os 2 forem executados -> TV 50' e sorvete
    Se apenas 1 for executado -> TV 32' e sorvete
    Se nenhum -> Ficar em casa é mais saudavel
-->

<form action="#" method="POST">
    <div>
        <label for="t1"> Trabalho 1 (Terça): </label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2"> Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button,
    select {
        font-size: 1.8rem;
    }
</style>

<?php

if (isset($_POST['t1']) && isset($_POST['t2'])) {

    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;

    if($t1 && $t2) {
        $tv = "50'";
    } elseif($t1 xor $t2) {
        $tv = "32'";
    }

    if($t1 or $t2) {
        $sorvete = true;
    }


    if($tv) {
        $result = "Compraremos um TV de $tv";
    }else{
        $result = "Sem tv";
    }


    if(!$sorvete) {
        $result .= " e sem sorvete";
    } else {
        $result .= " eba! sorvete";
    }

    echo "<p>$result</p>";
}
