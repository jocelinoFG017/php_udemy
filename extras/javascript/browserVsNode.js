let a = 3

global.b = 123

this.c = 456
this.d = false
this.e = 'teste'

console.log(this.a)
console.log(global.b)  // global equivale ao window no browser

console.log(this.c)
console.log(module.exports.c)
console.log(module.exports === this)
console.log(module.exports)

// criando uma variavel sem var ou let
abc = 3 // Não faça isso

console.log(global.abc)