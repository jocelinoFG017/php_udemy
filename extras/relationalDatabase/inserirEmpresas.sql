ALTER table empresas MODIFY cnpj VARCHAR(14);

insert into empresas (nome, cnpj)
VALUES
    ('Bradesco', 12345678901234),
    ('Vale', 98765432101234),
    ('Cielo', 78965234102568);

desc empresas;  -- descrever a tabela, mostra o structure da tabela, só via consulta
desc `prefeitos`;

SELECT * from empresas;
SELECT * from cidades;

insert INTO empresas_unidades
    (empresa_id, cidade_id, sede)
VALUES
    (1, 1, 1),
    (1, 2, 0),
    (2, 1, 0),
    (2, 2, 1);

SELECT * from empresas_unidades