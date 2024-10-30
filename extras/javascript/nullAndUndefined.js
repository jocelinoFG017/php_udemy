let valor // não inicializada, undefined

console.log(valor)

// não aponta para nenhum endereço de memória e não possui nenhum valor

valor = null // ausencia de valor
console.log(valor)

// console.log(valor.toString()) // Erro!

const produto = {}

console.log(produto.preco) // undefined
console.log(produto)

produto.preco = 3.50
console.log(produto)

produto.preco = undefined // evite atribuir undefined

console.log(!!produto.preco)
console.log(produto)

// delete produto.preco
produto.preco = null // sem preço

console.log(!!produto.preco)
console.log(produto)