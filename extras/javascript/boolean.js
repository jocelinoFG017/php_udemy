let isAtivo = false
console.log(isAtivo)

isAtivo = true
console.log(isAtivo)

isAtivo = 1
console.log(!isAtivo)

console.log('os verdadeiros...');
console.log(!!3);   // true
console.log(!!1);  // true
console.log(!!' ');  // true
console.log(!![]);  // true
console.log(!!Infinity);    // true
console.log(!!(isAtivo = true));    // true

console.log('os falsos');
console.log(!!0);
console.log(!!'');
console.log(!!null);
console.log(!!NaN);
console.log(!!undefined);
console.log(!!(isAtivo = false));
console.log('Para finalizar');

console.log(!!('' || null || 0 || ' ')); // true

let nome = "Maria"

console.log(nome || 'desconhecido')