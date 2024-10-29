const nome = 'Rebeca'

const concatenacao = 'Olá ' + nome + '!'

// template string, suporta quebra de linha
const template = `
    Olá, 
    ${nome}!
`

console.log(concatenacao, template)

// expressoes...
console.log(`1 + 1 = ${1 + 1}`)

// arrow function
const up = texto => texto.toUpperCase()

console.log(`Ei... ${up('cuidado')}!`)
