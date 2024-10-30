const funcs = []

// var não tem escopo de funcao, a variavel não vai ser respeitada
for (var i = 0; i < 10; i++){
    funcs.push(function(){
        console.log(i)
    })
}

funcs[2]() // apresenta o valor 10
funcs[8]() // apresenta o valor 10