CREATE Table empresas (
    id INT UNSIGNED not NULL AUTO_INCREMENT,
    nome VARCHAR(255) not NULL,
    cnpj int UNSIGNED,
    PRIMARY KEY (id),
    UNIQUE KEY (cnpj)
);


-- Relacionamento n:n necessitam de uma 3ª tabela
-- Na consulta a seguir é a tabela que vai intermediar empresas e `cidades`

CREATE Table IF NOT EXISTS empresas_unidades (
    empresa_id INT UNSIGNED NOT NULL,
    cidade_id INT UNSIGNED NOT NULL,
    sede TINYINT(1) NOT NULL,
    PRIMARY KEY(empresa_id, cidade_id)
);