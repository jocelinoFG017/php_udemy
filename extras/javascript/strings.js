const escola = "cod3r"

console.log(escola.charAt(4)) // retorna a letra r
console.log(escola.charAt(5))  // nao retorna nada, nem gera erro
console.log(escola.charCodeAt(3))  // pega o valor na tabela ASCII
console.log(escola.indexOf(3))  //

console.log(escola.substring(1))  // começa no indice 1
console.log(escola.substring(0, 3)) // vai do 0 ao 3, não inclui o 3
console.log('Escola '.concat(escola).concat("!"))
console.log('Escola ' + escola + "!") // no contexto de string o + funciona como concatenação
console.log(escola.replace(3, 'e'))

console.log('Ana, Maria, ellie'.split(',')) // funcao split(separador), a virgula seria o separador, o split() gera um array e cada elemento
// gera-se um array com 3 valores
