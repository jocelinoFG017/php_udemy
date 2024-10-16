<h1 class="titulo">Desafio Switch</h1>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">km-milha</option>
        <option value="milha-km">milha-km</option>
        <option value="metro-km">metro-km</option>
        <option value="km-metro">km-metro</option>
        <option value="celsius-fahrenheit">celsius-fahrenheit</option>
        <option value="fahrenheit-celsius">fahrenheit-celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form>* {
        font-size: 1.8rem;
    }
</style>

<?php

const KM_METRO = 1000;

$conversao = $_POST['conversao'];
$valor =  $_POST['param'] ?? 0; // Se não vier definido o valor padrão torna-se 0

switch ($conversao) {
    case 'km-milha':
        $calculo = $valor / 1.6093;
        $calculo = number_format($calculo, 3);
        echo $valor . " Km convertidos, são " . $calculo . " Milhas";
        break;
    case 'milha-km':
        $calculo = $valor * 1.6093;
        echo $valor . " Milhas convertidas, são " . $calculo . " Km";
        break;
    case 'metro-km':
        $calculo = $valor / KM_METRO;
        $calculo = number_format($calculo, 3);
        echo $valor . " metros convertidos, são " . $calculo . " Km";
        break;
    case 'km-metro':
        $calculo = $valor * KM_METRO;
        // $calculo = number_format($calculo, 2);
        echo $valor . " Km convertidos, são " . $calculo . " Metros";
        break;
    case 'celsius-fahrenheit':
        $f  = ($valor *1.8) + 32;
        echo "$valor" . " em celsius convertido para fahrenheit fica $f";
        break;
    case 'fahrenheit-celsius':
        $c  = ($valor-32)/1.8;
        $calculo = number_format($c, 2);
        echo "$valor" . " em Fahrenhiet convertido para celsius fica $calculo";
        break;
    default:
        $mensagem =  "Nenhum valor calculado";
}

echo "<p>$mensagem</p>";
