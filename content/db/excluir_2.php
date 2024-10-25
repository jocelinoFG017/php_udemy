<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="titulo">Excluir Registro #2</div>

<?php

require_once "conexao.php";

$conexao = novaConexao();

if($_GET['excluir']){
    $excluirSql = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluirSql); // o prepare evita sqlinjection
    $stmt->bind_param('i', $_GET['excluir']); // i representa um valor inteiro
    $stmt->execute();
}

$registros = [];

$sql = "SELECT id, nome, email, nascimento FROM cadastro";
$resultado = $conexao->query($sql);

if($resultado->num_rows > 0){
    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
}elseif($conexao->error) {
    echo "Erro: " . $conexao->error;
}

$conexao->close();

?>
<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>Id</th>    
        <th>Nome</th>
        <th>Email</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach ($registros as $registro): ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['email'] ?></td>
                <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
                <td>
                    <a href="exercicio.php?dir=db&file=excluir_2&excluir=<?=$registro['id']?>" 
                    class="btn btn-danger"> Excluir</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>