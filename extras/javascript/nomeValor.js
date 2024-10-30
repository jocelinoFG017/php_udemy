//par nome/valor

const saudacao = "oila"  // contexto léxico 1

function exec(){
    const saudacao = "falla" // contexto léxico 2
    return saudacao
}

// Objetos são grupos aninhados de pares chave/valor

const cliente = {
    nome: 'perola',
    idade: 25,
    peso: 60,
    endereco: {
        logradouro: "rua Aparecida",
        numero: 123
    }
}

console.log(saudacao)
console.log(exec())
console.log(cliente)