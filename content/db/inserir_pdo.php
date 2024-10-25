<h1 class="titulo">PDO: Inserir</h1>

<?php
require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro
        (nome, email, nascimento, site, filhos, salario)
        VALUES (
            'Guitherme',
            'guibito@gmail.com',
            '1998,07,21',
            'https://site.com.nt',
            0,
            3000
)";

$conexao = novaConexao();


if($conexao->exec($sql)){
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com o id $id";
}else{
    echo $conexao->errorCode() . "br";
    print_r($conexao->errorInfo());
}
