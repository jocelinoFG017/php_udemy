const valores = [7.7, 8.9, 6.3, 9.2]

console.log(valores[0], valores[3])

console.log(valores[4]) // este indice é inexistente, mas não vai gerar um erro, só um undefined

valores[4] = 10

console.log(valores)
console.log(valores.length)

valores.push({id: 3}, false, null, 'teste') // adiciona valores no array

console.log(valores)

console.log(valores.pop()) // retira um elemento do array, começa do último elemento

delete valores[0] // deleta() o primeiro elemento do array, retira um atributo do objeto

console.log(valores)

console.log(typeof valores)