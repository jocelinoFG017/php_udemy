<h1 class="titulo">Try/Catch</h1>

<?php

// echo 7 / 0 ;
// echo intdiv(7, 0);

try {
    echo intdiv(7, 0);
} catch (Error $e) {
    echo "Teve um erro aqui 01 <br>";
} 


try{
    throw new Exception('Erro estranho acontecendo');
    // echo intdiv(7 , 0);
}catch(DivisionByZeroError $e){
    echo "Divisao por zero";
}catch (Throwable $e){
    echo "Erro encontrado: " . $e->getMessage() . '<br>';
} finally {
    echo "Sempre executado";
}

echo "Execução continua... <br>";
