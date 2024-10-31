-- Update sem where dá ruim
-- delete sem where dá muito ruim

UPDATE estados
SET nome = 'Maranhão'
WHERE sigla = 'MA'  -- sem o where todos os registros da coluna nome passaram a ser maranhão

SELECT est.nome from estados as est where sigla = 'MA'


Update estados
set nome = 'Paraná', populacao = 11.32  -- atualizando 2 colunas
Where sigla = 'PR'

SELECT est.nome, sigla, populacao
from estados est where sigla = "PR"