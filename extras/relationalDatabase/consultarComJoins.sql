SELECT * from cidades c 
INNER JOIN `prefeitos` p on c.id = p.cidade_id

SELECT * from cidades c 
LEFT JOIN `prefeitos` p on c.id = p.cidade_id

SELECT * from cidades c 
RIGHT JOIN `prefeitos` p on c.id = p.cidade_id

-- SELECT * from cidades c FULL JOIN `prefeitos` p on c.id = p.cidade_id

SELECT * from cidades c LEFT OUTER JOIN `prefeitos` p on c.id = p.cidade_id
UNION
SELECT * from cidades c RIGHT JOIN `prefeitos` p on c.id = p.cidade_id