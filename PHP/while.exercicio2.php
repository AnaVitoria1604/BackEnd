<?php

// coloque uma constante como o maior numero

define ('NUM_MAX', 30);

//iniciar a variavel com o primeiro numero impar

$contador = 1;

//usar um loop do-while para imprimir todos os numeros impares menores do que 30

do{
    echo $contador. "<br>";
    $contador += 2;
}while ($contador <= NUM_MAX);

?>