<h1 class="titulo">Desafio Tabela </h1>

<?php
$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20'],
];


// foreach ($matriz as $linhas) {
//     foreach ($linhas as $valor) {
//         echo "$valor ";
//     }
//     echo "<br>";
// }

?>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>


<table>

    <?php
    foreach ($matriz as $linhas) {
        echo '<tr>';
        foreach ($linhas as $valor) {
            echo "<td>$valor</td>";
        }
    }
    ?>
</table>

<table>
    <?php
    foreach($matriz as $index => $linha){
        $style = $index % 2 === 1 ? 'background-color:lightblue' : '';
        echo "<tr style='{$style}'>";
        foreach($linha as $valor){
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
