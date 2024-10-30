let num = 1
let num2 = 2

num++  // forma pós-fixada
console.log(num)

--num  // forma pré-fixada
console.log(num)

console.log(++num  === num2--) // na hora da comparação o valor de ambos é igual
// o num2 é decrementado depois da comparação

console.log(num == num2)
