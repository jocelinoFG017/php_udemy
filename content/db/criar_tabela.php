<div class="titulo">Criar Tabela</div>

<?php

require_once "conexao.php";

// DDL - Data Definition Lang.
$sql = "CREATE TABLE IF NOT EXISTS cadastro (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    nascimento DATE,
    email VARCHAR(150) NOT NULL,
    site VARCHAR(150),
    filhos INT,
    salario FLOAT
)";

$conexao = novaConexao();

$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso :)";
}else{
    echo "Erro: " . $conexao->error;
}

$conexao->close();