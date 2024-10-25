<h1 class="titulo">PDO: Excluir</h1>

<?php

require_once "conexao_pdo.php";

$sql = "DELETE FROM cadastro WHERE id >= ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

// if($stmt->execute([2])){ // exclui o registro com id = 2 no banco de dados
if($stmt->execute([10])){ // exclui os registros maiores/iguais ao id 10
    echo "Sucesso";
}else{
    echo "erro";
    print_r($stmt->errorInfo());
}

