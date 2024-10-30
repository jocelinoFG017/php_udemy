const funcs = []

/**
 * VAR
 * Caso var seja usado para declarar i, a variável i terá escopo de função 
 * (ou escopo global, se fora de uma função) e não de bloco. Portanto,
 * não é criada uma nova variável i a cada iteração do loop;
 * em vez disso, todas as funções adicionadas ao array funcs
 * capturam a mesma variável i.
 * 
 * 
 * LET
 * Quando let é usado para declarar i, ele cria uma nova variável i a
 * cada iteração do loop. Isso significa que cada função adicionada ao
 * array funcs capturará o valor específico de i naquele momento da iteração.
 */
for (let i = 0; i < 10; i++){
    funcs.push(function(){
        console.log(i)
    })
}

funcs[2]() // apresenta o valor 2
funcs[8]() // apresenta o valor 8
