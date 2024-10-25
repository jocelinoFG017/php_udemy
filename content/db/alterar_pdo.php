<h1 class="titulo">PDO: Alterar</h1>

<?php
require_once "conexao_pdo.php";

$sql = "UPDATE cadastro 
        SET nome = ?, nascimento = ?, email = ?,
        site = ?, filhos = ?, salario = ?
        WHERE id = ?
        ";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'gui',
    '1980-12-12',
    'guia@guia.com.br',
    'https://gui.cok',
    1,
    12000,
    9 // id
]);

if($resultado){
    echo "sucesso";
}else{
    print_r($stmt->errorInfo());
}