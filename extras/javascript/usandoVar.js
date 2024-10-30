{{{{ var sera = "será? "}}}}
console.log(sera)

/*
Var criada em funcao é visivel somente na funcao, fora dela não.
Var criada fora de funcao, com escopo global é permitida/possível
de utilizar em demais áreas do código.
*/

function teste(){
    var local = 123
    console.log(local)
}
teste()
// console.log(local) // undefined, a var local é somente permitida dentro da funcao
