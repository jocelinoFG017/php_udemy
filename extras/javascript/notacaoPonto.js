console.log(Math.ceil(6, 1))

const obj1 = {}
obj1.nome = 'bola'
// obj1['nome'] = 'bola2'
console.log(obj1.nome)

function Obj(nome){
    this.nome = nome // o atributo nome torna-se público
    this.exec = function (){
        console.log('exec...')
    }
}

const obj2 = new Obj('cadeira')
const obj3 = new Obj('cadeira')

console.log(obj2.nome)
console.log(obj3.nome)
obj3.exec()
