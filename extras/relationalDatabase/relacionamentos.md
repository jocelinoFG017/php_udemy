FK -> Foreign Key
PK -> Primary Key

Unique -> Fora o id, da tabela atual, em relacionamentos 1 para 1(1:1), em que haja FK de outra tabela 2 em que ela não pode se repetir na coluna da tabela 1. Isso acontece porque ela tem o atributo UNIQUE, caso não tenha é um relacionamento 1 para muitos(1:n), em que os valores da FK podem ser repetidas na tabela, sem que seja a PK.

Em relações n:n muitos para muitos, cria-se outra tabela, ou seja um 3ª tabela.

