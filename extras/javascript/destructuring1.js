//novo recurso do ES2015
/**
 * Em JavaScript, o destructuring é uma maneira de extrair valores 
 * de arrays ou propriedades de objetos em variáveis distintas de 
 * forma mais concisa e direta. Ele permite "desestruturar" os 
 * dados em variáveis individuais, facilitando o trabalho com
 *  estruturas de dados complexas
 */
const pessoa = {
    nome:'Ana',
    idade: 5,
    endereco:{
        logradouro: 'Rua ABC',
        numero: 1000
    }
}

const { nome, idade} = pessoa  // tire de dentro do objeto o nome e idade, que objeto? pessoa

console.log(nome, idade)

const {nome: n, idade: i} = pessoa
console.log(n, i )

const {sobrenome, bemHumorada = true} = pessoa

console.log(sobrenome, bemHumorada)


const {endereco:{logradouro, numero, cep}} = pessoa

console.log(logradouro, numero, cep) // cep não foi declarado em nenhum momento, logo fica undefined

const {conta: {ag, num}} = pessoa
console.log(ag, num)