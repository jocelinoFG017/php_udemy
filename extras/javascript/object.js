//{} forma literal de criar um objeto
const prod1 = {}
prod1.nome = "Smartphone" // nome criado dinamicamente
prod1.preco = 4998.90

console.log(prod1)

prod1['Desconto Top'] = 0.40 // evitar atributos com espaço

console.log(prod1)

const prod2 = {
    nome: 'Calça Legging',
    preco: 69.69,
    obj: {
        blabla: 1,
        obj: {
            blabla: 2
        }
    }
}

console.log(prod2)