<h1 class="titulo">Desafio tabela #2</h1>


<form action="#" method="post">
    <div>
        <label for="linhas">Linhas</label>
        <input type="number" value=<?= $_POST['linhas'] ?? 10;?> name="linhas" id="" placeholder="Linhas">
    </div>
    <div>
        <label for="colunas">Colunas</label>
        <input type="number" value=<?= $_POST['colunas'] ?? 10;?> name="colunas" id="" placeholder="Colunas">

    </div>
    <button>Generate Table</button>
</form>

<table>
<?php

$linhas = $_POST['linhas'];
$colunas = $_POST['colunas'];

if(!$linhas) $linhas = 2; // Se não for definido linha atribui 2 como default, assim irá gerar no minimo uma tabela 2x2
if(!$colunas) $colunas = 2; // mesma logica da linha acimas, aqui só seta/define o valor para colunas no caso


$num =1;
for($i = 0; $i < $linhas; $i++){
    echo "<tr>";
    for($j = 0; $j < $colunas; $j++){
        echo "<td>$num</td>";
        $num++;
    }
    echo "</tr>";
}
?>
</table>

<style>
    form > *{
        font-size: 1.8rem;

    }
    form > div {
        margin-bottom: 10px;
    }
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