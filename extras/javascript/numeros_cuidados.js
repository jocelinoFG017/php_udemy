console.log(7 / 0)  // retorna infinity
console.log("3" + 2)  // vai concatenar, resultado 32. Preferencia da string
console.log("3" - 2) // nesse caso vai diminuir, resultado será 1. O simbolo + é especial no contexto de string, os demais não
console.log("7" / 2)  // vai dividir, retorna 3.5
console.log("show" * 2)  // not a number NaN
console.log(0.1 + 0.7)  // gera uma imprecisao 0.799999....
// console.log(10.toString()) //dá erro, e gera uma exception
console.log((10).toString()) // retorna 10
console.log((10.234).toFixed(2)) // retorna 10.23