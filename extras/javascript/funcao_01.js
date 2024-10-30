// sem retorno
function imprimirSoma(a, b){
    console.log(a + b)
}

imprimirSoma(2, 3)
// é possível passar somente 1 valor, o 2º elemento será undefined
imprimirSoma(2)  // oque vai gerar um NaN

imprimirSoma(2, 6, 4, 6, 7)  // ignora parametros adicionais

// com retorno
function soma(a, b = 0){
    return a + b
}

console.log(soma(2, 4))
console.log(soma(3))