let numero = 1  // escopo global
{
    let numero = 2  // outro escopo
    console.log('dentro = ', numero)
}
console.log('fora =', numero)
